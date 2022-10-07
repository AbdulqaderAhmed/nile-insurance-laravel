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

                        <div class="row">

                            <div class="row mb-3 col-md-6">
                                <label for="body" class="col-md-6 col-form-label text-md-end">Body Type:</label>
    
                                <div class="col-md-6">
                                    <input id="body" type="text" class="form-control" name="body" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="description" class="col-md-6 col-form-label text-md-end">Car Description:</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="model" class="col-md-6 col-form-label text-md-end">Model:</label>
    
                                <div class="col-md-6">
                                    <input id="model" type="text" class="form-control" name="model">
                                </div>
                            </div>
    
                            <div class="row mb-3 col-md-6">
                                <label for="engine" class="col-md-6 col-form-label text-md-end">Engine Type:</label>
    
                                <div class="col-md-6">
                                    <input id="engine" type="text" class="form-control" name="engine">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="transmission" class="col-md-6 col-form-label text-md-end">Transmission:</label>
    
                                <div class="col-md-6">
                                    <input id="transmission" type="text" class="form-control" name="transmission">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="cc" class="col-md-6 col-form-label text-md-end">CC:</label>
    
                                <div class="col-md-6">
                                    <input id="cc" type="text" class="form-control" name="cc">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand1" class="col-md-6 col-form-label text-md-end">2022 Brand:</label>
    
                                <div class="col-md-6">
                                    <input id="brand1" type="text" class="form-control" name="brand1">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand2" class="col-md-6 col-form-label text-md-end">2019 - 2021:</label>
    
                                <div class="col-md-6">
                                    <input id="brand2" type="text" class="form-control" name="brand2">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand3" class="col-md-6 col-form-label text-md-end">2016 - 2018:</label>
    
                                <div class="col-md-6">
                                    <input id="brand3" type="text" class="form-control" name="brand3">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand4" class="col-md-6 col-form-label text-md-end">2013 - 2015:</label>
    
                                <div class="col-md-6">
                                    <input id="brand4" type="text" class="form-control" name="brand4">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand5" class="col-md-6 col-form-label text-md-end">2010 - 2012:</label>
    
                                <div class="col-md-6">
                                    <input id="brand5" type="text" class="form-control" name="brand5">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand6" class="col-md-6 col-form-label text-md-end">2007 - 2009:</label>
    
                                <div class="col-md-6">
                                    <input id="brand6" type="text" class="form-control" name="brand6">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand7" class="col-md-6 col-form-label text-md-end">2004 - 2006:</label>
    
                                <div class="col-md-6">
                                    <input id="brand7" type="text" class="form-control" name="brand7">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand8" class="col-md-6 col-form-label text-md-end">2001 - 2003:</label>
    
                                <div class="col-md-6">
                                    <input id="brand8" type="text" class="form-control" name="brand8">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand9" class="col-md-6 col-form-label text-md-end">1998 - 2000:</label>
    
                                <div class="col-md-6">
                                    <input id="brand9" type="text" class="form-control" name="brand9">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand10" class="col-md-6 col-form-label text-md-end">1995 - 1997:</label>
    
                                <div class="col-md-6">
                                    <input id="brand10" type="text" class="form-control" name="brand10">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand11" class="col-md-6 col-form-label text-md-end">1993 - 1094:</label>
    
                                <div class="col-md-6">
                                    <input id="brand11" type="text" class="form-control" name="brand11">
                                </div>
                            </div>

                            <div class="row mb-3 col-md-6">
                                <label for="brand12" class="col-md-6 col-form-label text-md-end"><=1992:</label>
    
                                <div class="col-md-6">
                                    <input id="brand12" type="text" class="form-control" name="brand12">
                                </div>
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
