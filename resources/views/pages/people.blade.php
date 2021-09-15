@extends('layout');

@section('page-title')
People list
@endsection

@section('page-content')
<style>

#people-content{
    text-align: center;
    margin: 20px 10px
}

</style>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">People list</h1>
            </div>
        </div>

        <div class="row" id="people-content">
            @foreach($peoples as $people)
                <div class="col-4">
                    <p class="fw-bolder">
                        {{ $people->name }}
                    </p>

                    <p>
                        {{ $people->telephone }}
                    </p>

                    <p>Books :</p>

                    @if(count($people->books) > 0)
                        <ul>
                            @foreach($people->books as $book)
                                <li>
                                    {{ $book->title }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if(count($people->books) == 0)
                        <p>Ce propriétaire n'a pas encore de livre</p>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
@endsection
