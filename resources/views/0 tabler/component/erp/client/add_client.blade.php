<a href="#" class="{{ $class ?? 'btn btn-white' }}" data-bs-toggle="modal" data-bs-target="#addClient">
    Ajouter un client
</a>

<div class="modal modal-blur fade" id="addClient" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('projetClients.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Nom</label>
                            <input type="text" wire:model="name" class="form-control" required placeholder="Nom">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Adresse</label>
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse ">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Description</label>
                            <textarea name="description" rows="5" class="form-control" placeholder="Description de l'entreprise ou du particulier"></textarea>
                        </div>
                        <button wire:click='test' data-bs-dismiss="modal">test</button>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mr-auto" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" >Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
