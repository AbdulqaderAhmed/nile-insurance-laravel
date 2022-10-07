@extends('pages.admin.admin') 

@section('title') 
    Dashboard
@endsection

@section('admin')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>All the price under this table subject to x1000</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Body Type</th>
                            <th>description</th>
                            <th>Model</th>
                            <th>Engine Type</th>
                            <th>Transmission Type</th>
                            <th>CC</th>
                            <th>2022 Brand</th>
                            <th>2019-2021</th>
                            <th>2016-2018</th>
                            <th>2013-2015</th>
                            <th>2010-2012</th>
                            <th>2007-2009</th>
                            <th>2004-2006</th>
                            <th>2001-2003</th>
                            <th>1998-2000</th>
                            <th>1995-1997</th>
                            <th>1993-1094</th>
                            <th><=1992</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($insurance as $item)
                        <tr>
                            <td>{{$item->id }}</td>
                            <td>{{$item->body}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->transmission}}</td>
                            <td>{{$item->model}}</td>
                            <td>{{$item->engine}}</td>
                            <td>{{$item->cc}}</td>
                            <td>{{$item->brand1}}</td>
                            <td>{{$item->brand2}}</td>
                            <td>{{$item->brand3}}</td>
                            <td>{{$item->brand4}}</td>
                            <td>{{$item->brand5}}</td>
                            <td>{{$item->brand6}}</td>
                            <td>{{$item->brand7}}</td>
                            <td>{{$item->brand8}}</td>
                            <td>{{$item->brand9}}</td>
                            <td>{{$item->brand10}}</td>
                            <td>{{$item->brand11}}</td>
                            <td>{{$item->brand12}}</td>
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
    </div>
@endsection
