@extends('layouts.app')
@section('title', 'Lots Statistics')
@section('content')



<div class="container my-3 py-3">
    <div class="row">     
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Lots Statistics</h6>
                  <p class="text-sm">Index</p>
                </div>
                <div class="ms-auto d-flex">
                  <a class="btn-inner--text text-white" href="{{ route('lots.create') }}">
                    <button type="button" class="btn btn-sm btn-primary btn-icon d-flex align-items-center me-2">
                      <span class="btn-inner--icon">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                          <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                        </svg>
                      </span>
                       Add lot
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">

              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">NO</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Title</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Description</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Created</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Updated</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                        
                    @foreach ($lots as $key=>$row)
                        <tr>
                          <td>
                            <div class="d-flex flex-column justify-content-center ms-1">
                                <p class="text-sm text-secondary mb-0">{{ $lots->firstItem() + $key }}</p>
                            </div>
                          </td>

                          <td style="min-width:80px; max-width:150px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                            <div class="d-flex px-2 py-1">
                              <div class="my-auto">
                                <h6 class="mb-0 text-sm">{{ $row->title }}</h6>
                              </div>
                            </div>
                          </td>

                          <td class="py-4" style="max-width: 250px;">
                          <div class="d-flex flex-wrap">
                            @forelse ($row->categories as $rows)
                              <span class="badge bg-primary text-xs text-primary mb-1">{{ $rows->name }}</span>
                            @empty
                              <span class="badge bg-secondary text-xs text-secondary mb-1">Empty..</span>
                            @endforelse
                          </div>
                          </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-sm font-weight-normal">{{ $row->created_at }}</span>
                          </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-sm font-weight-normal">{{ $row->updated_at }}</span>
                          </td>

                          <td class="align-middle">
                            <a href="{{ route('lots.show', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Show page">
                              <i class="fa-regular fa-eye  text-primary" style="font-size: 0.9rem !important;" ></i>
                            </a>
                            <a href="{{ route('lots.edit', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit page">
                              <i class="fa-regular fa-pen-to-square text-primary mx-4" style="font-size: 0.9rem !important;"></i>
                            </a>

                            <form method="POST" action="{{ route('lots.destroy', $row->id) }}" style="display: inline-block;">
                              @csrf 
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure?')" class="text-secondary font-weight-bold text-xs" style="all: unset;">
                                <i class="far fa-trash-alt" aria-hidden="true" style="font-size: 0.9rem !important;"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                    @endforeach
                </table>
              </div>
              <div class="border-top py-3 px-3 d-flex align-items-center">
                  {{ $lots->links("pagination::bootstrap-4") }}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>





@endsection