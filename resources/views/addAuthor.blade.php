@extends('layout.baseLayout') 
 @section('title','artistes')
 @section('content')
 
 {{Form::open(['url' => '/insertAuthor'])}}
 {{Form::label('name','Nom de l\'artiste')}}
 {{Form::text('name')}}
 {{Form::submit('Insérer')}}
 {{Form::close()}}
 <ul>
    @foreach($authors as $author)
        <li> {{$author}} </li>
    @endforeach
 </ul>
 @endsection
 @include('layout.baseFooter')