@extends('layouts.dashboard')

@section('content')
    <a class="btn btn-info mb-3" href="/dashboard/skills/create">Add Skills</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Skill</th>
            <th>Percentage</th>
            <th>Category</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($skills as $s => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->skill }}</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{$v->percentage}}%;"
                             aria-valuenow={{$v->percentage}} aria-valuemin="0"
                             aria-valuemax="100">{{$v->percentage}}%</div>
                    </div>
                </td>
                <td>{{ $v->category }}</td>
                <td><a href="/dashboard/skills/{{ $v->id }}/edit" class="btn btn-success">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection