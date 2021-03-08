<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteClient">
    Supprimer
</a>

<div class="modal modal-blur fade" id="deleteClient" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('projetClients.destroy',['projetClient'=>$client]) }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    Etes-vous sur de vouloir supprimer ce client ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn mr-auto" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" >Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
