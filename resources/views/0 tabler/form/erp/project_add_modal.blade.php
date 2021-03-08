<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
    Ajouter un projet
</a>

<div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un projet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div class="row mb-3 align-items-end">
                        <div class="col-auto">
                        <a href="#" class="avatar avatar-upload rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            <span class="avatar-upload-text">Logo</span>
                        </a>
                        </div>
                        <div class="col">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" wire:model.defer="projet_name" />
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Description</label>
                        <textarea class="form-control" wire:model.defer="projet_description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                    <button wire:click="new_project" class="btn btn-primary" data-bs-dismiss="modal">Ajouter le projet</button>
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
