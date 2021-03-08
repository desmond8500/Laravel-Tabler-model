@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Tableau de bord
    @endsection
    @section('page-title')
        Projet
    @endsection
    @section('page-action')
        {{-- Action --}}
    @endsection
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.clients') }}">Clients</a></li>
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.projets',['id'=> $projet->projet_client_id]) }}">Projets</a></li>
        <li class="breadcrumb-item active" aria-current="page">Projet</li>
    @endsection

    @livewire('tabler.erp.projet',['projet'=>$projet])

@endsection
