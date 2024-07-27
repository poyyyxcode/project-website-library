@extends('main.main')
@section('container')
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @include('main.buku')
        </div>
    </div>
@endsection