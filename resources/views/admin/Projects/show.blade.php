    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row col-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        {{ $project->title }}
                    </h1>
                    <span>
                        {{ $project->type->name }}
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        Group Name: {{ $project->group_name }}
                    </h3>
                    <p>
                        {{ $project->description }}
                    </p>

                    @if (str_starts_with( $project->image ,'http'))
                    <img src="{{ $project->image }}" alt="{{ $project->title }}">
                    @else
                    <img src="{{ asset ('public/storage' . $project->image) }}" alt="{{ $project->title }}">
                    @endif

                    <h3>
                        Final score:
                    </h3>
                    <p>
                        {{ $project->final_score }}
                    </p>
                    <h4>
                        Started At:
                    </h4>
                    <p>
                        {{ $project->started_at }}
                    </p>
                    <h4>
                        Finished At:
                    </h4>
                    <p>
                        {{ $project->finished_at }}
                    </p>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning mb-2">
                        Edit
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger mb-2">
                            Delete
                        </button>
                    </form>

                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-2">
                        Ritorna alla lista!
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection