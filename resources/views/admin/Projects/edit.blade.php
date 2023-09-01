@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-12">
        <h1 class="my-5 bg-primary p-3 text-white">
            Edit the {{ $project->title }} project!
        </h1>
        <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">
                    <h3>
                        Project Title:
                    </h3>
                </label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Project Description:
                    </h3>
                </label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $project->description }}">
            </div>
            
            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Project Image:
                    </h3>
                </label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $project->image }}">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Group Name:
                    </h3>
                </label>
                <input type="text" class="form-control" id="group_name" name="group_name" value="{{ $project->group_name }}">
            </div>
            
            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        When the project started:
                    </h3>
                </label>
                <input type="date" class="form-control" id="started_at" name="started_at" value="{{ $project->started_at }}">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        When the project ended:
                    </h3>
                </label>
                <input type="date" class="form-control" id="finished_at" name="finished_at" value="{{ $project->finished_at }}">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        The final score:
                    </h3>
                </label>
                <input type="number" min="1" max="10" class="form-control" id="final_score" name="final_score" value="{{ $project->final_score }}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">
                Inserisci
            </button>
        </form>
    </div>
</div>
@endsection