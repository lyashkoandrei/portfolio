@extends('layouts.dashboard')

@section('content')

    <h2>Add Experience</h2>

    <form method="post" class="col-md-6" action="/dashboard/experience">
        <div class="form-group">
            <label>Position</label>
            <input type="text" name="position" class="form-control" placeholder="position">

        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" class="form-control" placeholder="company">
            @error ('title')
            <small class="form-text text-danger">{{  $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Years</label>
            <input type="text" name="years" class="form-control" placeholder="years">
            @error ('title')
            <small class="form-text text-danger">{{  $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" placeholder="description">
            @error ('title')
            <small class="form-text text-danger">{{  $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        @csrf

    </form>

@endsection