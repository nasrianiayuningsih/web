@extends('layouts.layout2')
@section('title','Beranda')
@section('content')

<!-- LIST UNIVERSITAS (Dari Database) -->
@foreach($posts as $post)
<div class="mt-4">

    <!-- Gambar Fullwidth -->
    <img src="{{ asset('img/'.$post['img']) }}"
    class="w-100"
    style="object-fit: cover; max-height: 420px;">


    <!-- Judul, Deskripsi, Tombol -->
    <div class="text-center mt-3 mb-5">
        <h5>{{ $post['title'] }}</h5>

        <p style="max-width: 900px; margin:auto;">
            {{ Str::limit($post['content'], 200) }}
        </p>

<a href="{{ route('posts.show', ['id' => $post['id']]) }}" class="btn btn-link">
    Read More →
</a>

    </div>

</div>
@endforeach

@endsection
