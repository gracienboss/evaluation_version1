
@extends('layout.baseLayout') 
 @section('title','Listes')
 @section('content')
 <table style="width:100%">
    <tr class="table-title">
        <th>Title of song</th>
        <th>Author</th>
        <th>Cover</th>
        <th>Supprimer / Mettre à jour</th>
     </tr>

    @foreach($musiques as $musique)
         
         <tr class="table-content"> 
         <th>  <p>{{$musique['title']}}  </p></th>
         <th>
           @foreach($musique['author'] as $author) 
            {{$author}}
            @endforeach
          </th>
          <th><img style="max-width: 40px;" src="{{ URL::asset($musique['cover'])}} "></th>
          <th id="update-delete">
        <!-- supprimer une chanson -->
         {{Form::open(['url' => '/delete/musique'])}}
         {{Form::hidden('id',$musique['id'])}}
         {{Form::submit('supprimer')}}
         {{Form::close()}}

         <!-- update-->
         {{Form::open(['url' => '/update/musique'])}}
         {{Form::hidden('id',$musique['id'])}}
         {{Form::submit('mettre à jour')}}
         {{Form::close()}}
        </th>
      </tr>
    @endforeach
  </table>
 @endsection
 @include('layout.baseFooter')
 