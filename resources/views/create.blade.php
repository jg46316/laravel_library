@extends('parent')

@section('main')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div align="right">
        <a href="{{ route('book.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label class="col-md-4 text-right">Enter Title</label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label class="col-md-4 text-right">Enter ISBN</label>
            <div class="col-md-8">
                <input type="text" name="isbn" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Cover Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Author</label>
            <div class="col-md-8">
                <input type="text" name="author" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Price</label>
            <div class="col-md-8">
                <input type="text" name="price" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>

    </form>

@endsection
