<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{$article ?? ''->title}}</title>
	<link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
	<h1>{{ $article ?? '' -> title }}</h1>
 <br>
 {{ $article ?? '' -> content }}
 <br>
 {{ $article ?? '' -> user-> name }} | {{ $article ?? '' -> category-> name }} | 
 @foreach($article ?? '' -> tags as $tag)
 {{ $tag->name }}
 @endforeach
</body>
</html>
 


