<div class="card">
    <div class="card-header">
        <h3 class="card-title">Finances</h3>
        <div class="card-actions">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-addTransaction">
                Ajouter une transaction
            </a>
        </div>
    </div>

    <div class="card-body">

        @php $resume = $tabler->montant_devis_valide($projet->id); @endphp
        <div class="row">
            {{-- <div class="col-md-6">
                <b>Total offre</b> <span class="float-right">{{ number_format($resume->somme, 0, ',', ' ') }}</span>
            </div>
            <div class="col-md-6">
                <b>Restant</b> <span class="float-right">{{ number_format($res->restant, 0, ',', ' ') }}</span>
            </div> --}}

            <div class="col-md-6">
                <div class="table-responsive">
                    @include('0 tabler.component.erp.projet.transaction_entree')
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    @include('0 tabler.component.erp.projet.transaction_depense')
                </div>
            </div>

        </div>
    </div>
</div>









{{-- ================================================================================================================ --}}


{{-- Modal content ================================================= --}}

<div class="modal modal-blur fade" id="modal-addTransaction" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter une transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">

                <div class="col-md-6">
                    <label class="form-label">Objet</label>
                    <input type="text" wire:model.defer="objet" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Bénéficiaire</label>
                    <input type="text" wire:model.defer="beneficiaire" class="form-control">
                </div>

                <div class="col-md-5">
                    <label class="form-label">Montant</label>
                    <input type="number" wire:model.defer="montant" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Type {{ $type }}</label>
                    <select wire:model.defer="type" class="form-select">
                        <option>Entrée</option>
                        <option>Dépense</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Date</label>
                    <input type="date" wire:model.defer="date" class="form-control">
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" data-bs-toggle="autosize" wire:model.defer="description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                <button wire:click="add_transaction" class="btn btn-primary" data-bs-dismiss="modal">Ajouter la transaction</button>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $("#modal-addTransaction").modal('hide');
        })
    </script>
@endsection



