@extends('0 tabler.layout.layout')

@section('content')
    {{-- @section('page-pretitle')
        Tableau de bord
    @endsection
    @section('page-title')
        Tableau de bord
    @endsection
    @section('page-action')
    @endsection --}}

    @livewire('tabler.stock.article',['article_id'=>$article_id])

@endsection
