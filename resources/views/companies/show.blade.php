@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-lg-9 pull-left">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">{{ $company->name }}</h1>
                    <p>{{ $company->description }}</p>
                </div>
            </div>
            <a class="btn btn-success btn-sm float-right" href="/projects/create/{{ $company->id }}">Add Projects</a>
            <div class="container">
                <div class="row">
                    @foreach($company->projects as $project)
                        <div class="col-md-4">
                            <h2>{{ $project->name  }}</h2>
                            <p>{{ $project->description }}</p>
                            <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project »</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <aside class="col-md-3 col-sm-3 col-lg-3 pull-right">
            <div class="p-6">
                <h4 class="font-weight-bold">Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                    <li><a href="/companies/create">Add Company</a></li>
                    <li><a href="/projects/create/{{ $company->id }}">Add Project</a></li>
                    <li>
                        <a href="javascript:void(0)" onclick="
                            var result = confirm('Are you sure you wish to delete project?');
                            if( result ){
                                event.preventDefault();
                                document.getElementById('logout-form').submit();
                            }
                        ">
                            Delete
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('companies.destroy', [$company->id]) }}" method="POST" style="display: none;">
                        <input name="_method" value="delete" type="hidden">
                        @csrf
                    </form>

                    {{--<li><a href="#">Add new member</a></li>--}}
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