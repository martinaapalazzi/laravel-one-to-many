@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        {{ $type->title }}
                    </h1>
                    
                    <div>
                        <h3>
                            {{ $type->slug }}
                        </h3>
                        <p>
                            {{ $type->content }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection