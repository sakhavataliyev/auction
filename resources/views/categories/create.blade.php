@extends('layouts.app')
@section('title', 'Category Create')
@section('content')

    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Category</h6>
                    <p class="text-sm mb-1">Create</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label class="form-control-label" for="input-username">Name</label>
                            <input class="form-control{{($errors->first('name') ? " is-invalid" : "")}}"  type="text" name="name" 
                            value="{{ old('name') }}" placeholder="Name" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                        </div>                          
                    </div>
            
                    <div class="text-center mt-4">
                        <button class="btn btn-primary me-2" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection