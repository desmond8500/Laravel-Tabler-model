<div class="bg-primary text-white text-center">
    Entrées
</div>
<table class="table card-table table-vcenter text-nowrap datatable">
    <thead>
        <tr>
            <th>Objet</th>
            {{-- <th>Bébéficiaire</th>
            <th>Date</th> --}}
            <th>Montant</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaction_entrees as $transaction)
            @if ($transaction_edit == $transaction->id)
                <tr>
                    <td colspan="3">
                        <input type="text" wire:model='objet' class="form-control mt-1" placeholder="Objet">
                        <textarea wire:model='description' class="form-control mt-1" data-bs-toggle="autosize" placeholder="Description"></textarea>
                    {{-- </td> --}}
                    {{-- <td class="text-wrap">
                        <input type="text" wire:model='beneficiare' class="form-control mt-1">
                    </td>
                    <td>
                        <input type="date" wire:model='date' class="form-control mt-1">
                    </td> --}}
                    {{-- <td> --}}
                        <input type="number" wire:model='montant' class="form-control mt-1" min="0">
                    {{-- </td> --}}
                    {{-- <td class="text-right"> --}}
                        <button class="btn btn-primary mt-1 float-right" wire:click="update_transaction">Enregistrer</button>
                        <button class="btn btn-secondary mt-1" wire:click="$set('transaction_edit',0)">Annuler</button>
                    </td>
                </tr>
            @else
                <tr>
                    <td>
                        <div>{{ $transaction->objet }}</div>
                        <div class="text-muted">{{ $transaction->description }}</div>
                    </td>
                    {{-- <td class="text-wrap">
                        {{ $transaction->beneficiare }}
                    </td>
                    <td>
                        {{ $transaction->date }}
                    </td> --}}
                    <td>{{ number_format($transaction->montant, 0, ',', ' ') }} F</td>
                    <td class="text-right">
                        <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                {{-- <a class="dropdown-item" href="#">  Consulter </a> --}}
                                <a class="dropdown-item" wire:click="edit_transaction('{{ $transaction->id }}')">  Modifier  </a>
                                <a class="dropdown-item" wire:click="delete_transaction('{{ $transaction->id }}')">  Supprimer  </a>
                            </div>
                        </span>
                    </td>
                </tr>
            @endif
        @endforeach
        <tr class="bg-info text-white">
            <td>Total Entrées</td>
            <td></td>
            <td>{{ number_format($res->entree, 0, ',', ' ') }}</td>
        </tr>
    </tbody>
</table>
