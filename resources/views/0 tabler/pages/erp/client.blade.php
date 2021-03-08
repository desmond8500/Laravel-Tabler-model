@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Clients
    @endsection
    @section('page-title')
        {{ $client->name }}
    @endsection
    @section('page-action')
        {{-- Action --}}
    @endsection

    <div class="text-secondary">
        <h3>Todolist</h3>
        <ul>
            <li>Bilan des projets</li>
            <li>Listes des taches</li>
            <li>Bilan des devis</li>
            <li>Evaluation des clients</li>
        </ul>
    </div>

@endsection
