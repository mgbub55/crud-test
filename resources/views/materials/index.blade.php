@extends('materials.layout')
<h1 class="text-center mt-1 mb-2">MATERIALS | APP</h1>


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-danger mb-4 mt-2">DASHBOARD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('materials.create') }}" class="btn btn-success mb-1">
                    <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg bg-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materials as $material)
            <tr>
                <td>{{ $material->id }}</td>
                <td>{{ $material->name }}</td>
                <td>{{ $material->detail }}</td>
                <td>
                    <form action="{{ route('materials.destroy', $material->id) }}" method="POST">

                        <a href="{{ route('materials.show', $material->id) }}" class="btn" title="show"  style="border: none; background-color:transparent;">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>

                        <a href="{{ route('materials.edit', $material->id) }}" class="btn btn" title="edit"  style="border: none; background-color:transparent;">
                            <i class="fas text-primary fa-edit  fa-lg" ></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" onclick="return confirm('Are you sure you want to delete')"  style="border: none; background-color:transparent; outline: 0;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $materials->links()}}
@endsection
