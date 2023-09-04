@extends('layouts.app')
@section('title', 'Lot show')
@section('content')

  <div class="container my-3 py-3">
    <div class="row">
      <div class="col-12 col-xl-12 mb-4">
        <div class="card border shadow-xs h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 col-9">
                <h6 class="mb-0 font-weight-semibold text-lg">
                  {{ $category->name }}
                </h6>
              </div>
              <div class="col-md-4 col-3 text-end">
                <a href="{{ route('categories.edit', $category) }}">
                  <button type="button" class="btn btn-white btn-icon px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-sm mb-4">
              {{-- {{ $category->description }}   --}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection