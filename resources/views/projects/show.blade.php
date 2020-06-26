@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-lg-9 pull-left">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">{{ $project->name }}</h1>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            <form method="post" action="{{ route('comments.store') }}">
                {{ @csrf_field() }}
                {{--<div class="form-group">--}}
                    {{--<label for="url">URL</label>--}}
                    {{--<input type="text" id="url" name="url" class="form-control" required placeholder="URL">--}}
                {{--</div>--}}
                <input type="hidden" value="App\Project" name="commentable_type">
                <input type="hidden" value="{{ $project->id }}" name="commentable_id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Comment</label>
                    <textarea placeholder="Enter Comment" name="comment" rows="3" class="form-control autosize-target"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Proof of work done (url/screenshots)</label>
                    <textarea placeholder="Enter proof of work done" name="url" rows="3" class="form-control autosize-target"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
<hr>
            <h4>Comments</h4>
            <div class="card">
                <div class="card-body">
                    @foreach($project->comments as $comment)
                        <div class="row">
                            <div class="col-md-2">
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                <p class="text-secondary text-center">15 Minutes Ago</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{ $comment->user->name }}</strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p>{{ $comment->body }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <aside class="col-md-3 col-sm-3 col-lg-3 pull-right">
            <div class="p-6">
                <h4 class="font-weight-bold">Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/projects/{{ $project->id }}/edit">Edit</a></li>
                    <li><a href="/projects/create">Add Company</a></li>
                    <li><a href="/projects">All Projects</a></li>
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

                    <form id="logout-form" action="{{ route('projects.destroy', [$project->id]) }}" method="POST" style="display: none;">
                        <input name="_method" value="delete" type="hidden">
                        @csrf
                    </form>
                </ol>
            </div>
        </aside>
    </div>
    </div>
@endsection