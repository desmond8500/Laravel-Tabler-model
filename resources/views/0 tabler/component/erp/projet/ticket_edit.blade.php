<div class="card-body">
    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" class="form-control" placeholder="Nom du projet" wire:model='projet_name'>
    </div>
    <div class="form-group">
        <label class="form-label">Description</label>
        <textarea wire:model="projet_description" cols="30" rows="3" placeholder="Description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label class="form-label">Statut</label>
        <select class="form-control" wire:model="projet_statut">
            <option>{{ $projet->statut }}</option>
            @foreach ($tabler->statut() as $item)
                <option>{{ $item }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2">
        <button wire:click="$set('project_id', 0)" class="btn btn-dark">Fermer</button>
        <button wire:click="update_project" class="btn btn-primary">Valider</button>
    </div>
</div>
