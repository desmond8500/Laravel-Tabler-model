{{-- Devis --}}
<div class="card {{ $class ?? '' }}">
    <div class="card-header">
        <h3 class="card-title">Devis</h3>
        <div class="card-actions">
            <button href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modal-devisadd">
                Ajouter
            </button>
            <button wire:click="$toggle('generate')" class="btn btn-primary mb-2">
                @if ($generate)
                    Liste
                @else
                    Générer
                @endif
            </button>
        </div>
    </div>
    @if ($generate)
        @livewire('tabler.erp.generate-devis',['projet'=>$projet])
    @else
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Description</th>
                        <th>Création</th>
                        <th>Status</th>
                        <th>Montant</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devis_list as $devis)
                        @php
                            $date = explode(' ', $devis->created_at);
                            $created = explode('-',$date[0]);

                            $statut_list = $tabler->statut();
                        @endphp
                        <tr>
                            <td>
                                <span class="text-muted">
                                    <a href="{{ route('tabler.erp.devis',['devis_id'=>$devis->id]) }}" class="text-reset" tabindex="-1">{{ $devis->reference }}</a>
                                </span>
                            </td>
                           @if ($devis_selected == $devis->id)
                                <td class="text-wrap">
                                    <input type="text" wire:model="devis_description" class="form-control">
                                </td>
                                <td>
                                    {{ $created[2] }}-{{ $created[1] }}-{{ $created[0] }}
                                </td>
                                <td>
                                    <select wire:model="devis_statut" class="form-control">
                                        @foreach ($statut_list as $item)
                                            <option>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td> {{ $tabler->montant_devis($devis->id) }} F </td>
                                <td class="text-right">
                                    <button class="btn btn-primary" wire:click="update_devis">Enregister</button>
                                </td>
                           @else
                                <td class="text-wrap">
                                    <a href="{{ route('tabler.erp.devis',['devis_id'=>$devis->id]) }}" class="text-reset" tabindex="-1">{{ $devis->description }}</a>
                                </td>
                                <td >
                                    {{ $created[2] }}-{{ $created[1] }}-{{ $created[0] }}
                                </td>
                                <td>  <span class="badge bg-success mr-1"></span>
                                    {{ $devis->statut }}
                                </td>
                                <td>{{ $tabler->montant_devis($devis->id) }} F</td>
                                <td class="text-right">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-preview">  Aperçu </a>
                                            <a class="dropdown-item" wire:click="edit_devis('{{ $devis->id }}')">  Modifier  </a>
                                            <a class="dropdown-item" wire:click="delete_devis('{{ $devis->id }}')">  Supprimer  </a>
                                             <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" target="_blank" href="{{ route('erp.quantitatif.pdf',['id'=>$devis->id, 'type'=>'Quantitatif' ]) }}"> Quantitatif</a>
                                            <a class="dropdown-item" target="_blank" href="{{ route('erp.proforma.pdf',['id'=>$devis->id, 'type'=>'Proforma' ]) }}"> Proforma</a>
                                            <a class="dropdown-item" target="_blank" href="{{ route('erp.devis.pdf',['id'=>$devis->id, 'type'=>'Devis' ]) }}">Devis en PDF</a>
                                            <a class="dropdown-item" target="_blank" href="{{ route('erp.devis.pdf',['id'=>$devis->id, 'type'=>'Facture' ]) }}">Exporter Facture en PDF</a>
                                        </div>
                                    </span>
                                </td>
                           @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endif
</div>

{{-- Documents --}}

@livewire('tabler.erp.document',['projet'=>$projet])

{{-- Modal content ================================================= --}}

<div class="modal modal-blur fade" id="modal-devisadd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un Devis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="form-label">Statut</label>
                    <select wire:model.defer="statut" class="form-control">
                        <option selected value="Nouveau">Nouveau</option>
                        <option>En Cours</option>
                        <option>Terminé</option>
                        <option>Annulé</option>
                    </select>
                </div>

                <div>
                    <label class="form-label">Description</label>
                    <textarea class="form-control" wire:model.defer="description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                <button wire:click="add_devis" class="btn btn-primary" data-bs-dismiss="modal">Créer un devis</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-preview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un Devis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- @if ($devis_id) --}}
                    {{-- @livewire('tabler.erp.previewdevis') --}}
                    @livewire('tabler.erp.previewdevis',['devis_id'=> $devis_id, 'projet_id'=> $projet_id])
                {{-- @endif --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                <button wire:click="add_devis" class="btn btn-primary" data-bs-dismiss="modal">Créer un devis</button>
            </div>
        </div>
    </div>
</div>
