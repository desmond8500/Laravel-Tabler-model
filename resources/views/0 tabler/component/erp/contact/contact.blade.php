<div class="card">
    <div class="card-body">
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <span class="avatar avatar-lg" style="background-image: url({{ asset('src/img/avatar/003-man-1.png') }})"></span>
            </div>
            <div class="col">
                @if ($edit_contact == $contact->id)
                    <h4 class="card-title m-0">
                        <input type="text" class="form-control" wire:model="firstname">
                        <input type="text" class="form-control" wire:model="lastname">

                    </h4>
                    <div class="text-muted">
                        <input type="text" class="form-control" wire:model="tel">
                    </div>
                    <div class="text-muted">
                        <input type="text" class="form-control" wire:model="email">
                    </div>

                    <div class="small mt-1">
                        <input type="text" class="form-control" wire:model="fonction">
                    </div>
                    <button class="btn btn-primary" wire:click="update_contact('{{ $contact->id }}')">Enregistrer</button>
                @else
                    <h4 class="card-title m-0">
                        <a href="#">{{ $contact->firstname }} {{ $contact->lastname }}</a>
                    </h4>
                    <div class="text-muted">
                        {{ $contact->tel }}
                    </div>
                    <div class="text-muted">
                        {{ $contact->email }}
                    </div>

                    <div class="small mt-1">
                        <span class="badge bg-green"></span> {{ $contact->fonction }}
                    </div>
                @endif
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <a href="#" class="card-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a wire:click="edit_contact('{{ $contact->id }}')" class="dropdown-item">Modifier</a>
                        <a wire:click="delete_contact('{{ $contact->id }}')" class="dropdown-item">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
