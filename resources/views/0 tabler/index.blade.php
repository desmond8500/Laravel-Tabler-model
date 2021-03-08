@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Tableau de bord
    @endsection
    @section('page-title')
        Tableau de bord
    @endsection
    @section('page-action')
        <a href="{{ route('dash.index') }}" class="btn btn-primary">Ancienne version</a>
    @endsection







@endsection
