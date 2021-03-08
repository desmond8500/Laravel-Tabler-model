@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Devis
    @endsection
    @section('page-title')
        Devis
    @endsection
    @section('page-action')
        {{-- @include('0 tabler.form.erp.project_add_modal') --}}
    @endsection
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.clients') }}">Clients</a></li>
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.projets',['id'=> $devis->projet->projet_client_id]) }}">Projets</a></li>
        <li class="breadcrumb-item"><a href="{{ route('tabler.erp.projet',['projet_id'=> $devis->projet->id]) }}">Projet</a></li>
        <li class="breadcrumb-item active" aria-current="page">Devis</li>
    @endsection

    @livewire('tabler.erp.devis', ['devis' => $devis])

@endsection
