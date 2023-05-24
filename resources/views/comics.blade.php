@extends('layouts.app')

@section('content')
    
        <div class="container main_home mt-4">
            <div class="row row-cols-6 g-3">
                @foreach ($comics as $single_comic)
                    <div class="col">
                        <div class="card text-white">
                            <img src="{{ $single_comic['thumb'] }}" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $single_comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
   
@endsection