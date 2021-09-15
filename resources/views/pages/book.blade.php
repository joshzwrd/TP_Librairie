@extends('layout');

@section('page-title')
Book list
@endsection

@section('page-content')
<style>
    #people-content{
    text-align: center;
    margin: 20px 0px
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Book list</h1>
            </div>
        </div>

        <div class="row">
            @foreach($books as $book)
                <div class="col-4" id="people-content">
                    <p class="fw-bolder">
                        {{ $book->title }}
                    </p>

                    <p class="fw-bolder">
                        Owner :<br>
                        -
                        {{ $book->owner->name }}
                    </p>

                    <p>
                        {{ $book->owner->telephone }}
                    </p>

                </div>
            @endforeach

        </div>
    </div>
@endsection
