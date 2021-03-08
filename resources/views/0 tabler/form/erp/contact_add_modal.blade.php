<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-addContact">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
    Ajouter un contact
</a>

<div class="modal modal-blur fade" id="modal-addContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body row">
                    <div class="form-group col-md-8">
                        <label class="form-label">Prénom</label>
                        <input type="text" wire:model.defer="firstname" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Nom</label>
                        <input type="text" wire:model.defer="lastname" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Téléphone</label>
                        <input type="tel" wire:model.defer="tel" class="form-control" placeholder="Téléphone">
                    </div>
                    <div class="form-group col-md-8">
                        <label class="form-label">Email</label>
                        <input type="email" wire:model.defer="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label">Fonction</label>
                        <input type="text" wire:model.defer="fonction" class="form-control" placeholder="Fonction">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label">Description</label>
                        <textarea wire:model.defer="description" cols="30" rows="3" placeholder="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                    <button wire:click="add_contact" class="btn btn-primary" data-bs-dismiss="modal">Ajouter le client</button>
                </div>
        </div>
    </div>
</div>

@section('script')


<script>
window.addEventListener('closeModal', event => {
    $("#modal-addContact").modal('hide');
})
</script>


@endsection
