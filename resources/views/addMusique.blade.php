@extends('layout.baseLayout') 
 @section('title','Musiques')
 @section('content')
 {{Form::open(['url' => '/insert/musique', 'files'=> true])}}
 {{Form::label('title','Titre de la chanson')}}
 {{Form::text('title')}}
 {{Form::label('author','Auteur')}}
 {{Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
 {{Form::file('cover')}} 
 {{Form::submit('Submit')}}
 {{Form::close()}}
 @endsection
 @include('layout.baseFooter')
