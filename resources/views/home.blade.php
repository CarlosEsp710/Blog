@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Artículos
                    <a href="{{ route('posts.create') }}" class="btn sm btn-primary float-right">Crear</a>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection