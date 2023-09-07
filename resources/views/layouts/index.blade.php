@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-center p-3 w-100">
              <div class="icon icon-sm bg-info text-white text-center border-radius-sm mb-3">
                <div class="d-flex justify-content-center align-items-center">
                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="margin-top: 8px;">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-dark mb-1">Daily Lots</p>
                    <a href="{{ route('statistics.day') }}">
                    <h4 class="mb-2 text-success font-weight-bold">{{ $dailycount }} @if($dailycount > 1)lots @else lot @endif</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-center p-3 w-100">
              <div class="icon icon-sm bg-warning text-white text-center border-radius-sm mb-3">
                <div class="d-flex justify-content-center align-items-center">
                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="margin-top: 8px;">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-dark mb-1">Weekly Lots</p>
                    <a href="{{ route('statistics.week') }}">
                    <h4 class="mb-2 text-success font-weight-bold">{{ $weeklycount }} @if($weeklycount > 1)lots @else lot @endif</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-center p-3 w-100">
              <div class="icon icon-sm bg-danger text-white text-center border-radius-sm mb-3">
                <div class="d-flex justify-content-center align-items-center">
                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="margin-top: 8px;">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-dark mb-1">Monthly Lots</p>
                    <a href="{{ route('statistics.month') }}">
                    <h4 class="mb-2 text-success font-weight-bold">{{ $monthlycount }} @if($monthlycount > 1)lots @else lot @endif</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 text-center">
          <div class="card border shadow-xs mb-4">
            <div class="card-body p-3 w-100">
              <div class="icon icon-sm bg-primary text-white text-center border-radius-sm mb-3">
                <div class="d-flex justify-content-center align-items-center">
                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="margin-top: 8px;">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-dark mb-1">Yearly Lots</p>
                    <a href="{{ route('statistics.year') }}">
                    <h4 class="mb-2 text-success font-weight-bold">{{ $yearlycount }} @if($yearlycount > 1)lots @else lot @endif</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="my-0">
      
@endsection