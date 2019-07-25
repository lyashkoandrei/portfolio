@extends('layouts.dashboard')

@section('content')
    <a class="btn btn-info mb-3" href="/dashboard/experience/create">Add Experience</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Position</th>
            <th>Company</th>
            <th>Years</th>
            <th>Description</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
    @foreach($experience as $e => $v)
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->position }}</td>
            <td>{{ $v->company }}</td>
            <td>{{ $v->years }}</td>
            <td>{{ $v->description }}</td>
            <td><a href="/dashboard/experience/{{ $v->id }}/edit" class="btn btn-success">Edit</a></td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection