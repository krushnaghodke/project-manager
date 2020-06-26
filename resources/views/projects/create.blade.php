@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 id="form-controls">
            <div>Create Project</div>
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-lg-9 pull-left">
                <form method="post" action="{{ route('projects.store') }}">
                    {{ @csrf_field() }}
                    <div class="form-group">
                        <label for="company_name">Name</label>
                        <input type="text" id="company_name" name="name" class="form-control" required placeholder="Name">
                        <input type="hidden" id="company_id" name="company_id" value="{{ $company_id }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea placeholder="Enter Description" name="description" rows="5" class="form-control autosize-target"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <aside class="col-md-3 col-sm-3 col-lg-3 pull-right">
                <div class="p-6">
                    <h4 class="font-weight-bold">Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/projects">All Projects</a></li>
                    </ol>
                </div>
            </aside>
        </div>
    </div>
@endsection