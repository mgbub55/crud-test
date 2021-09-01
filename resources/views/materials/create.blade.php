@extends('materials.layout')

<div class="ml-auto bglight p-3">
    <div class="pull-right ml-5">
        <a href="{{ route('materials.index') }}" title="Go back" class="btn btn-primary">
            <i class="fas fa-book "></i> Dashboard
        </a>
    </div>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><i class="fas text-primary fa-plus-circle"></i> Add Products </h2>
            </div>
        </div>
    </div>

    <form action="{{ route('materials.store') }}" method="POST" style="width: 500px" class="mx-auto">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="detail" class="form-control" style="height: 100px"
                    placeholder="description"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
