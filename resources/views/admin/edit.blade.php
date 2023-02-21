@extends('layouts.admin')

@section('content')

@include('admin.shared.form', ["route" => 'admin.project.update', 'methodRoute' => 'PUT', "bottone" => 'edit'])

@endsection