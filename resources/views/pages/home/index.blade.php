@extends('layouts.app')

@section('title')
   Home
@endsection

@section('content')
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
                    </tr>
                    @endforeach
                </tbody>
                {{ $insurance->links() }}
            </table>
        </div>
    </div>
</div>
@endsection