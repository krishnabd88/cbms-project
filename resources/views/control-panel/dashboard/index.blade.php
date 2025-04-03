@extends('layouts.master')
@section('content')
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col p-0">
        <h4>Hello, <span>Welcome to your Dashboard</span></h4>
      </div>
      <div class="col p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>

    <!-- Dashboard Stats Section -->
    <div class="row">
      @foreach ($statistics as $entity => $count)
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <!-- Card Title -->
              <h4 class="card-title">{{ $count }}</h4>
              <p class="card-text"><small class="text-muted">{{ $entity }}</small></p>

              <!-- Progress Bar (Optional for visual representation) -->
              <div class="progress m-t-10 h-7px">
                <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-{{ ($count / 1000) * 100 }}pc h-7px"></div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Row for detailed stats and any additional content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4>More Detailed Metrics</h4>
            <!-- Example for further statistics -->
            <p class="text-muted">Here you can display more detailed metrics, charts, or additional information.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
