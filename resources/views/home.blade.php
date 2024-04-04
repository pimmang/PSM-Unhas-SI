@extends('layouts.layout')
@section('main')
    @livewire('home',['status' => $status])
@endsection
