@extends('layout.baseLayout') 
@section('content')
{{Form::open(['url' => '/update/musique/action'])}}
 {{Form::label('title','Titre de la chanson')}}
 {{Form::text('title', $title)}}
 {{Form::label('author','Auteur')}}
 {{Form::select('author[]', $authors,null,array('multiple' => 'multiple'))}}
 {{Form::hidden('id', $id)}} 
 {{Form::submit('update')}}
 {{Form::close()}}
 @endsection
 @include('layout.baseFooter')
