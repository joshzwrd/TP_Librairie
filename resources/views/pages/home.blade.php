@extends('layout');
@section('page-title')
Home
@endsection

@section('page-content')
<style>
    h1{
        text-align: center;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Bienvenue sur mon site</h1>
            </div>

            <p>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
            </p>
        </div>
    </div>
@endsection
