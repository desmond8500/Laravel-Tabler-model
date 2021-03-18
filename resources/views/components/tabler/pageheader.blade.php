<div>
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                 <div class="mb-1">
                    <ol class="breadcrumb breadcrumb-alternate" aria-label="breadcrumbs">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                        {{ $breadcrumb ?? '' }}
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $title ?? 'Dashboard' }}
                </h2>
            </div>
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>


</div>
