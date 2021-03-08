<div class="card {{ $class ?? '' }}">
    <div class="card-body">
        @if (!$edit_projet)
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
                    <button wire:click="$toggle('edit_projet',true)" class="btn btn-dark">Fermer</button>
                    <button wire:click="update_project" class="btn btn-primary">Valider</button>
                </div>
            </div>
        @else
            <div class="row align-items-center">
                <div class="col-3">
                    <img src="https://cdn.dribbble.com/users/844826/screenshots/14547977/media/e7749bd1b09d9415b8dc265a7dbe81f6.png" alt="Projects Dashboards" class="rounded">
                </div>
                <div class="col">
                    <h3 class="card-title mb-1">
                        <a href="project-overview.html" class="text-reset">{{ $projet->nom }}</a>
                    </h3>
                    <div class="text-muted">
                        {{ $projet->description }}
                    </div>
                    <div class="mt-3">
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                {{ $task_percentage }}%
                            </div>
                            <div class="col">
                            <div class="progress progress-sm">
                                <div class="progress-bar" style="width: {{ $task_percentage }}%" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">{{ $task_percentage }}% Complete</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a wire:click="edit_project">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
                    </a>
                </div>
            </div>

        @endif
    </div>
</div>
