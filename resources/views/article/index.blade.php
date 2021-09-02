@extends('layouts.app')

@if (Session::has('statusCreated'))
	{{ Session::get('statusCreated') }}
@endif

@if (Session::has('statusEdited'))
	{{ Session::get('statusEdited') }}
@endif

@section('content')
	<h1>Список статей</h1>
	@foreach ($articles as $article)
		<a href="articles/{{ $article->id }}"><h2>{{ $article->name }}</h2></a>
        <div>{{ Str::limit($article->body, 200) }}</div>
        <a href="{{ route('articles.edit', $article) }}">Редактировать статью</a><br>
	@endforeach
	<a href="{{ route('articles.create') }}">Создать статью</a>
@endsection