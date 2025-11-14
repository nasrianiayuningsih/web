@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')
<div class="container mt-4">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('img/Rid.jpeg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Farid</h5>
                    <p class="card-text">Anjay slebew</p>
                    <p class="text-muted small mb-0">2301010118</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('img/Nas.jpeg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Nasriani</h5>
                    <p class="card-text">Bar-bar senggol bacok</p>
                    <p class="text-muted small mb-0">2301010114</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
