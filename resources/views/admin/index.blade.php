@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row my-3">
        <div class="col-12 text-end">
            <a href="{{route('admin.project.create')}}" class="btn btn-secondary me-4">create</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">relase date</th>
                <th scope="col">description</th>
                <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project['id']}}</th>
                <td>{{$project['title']}}</td>
                <td>{{$project['relase_date']}}</td>
                <td>{{$project['description']}}</td>
                <td>
                    <a href="{{route('admin.project.show',$project['id'])}}" class="btn btn-primary">show</a>
                    <a href="#" class="btn btn-warning">edit</a>
                    <a href="#" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection