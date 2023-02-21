@extends('layouts.admin')

@section('content')

<div class="container">
    <form method="POST" class="mt-3" action="{{route('admin.project.store')}}">

        @csrf

        <div class="mb-3">

            <label class="form-label" for="title">Inserisci il titolo</label>
            <input class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}  {{$errors->has('title') ? 'is-invalid' : ''}} " type="text" value="{{old('title')}}" name="title" id="title">
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
            <input class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} " type="date" value="{{old('relase_date')}}" name="relase_date" id="relase_date">
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
            <textarea class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} " name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @if($errors->has('description'))
            <div class="alert alert-danger mt-3">
                @foreach ($errors->get('description') as $error)
                {{$error}}
                @endforeach
            </div>
            @endif
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Crea</button>
        </div>
    </form>
</div>

@endsection