<div>
    <h3>Adressé à : </h3>
    {{ $client_name ?? $devis->projet->client->name }}
</div>


<div class="card">
    <div class="table-responsive">
        <table class="table card-table">
            <thead>
                <tr>
                    <th style="width: 500px"> Désignation </th>
                    <th class="text-center"> Quantité </th>
                    <th class="text-center"> Prix </th>
                    <th class="text-center"> Total </th>
                </tr>
            </thead>
            <tbody>  @php $total = 0; $marge = 0;  $id = 1;  @endphp
                @if ($section_list)
                    @foreach ($section_list as $key => $liste)
                        <tr class="table-primary">
                            <th colspan="9">  {{ $key }} </th>
                        </tr>
                        @foreach ($liste as $key => $data)
                            <tr>
                                <td data-label="Désignation et référence">
                                    <div class="font-weight-medium">{{ $data->designation }}</div>
                                    <div class="text-muted"><a href="#" class="text-reset">{!! nl2br($data->reference) !!}</a></div>
                                </td>
                                <td data-label="Quantité"  class="text-center">
                                    {{ $data->quantite }}
                                </td>
                                <td data-label="Prix Unitaire"  class="text-center">
                                    {{ $data->tarif }}
                                </td>

                                @php
                                    $total_row = $data->quantite * $data->tarif*$data->coef;

                                    $total += $total_row;

                                    $total_row = number_format($total_row, 0, ',', ' ');
                                @endphp
                                <td data-label="Total"  class="text-center"> {{ $total_row }}  CFA</td>

                            </tr>
                        @endforeach
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <h3>Modalités</h3>
                {!! nl2br($modalite_devis) !!}
                <br>
                <br>
                <br>

                <h3>Notes</h3>
                {!! nl2br($notes_devis) !!}
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="d-flex justify-content-between">
                    <div class="flex-1">Total Hors Taxes</div>
                    <div class="ml-5">{{ number_format($total, 0, ',', ' ') }} CFA</div>
                </div>
                <div class="d-flex justify-content-between">
                    @if ($devis->tva != 0)
                        <div class="flex-1">TVA 18%</div>
                        <div class="ml-5"> {{ number_format($total*$devis->tva, 0, ',', ' ')}} CFA</div>
                    @else
                        <div class="flex-1">TVA</div>
                        <div class="ml-5"> {{ number_format($total*0, 0, ',', ' ')}} CFA</div>
                    @endif
                </div>
                @if ($devis->remise != 0)
                    <div class="d-flex justify-content-between">
                        <div class="">Remise {{ $devis->remise*100 }}%</div>
                        <div class="ml-5">{{ number_format($total*$devis->remise, 0, ',', ' ')}} CFA </div>
                    </div>
                @endif

                <div class="d-flex justify-content-between">
                    <div class="flex-1">TOTAL GENERAL</div>
                    <div class="ml-5">{{ number_format($total, 0, ',', ' ') }} CFA</div>
                </div>
            </div>

        </div>

    </div>
</div>





