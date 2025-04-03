@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Table Title Here</h5>
            <div class="card-actions">
                <button class="btn btn-primary btn-sm">Add New</button>
            </div>
        </div>

        <div class="card-body py-1">
            @yield('table')  <!-- You can define the table content here -->
        </div>

        <div class="card-footer text-muted">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
