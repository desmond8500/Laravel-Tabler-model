<div class="col-md-3 mb-2"  wire:click="gotoProjet('{{ $ticket->projet->id }}')">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col-auto">
                <span class="
                    @if($ticket->priorite == 'Bas')
                        bg-blue
                    @elseif($ticket->priorite == 'Moyen')
                        bg-yellow
                    @else
                        bg-red
                    @endif
                    text-white avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="15" y1="5" x2="15" y2="7" /><line x1="15" y1="11" x2="15" y2="13" /><line x1="15" y1="17" x2="15" y2="19" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                </span>
            </div>
            <div class="col">
                <h3>{{ $ticket->projet->nom }}</h3>
                <div class="font-weight-medium">
                    {{ $ticket->objet }}
                </div>
                <div class="text-muted">
                    {!! $ticket->description !!}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
