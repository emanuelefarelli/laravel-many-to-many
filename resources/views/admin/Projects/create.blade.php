@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-12">
        <h1 class="my-5 bg-primary p-3 text-white">
            Insert a new project!
        </h1>
        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">
                    <h3>
                        Insert Project Title:
                    </h3>
                </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter project title">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Insert Project Description:
                    </h3>
                </label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter project description">
            </div>
            
            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Insert Group Name:
                    </h3>
                </label>
                <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        Insert Image:
                    </h3>
                </label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        When the project started?
                    </h3>
                </label>
                <input type="date" class="form-control" id="started_at" name="started_at">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        When the project ended?
                    </h3>
                </label>
                <input type="date" class="form-control" id="finished_at" name="finished_at">
            </div>

            <div class="form-group">
                <label for="title">
                    <h3 class="mt-3">    
                        What whas the final score?
                    </h3>
                </label>
                <input type="number" min="1" max="10" class="form-control" id="final_score" name="final_score">
            </div>

            <button type="submit" class="btn btn-primary mt-4">
                Inserisci
            </button>
        </form>
    </div>
</div>
@endsection