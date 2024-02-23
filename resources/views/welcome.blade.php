@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <div class="bg-container">
        <div class="container main-container">
            <h1>Current Series</h1>
            <div class="row gy-3">
                @foreach($data as $key=> $elem)
                <div class="col-2">
                    <div class="card">
                        <img src="{{$elem['thumb']}}" class="card-img-top" alt="comics">
                        <div class="card-body mb-3">
                        <h5 class="text-white">{{$elem['title']}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="button-container pt-3">
                <button>Load More</button>
            </div>
        </div>
    </div>

@endsection