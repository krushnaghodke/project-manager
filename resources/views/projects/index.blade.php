@extends('layouts.app')

@section('content')
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6, col-lg-6">
            <div class="card mb-3">
                <div class="card-header text-white bg-primary">Projects <a class="btn btn-success btn-sm float-right" href="/projects/create">Add Project</a></div>
                <div class="card-body text-secondary">
                    <ul class="list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item"><a href="/projects/{{ $project->id  }}">{{ $project->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection