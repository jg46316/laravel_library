@extends('parent')

@section('main')

    <a href="{{ route('logout') }}"  class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <div align="right">
        <a href="{{ route('book.create') }}" class="btn btn-success ">Add</a>
    </div>
    <br />
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th width="10%">Title</th>
            <th width="10%">Image</th>
            <th width="10%">ISBN</th>
            <th width="20%">Author</th>
            <th width="20%">Price</th>
            <th width="30%">Action</th>
        </tr>
        @foreach($data as $row)
            <tr>

                <td>{{$row->title}}</td>
                <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                <td>{{$row->isbn}}</td>
                <td>{{$row->author}}</td>
                <td>{{$row->price}}</td>
                <td>

                    <form action="{{ route('book.destroy', $row->id) }}" method="post">
                        <a href="{{ route('book.show', $row->id) }}" class="btn btn-primary">Show</a>
                        @if(Auth::user()->id == $row->user_id || Auth::user()->id == 2 )
                        <a href="{{ route('book.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                        @endif
                        @csrf
                        @method('DELETE')
                        @if(Auth::user()->id == $row->user_id || Auth::user()->id == 2 )
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endif

                    </form>
                </td>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
