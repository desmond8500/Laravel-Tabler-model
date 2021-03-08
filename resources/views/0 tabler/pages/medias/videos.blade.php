@extends('0 tabler.layout.layout')

@section('content')
    @section('page-pretitle')
        Liste des Videos
    @endsection
    @section('page-title')
        Videos
    @endsection
    @section('page-action')

        @include('0 tabler.component.erp.client.add_client')

    @endsection

      <div class="row">
            <div class="col-9">

            </div>
            <div class="col-3">
                <form action="" method="get">
                    <div class="subheader mb-2">Category</div>
                    <div class="list-group list-group-transparent mb-3">
                        <a class="list-group-item list-group-item-action d-flex align-items-center active" href="#">
                        Games
                        <small class="text-muted ml-auto">24</small>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                        Clothing
                        <small class="text-muted ml-auto">149</small>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                        Jewelery
                        <small class="text-muted ml-auto">88</small>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                        Toys
                        <small class="text-muted ml-auto">54</small>
                        </a>
                    </div>

                </form>
            </div>
        </div>



@endsection
