<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
    Ajouter un client
</a>

<div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body row">
                    <div class="form-group col-md-8">
                        <label class="form-label">Nom du client </label>
                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label">Description</label>
                        <textarea wire:model.defer="description" data-bs-toggle="autosize" placeholder="Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                    <button wire:click="add_client" class="btn btn-primary" data-bs-dismiss="modal">Ajouter le client</button>
                </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $("#modal-add").modal('hide');
        })
    </script>
@endsection
