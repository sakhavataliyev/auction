@extends('layouts.app')
@section('title', 'Lot Edit')
@section('content')


@php
      $categories = DB::table('categories')->latest()->get();
@endphp

    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Lot</h6>
                    <p class="text-sm mb-1">Update</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('lots.update', $lot) }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Title</label>
                              <input class="form-control{{($errors->first('title') ? " is-invalid" : "")}}"  type="text" name="title" 
                              value="{{ old('title', $lot->title) }}" placeholder="Title" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>  
               
                        <div class="col-lg-4">  
                          <div class="form-group">
                              <label for="exampleFormControlSelect2">Category</label>
                              <select class="select2-multiple form-control" name="category_id[]" multiple="multiple" id="exampleFormControlSelect2">
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}" {{ in_array($category->id, old('category_id', $lot->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                          {{ $category->name }}
                                      </option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                     </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label>
                          <textarea class="form-control{{($errors->first('description') ? " is-invalid" : "")}}" name="description"  id="exampleFormControlTextarea1" rows="2">{{ old('description', $lot->description) }}</textarea>
                        </div>
                      </div>
                </div>

                    <div class="text-center mt-4">
                      <button class="btn btn-primary me-2" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                          Update
                      </button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>


@endsection