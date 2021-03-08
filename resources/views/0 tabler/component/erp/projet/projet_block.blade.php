<div class="card card-body">
    <div class="row align-items-center">
        <div class="col-3" wire:click="gotoProjet('{{ $projet->id }}')">
            <img src="https://cdn.dribbble.com/users/844826/screenshots/14547977/media/e7749bd1b09d9415b8dc265a7dbe81f6.png" alt="Projects Dashboards" class="rounded">
            {{ $projet->statut }}
        </div>
        <div class="col" wire:click="gotoProjet('{{ $projet->id }}')">
            <h3 class="card-title mb-1">
                {{ $projet->nom }}
            </h3>Client : {{ $projet->client->name ?? '____' }}
            <div class="text-muted">
                {!! nl2br($projet->description) !!}
            </div>
            <div class="mt-3">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        {{ $tabler->get_task_percentage($projet->id) }}%
                    </div>
                    <div class="col">
                    <div class="progress progress-sm">
                        <div class="progress-bar" style="width: {{ $tabler->get_task_percentage($projet->id) }}%" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                        <span class="visually-hidden">{{ $tabler->get_task_percentage($projet->id) }}% Complete</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <a wire:click="edit_project({{ $projet->id }})">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="19" r="1" /><circle cx="12" cy="5" r="1" /></svg>
            </a>
        </div>
    </div>
</div>
