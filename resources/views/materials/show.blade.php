@extends('materials.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">About {{$material->name}}</h2>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{ route('materials.index') }}" title="Go back" class="btn btn-primary">
                <i class="fas fa-book "></i> Dashboard
            </a>
        </div>
    </div>

    <div class="row mx-auto" style="width: 320px; height: 6em">

        <div class="col-xsx-12 col-sm-12 col-md-6 bg-info p-3">
            <div class="form-group">
                <strong>Product</strong>
                <div class="div">{{ $material->name }}</div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 bg-danger p-3 text-white">
            <div class="form-group">
                <strong>Description</strong>
                <div class="div">{{ $material->detail }}</div>
            </div>
        </div>

    </div>
@endsection
