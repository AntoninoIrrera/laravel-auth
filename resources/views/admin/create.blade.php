@extends('layouts.admin')

@section('content')

@include('admin.shared.form', ["route" => 'admin.project.store', 'methodRoute' => 'POST', "bottone" => 'crea'])

@endsection