@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <div class="mb-4">
                        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">
                            Go back to Posts Page
                        </a>
                    </div>
                    
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