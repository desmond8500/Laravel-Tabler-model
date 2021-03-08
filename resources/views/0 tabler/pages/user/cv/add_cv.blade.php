<div class="card">
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label class="label">Photo :</label>
            <input type="file" wire:model.defer="cv_photo" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label class="label">Prénom :</label>
            <input type="text" wire:model.defer="cv_prenom" placeholder="Prénom" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label class="label">Nom :</label>
            <input type="text" wire:model.defer="cv_nom" placeholder="Nom" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label class="label">Fonction :</label>
            <input type="text" wire:model.defer="cv_fonction" placeholder="Nom" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label class="label">Genre :</label>
            <select  wire:model.defer="cv_gnre" placeholder="Prénom" class="form-select">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </div>

        <div class="form-group col-md-12">
            <label class="label">Profile :</label>
            <textarea wire:model.defer="cv_profil" placeholder="Profile" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-2 col-md-12">
            <button class="btn btn-primary" wire:click="create_cv">Créer CV</button>
        </div>
    </div>
</div>


