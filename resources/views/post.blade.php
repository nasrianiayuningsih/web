@extends('layouts.layout2')

@section('content')

<div class="container mt-4">
    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['content'] }}</p>

    <a href="/welcome" class="btn btn-secondary">Kembali</a>
</div>

@endsection
