@extends('pages.admin.admin') 

@section('title') Create @endsection

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Create</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/store') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">First Name:</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">Last Name:</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" required autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="brand" class="col-md-4 col-form-label text-md-end">Brand Name:</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">Model:</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Price:</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
