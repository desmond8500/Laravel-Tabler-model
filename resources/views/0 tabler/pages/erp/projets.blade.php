@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        {{ $client->name }}
    @endsection
    @section('page-title')
        {{ $client->name }}
    @endsection
    @section('page-action')
        {{-- @include('0 tabler.form.erp.project_add_modal') --}}
    @endsection
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.clients') }}">Clients</a></li>
        <li class="breadcrumb-item active" aria-current="page">Projets</li>
    @endsection

    @livewire('tabler.erp.projets',['client' => $client])

@endsection
