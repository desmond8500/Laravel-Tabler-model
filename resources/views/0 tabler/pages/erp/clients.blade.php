@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Liste des clients
    @endsection
    @section('page-title')
        Clients
    @endsection
    @section('page-action')

    @endsection

    @livewire('tabler.erp.clients')

@endsection
