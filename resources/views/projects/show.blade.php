@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="well well-lg">
        <h1>{{$project->name}}</h1>
        <p class="lead">{{$project->description}}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
    </div>
      <!-- Example row of columns -->
    <div class="row col-md-12 col-lg-12 col-sm-12" style="background-color:white; margin:10px;">
        <!--<a class="pull-right btn btn-default btn-small" href="/projects/create">Add Project</a>-->
        <br>

        @include('partials.comments')

        <div class="row container-fluid">
            <form method="post" action="{{ route('comments.store')}}">
                {{ csrf_field() }}

                <input type="hidden" name="commentable_type" value="App\Project">
                <input type="hidden" name="commentable_id" value="{{$project->id}}">

                <div class="form-group">
                    <label for="comment-content">Comment</label>
                    <textarea placeholder="Enter description"
                    style="resize: vertical"
                    id="comment-content"
                    name="body"
                    rows="3" spellcheck="false"
                    class="form-control autosize-target text-left">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="comment-content">Proof of work done (url/photos)</label>
                    <textarea placeholder="Enter url or screenshots"
                    style="resize: vertical"
                    id="comment-content"
                    name="url"
                    rows="2" spellcheck="false"
                    class="form-control autosize-target text-left">
                    </textarea>
                </div>

                <div class="form-group">
                <input type="submit" class="btn btn-primary"
                    value="Submit"/>
                </div>
            </form>
        </div>

        

        
    </div>
</div>
		
 @include('partials.sidebar')

@endsection