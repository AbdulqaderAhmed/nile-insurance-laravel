@extends('pages.admin.admin') 

@section('title') Dashboard @endsection

@section('admin')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Lists
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Brand Name</th>
                        <th>MOdel Type</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($insurance as $item)
                    <tr>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->model}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <a
                                href="{{ url('/show/'.$item->id) }}"
                                class="btn btn-warning"
                                >Edit</a
                            >
                            <a
                                class="btn btn-danger"
                                onclick="event.preventDefault(); document.getElementById('item-delete').submit();"
                                >Delete</a
                            >
                        </td>
                        <form
                            action="{{ url('/delete/'.$item->id) }}"
                            method="POST"
                            id="item-delete"
                        >
                            @csrf @method('DELETE')
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $insurance->links() }}
</div>
@endsection
