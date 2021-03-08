<div class="empty-action">
    <div class="card">
        <div class="card-status-top bg-primary"></div>
        <div class="card-header">
            Ajouter un Projet
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="Nom du projet" wire:model='name'>
            </div>
                <div class="form-group">
                <label class="form-label">Description</label>
                <textarea wire:model="description" cols="30" rows="3" placeholder="Description" class="form-control"></textarea>
            </div>
            <div class="mt-2">
                <button wire:click="toggle_add_form" class="btn btn-dark">Fermer</button>
                <button wire:click="save_project" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
</div>
