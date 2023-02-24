@extends('layouts.admin')

@section('script')
@vite(['resources/js/popupDelete.js'])
@endsection

@section('content')

<div class="container">
    <div class="row my-3">
        <div class="col-6">
            @if (session('message'))
            <div class="alert alert-info mt-3 d-inline-block">
                {{session('message')}}
            </div>
            @endif
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{route('admin.project.create')}}" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">relase date</th>
                <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project['id']}}</th>
                <td>{{$project['title']}}</td>
                <td>{{$project['relase_date']}}</td>
                <td>
                    <a href="{{route('admin.project.show',$project['id'])}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('admin.project.edit',$project['id'])}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form class="d-inline-block double-confirm" action="{{route('admin.project.destroy',$project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
</div>

@endsection