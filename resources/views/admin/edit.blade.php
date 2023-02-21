@extends('layouts.admin')

@section('content')

<div class="container">
    <form method="POST" class="mt-3" action="{{route('admin.project.update',$project->id)}}">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label" for="title">Inserisci il titolo</label>
            <input class="form-control" type="text" value="{{old('title',$project->title)}}" name="title" id="title">
            @if($errors->has('title'))
            <div class="alert alert-danger mt-3">
                @foreach ($errors->get('title') as $error)
                {{$error}}
                @endforeach
            </div>
            @endif

        </div>





        <div class="mb-3">

            <label class="form-label" for="relase_date">Inserisci la data</label>
            <input class="form-control" type="date" value="{{old('relase_date',$project->relase_date)}}" name="relase_date" id="relase_date">
            @if($errors->has('relase_date'))
            <div class="alert alert-danger mt-3">
                @foreach ($errors->get('relase_date') as $error)
                {{$error}}
                @endforeach
            </div>
            @endif
        </div>

        <div class="mb-3">

            <label class="form-label" for="description">Inserisci la descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description',$project->description)}}</textarea>
            @if($errors->has('description'))
            <div class="alert alert-danger mt-3">
                @foreach ($errors->get('description') as $error)
                {{$error}}
                @endforeach
            </div>
            @endif
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>
    </form>
</div>

@endsection