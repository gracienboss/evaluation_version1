<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musique as Musique; // c'est une maniere de passer un alias a ce qu'on chargé
use App\Author as Author;


class ListeController extends Controller
{
    
  
    public function index(){

        $musiques = Musique::all();


        $value = array();
        $i = 0;
                    
                                      
        
        foreach($musiques as $musique){
         
            array_push($value,[

               
                "title" =>$musique->title,
                "author" => array(),
                "id" => $musique->id ,
                "cover" =>$musique->cover,
            ]
         );
             foreach($musique->authors as $author){
                array_push($value[$i]["author"], $author->name);
             };
             $i ++;
        };
        return view('liste', 
       
        ["musiques" => $value]);
    }



    public function addMusique(){
        $authors = Author::all();
        $authorsList = Array();
            foreach( $authors as $author){
                 $authorsList[ $author->id] = $author->name;
               
            }
        return view('addMusique', ['authors' =>  $authorsList]);
    }

      public function insertMusique(Request $request){
        
        $store = $request->cover->store('public/img');
        $store = str_replace("public", "storage", $store);
        
        $musique = new Musique;
        $musique->title = $request->title;
        $musique->cover = $store;
        
        $musique->save();
        
        $musique->authors()->attach($request->author); 
        return redirect ('/liste');
        
    }
    public function deleteMusique(Request $request){
        $musique = Musique::find($request->id);
        $musique->authors()->detach();        
        $musique->delete();
         
        return redirect ('/liste');
        
    }

    
    public function updateMusique(Request $request){
        $musique = Musique::find($request->id);        
        $authors = Author::all();
        $authorsList = Array();
            foreach( $authors as $author){
                 $authorsList[ $author->id] = $author->name;
               
            }
        return view ('updateMusique', ['title' =>$musique->title, 'authors' => $authorsList, 'id' => $musique->id]);
        
    }

    public function updateMusiqueAction(Request $request){
        $musique = Musique::find($request->id); 
        $musique->title = $request->title; 
      //$musique->author = $request->author;
        $musique->save();

        $musique->authors()->detach(); 
        $musique->authors()->attach($request->author); 
        
        return redirect ('/liste');
    }
}