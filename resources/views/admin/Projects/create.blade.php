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

            <div class="form-group mb-3">
                <label for="type_id">
                    <h3>
                        Select Project Type:
                    </h3>
                </label>
                <select class="form-select" name="type_id" id="type_id">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div>
                    <label for="technologies">
                        <h3>
                            Select Project Type:
                        </h3>
                    </label>
                </div>
                @foreach($technologies as $tech)
                    <input type="checkbox" name="technologies[]" id="technologies" value="{{ $tech->id }}">
                    <label for="technologies">
                        {{ $tech->name }}
                    </label >
                @endforeach
            </div>

            <div class="form-group">
                <label for="description">
                    <h3 class="mt-3">    
                        Insert Project Description:
                    </h3>
                </label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter project description">
            </div>
            
            <div class="form-group">
                <label for="group_name">
                    <h3 class="mt-3">    
                        Insert Group Name:
                    </h3>
                </label>
                <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name">
            </div>

            <div class="form-group">
                <label for="image">
                    <h3 class="mt-3">    
                        Insert Image:
                    </h3>
                </label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image">
            </div>

            <div class="form-group">
                <label for="started_at">
                    <h3 class="mt-3">    
                        When the project started?
                    </h3>
                </label>
                <input type="date" class="form-control" id="started_at" name="started_at">
            </div>

            <div class="form-group">
                <label for="finished_at">
                    <h3 class="mt-3">    
                        When the project ended?
                    </h3>
                </label>
                <input type="date" class="form-control" id="finished_at" name="finished_at">
            </div>

            <div class="form-group">
                <label for="final_score">
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