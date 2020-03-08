@extends('parent')

@section('main')

    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('book.index') }}" class="btn btn-default">Back</a>
        </div>
        <br />
        <h3>Title - {{ $data->title }} </h3>
        <h3>ISBN - {{ $data->isbn }}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
        <h3>Author - {{ $data->author }} </h3>
        <h3>Price - {{ $data->price }}</h3>
    </div>
@endsection
