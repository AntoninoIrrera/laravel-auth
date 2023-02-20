@extends('layouts.admin')

@section('content')

<div class="container">
    <form method="POST" class="mt-3" action="{{route('admin.project.store')}}">

        @csrf

        <div class="mb-3">

            <label class="form-label" for="title">Inserisci il titolo</label>
            <input class="form-control" type="text" name="title" id="title">

        </div>

       



        <div class="mb-3">

            <label class="form-label" for="relase_date">Inserisci la data</label>
            <input class="form-control" type="date" name="relase_date" id="relase_date">

        </div>

        <div class="mb-3">

            <label class="form-label" for="description">Inserisci la descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Crea</button>
        </div>
    </form>
</div>

@endsection