@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Liste des Images
    @endsection
    @section('page-title')
        Images
    @endsection
    @section('page-action')
    {{--  --}}
    @endsection

    @livewire('tabler.medias.images')

@endsection

@section('link')
<link href="{{ asset('src/library/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{ asset('src/library/lightbox/js/lightbox.min.js') }}"> </script>
@endsection
