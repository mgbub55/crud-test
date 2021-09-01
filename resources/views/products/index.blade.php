@extends('products.layout')
<h1 class="text-center mt-1 mb-2">Laravel CRUD| APP</h1>


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-danger mb-4 mt-2">DASHBOARD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create') }}" class="btn btn-success mb-1">
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
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                        <a href="{{ route('products.show', $product->id) }}" class="btn" title="show"  style="border: none; background-color:transparent;">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn" title="edit"  style="border: none; background-color:transparent;">
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
    {{ $products->links()}}
@endsection
