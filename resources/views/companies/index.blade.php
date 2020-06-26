@extends('layouts.app')

@section('content')
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6, col-lg-6">
            <div class="card mb-3">
                <div class="card-header text-white bg-primary">Companies <a class="btn btn-success btn-sm float-right" href="/companies/create">Add Company</a></div>
                <div class="card-body text-secondary">
                    <ul class="list-group">
                        @foreach($companies as $company)
                            <li class="list-group-item"><a href="/companies/{{ $company->id  }}">{{ $company->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection