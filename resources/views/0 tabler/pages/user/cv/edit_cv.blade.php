<div class="card mb-2">
    <div class="card-header">
        <h3 class="card-title">Etat Civil</h3>
        <div class="card-actions">
            <button wire:click="edit_cv" class="btn btn-primary float-right mt-3">Editer</button>
        </div>
    </div>

    <div class="card-body row">
        @if ($cv_edit_form)
            <div class="col-md-6 row">

                <div class="form-group col-md-6">
                    <label class="label">Prénom :</label>
                    <input type="text" wire:model.defer="cv_prenom" placeholder="Prenom" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="label">Nom :</label>
                    <input type="text" wire:model.defer="cv_nom" placeholder="Nom" class="form-control">
                </div>
                <div class="form-group col-md-6 d-flex">
                    @if ($cv_photo)
                        <img src="{{ $cv_photo->temporaryUrl() }}" class="avatar avatar-md">
                    @endif
                    <div>
                        <label class="label">Photo :</label>
                        <input type="file" wire:model.defer="cv_photo" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="label">Téléphone :</label>
                    <input type="text" wire:model.defer="cv_tel" placeholder="Téléphone" class="form-control">
                </div>
                <div class="form-group col-md-8">
                    <label class="label">Fonction :</label>
                    <input type="text" wire:model.defer="cv_fonction" placeholder="Nom" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label class="label">Genre :</label>
                    <select  wire:model.defer="cv_gnre" placeholder="Prénom" class="form-select">
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label class="label">Adresse :</label>
                    <input type="text" wire:model.defer="cv_address" placeholder="Adresse" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="label">Email :</label>
                    <input type="text" wire:model.defer="cv_email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="label">Linkedin :</label>
                    <input type="text" wire:model.defer="cv_linkedin" placeholder="Linkedin" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="label">SiteWeb :</label>
                    <input type="text" wire:model.defer="cv_website" placeholder="SiteWeb" class="form-control">
                </div>

            </div>

            <div class="form-group col-md-6">
                <label class="label">Profile :</label>
                <textarea wire:model.defer="cv_profil" placeholder="Profile" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class=" mt-2 col-md-12">
                <div class="float-right">
                    <button class="btn btn-secondary" wire:click="$toggle('cv_edit_form')">Fermer</button>
                    <button class="btn btn-primary" wire:click="update_cv">Mettre à jour</button>

                </div>
            </div>

        @else
            <div class="col-md-4">
                <img src="{{ asset($cv->photo )}}" alt="{{ asset($cv->photo )}}">
                <button wire:click="edit_cv" class="btn btn-primary float-right mt-3">Editer</button>
            </div>

            <div class="col-md-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <b>Nom :</b>  <span class="float-right">{{ $cv->prenom }} {{ $cv->nom }} </span></li>
                    <li class="list-group-item"> <b>Fonction :</b> <span class="float-right">{{ $cv->fonction }} </span></li>

                    <li class="list-group-item"> <b>Téléphone :</b>  <span class="float-right">{{ ($cv->tel) }} </span></li>
                    <li class="list-group-item"> <b>Email :</b>  <span class="float-right">{{ ($cv->email) }} </span></li>
                    <li class="list-group-item"> <b>Adresse :</b>  <span class="float-right">{{ ($cv->address) }} </span></li>
                    <li class="list-group-item"> <b>Linkedin :</b>  <span class="float-right">{{ ($cv->linkedin) }} </span></li>
                    <li class="list-group-item"> <b>Siteweb :</b>  <span class="float-right">{{ ($cv->website) }} </span></li>
                    <li class="list-group-item"> {!! nl2br($cv->profil) !!} </li>
                 </ul>
            </div>
        @endif
    </div>
</div>
