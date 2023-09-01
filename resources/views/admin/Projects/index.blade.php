@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
        <h1>
            Projects
        </h1>
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary btn-m mb-2">
            Create a new project
        </a>
    </div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Group Name</th>
      <th scope="col">Started at</th>
      <th scope="col">Finished at</th>
      <th scope="col">Final score</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr>
      <th scope="row"> {{ $project->id }} </th>
      <td> {{ $project->title }} </td>
      <td> {{ $project->type->name }} </td>
      <td> {{ $project->group_name }} </td>
      <td> {{ $project->started_at }} </td>
      <td> {{ $project->finished_at }} </td>
      <td> {{ $project->final_score }} </td>
      <td>
        <div class="d-flex">
            <a  href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary btn-m me-3">
                View
            </a>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-m me-3">
                Edit
            </a>
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-m me-3">
                    Delete
                </button>
            </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $projects->links() }}
</div>
@endsection