@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
<a href="{{ url('/') }}" class="header-menu">Back</a>
  New Post
</h1>
<form method="post" action="{{  url('/posts')  }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body">{{ old('body')}}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection


{{--
<!-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>{{ $post->title }}</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
  </div>
</body>

</html> -->
--}}