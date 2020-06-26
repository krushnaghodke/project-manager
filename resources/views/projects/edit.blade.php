@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 id="form-controls">
            <div>Manage Project</div>
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-lg-9 pull-left">
                <form method="post" action="{{ route('projects.update', [ $project->id ]) }}">
                    {{ @csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="company_name">Name</label>
                        <input type="text" id="company_name" name="name" class="form-control" required placeholder="Name" value="{{ $project->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea placeholder="Enter Description" name="description" rows="5" class="form-control autosize-target">{{ $project->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <aside class="col-md-3 col-sm-3 col-lg-3 pull-right">
                <div class="p-6">
                    <h4 class="font-weight-bold">Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/projects/{{ $project->id }}">View Project</a></li>
                        <li><a href="/projects">All Projects</a></li>
                    </ol>
                </div>
                {{--<div class="p-6">--}}
                    {{--<h4 class="font-weight-bold">Members</h4>--}}
                    {{--<ol class="list-unstyled mb-0">--}}
                        {{--<li><a href="#">March 2014</a></li>--}}
                        {{--<li><a href="#">February 2014</a></li>--}}
                        {{--<li><a href="#">January 2014</a></li>--}}
                        {{--<li><a href="#">December 2013</a></li>--}}
                        {{--<li><a href="#">November 2013</a></li>--}}
                        {{--<li><a href="#">October 2013</a></li>--}}
                        {{--<li><a href="#">September 2013</a></li>--}}
                        {{--<li><a href="#">August 2013</a></li>--}}
                        {{--<li><a href="#">July 2013</a></li>--}}
                        {{--<li><a href="#">June 2013</a></li>--}}
                        {{--<li><a href="#">May 2013</a></li>--}}
                        {{--<li><a href="#">April 2013</a></li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
            </aside>
        </div>
    </div>
@endsection