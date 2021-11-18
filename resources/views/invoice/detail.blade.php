@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobante # R-000     {{ str_pad ($model->id, 4, '0', STR_PAD_LEFT) }}
            </h2>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-3">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->client->name }}" />
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->cliente }}" />
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->area}}" />
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->user }}" />
                    </div>
                    <div class="col-xs-12">   <br> <br>  </div>
                    <div class="col-xs-8">
                        <input class="form-control typeahead" type="text" readonly value="{{ $model->nota }}" />
                    </div>
                    <div class="col-xs-4">
                        <input class="form-control typeahead" type="text" readonly value=" Total Bulto: {{ $model->tbulto }}" />
                    </div>
                </div>
            </div>

            <hr />

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th style="width:280px;">Descripción</th>
                    <th style="width:160px;">Retorno</th>
                    <th style="width:180px;">Cantidad</th>
                    <th style="width:180px;">U Venta</th>
                    <th style="width:30px;">Bulto</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model->detail as $d)
                <tr>
                    <td>{{$d->codigo}}</td>
                    <td style="width:280px;">{{$d->descripcion}}</td>
                    <td style="width:160px;">{{$d->product->name}}</td>
                    <td style="width:180px;">{{$d->quantity}}</td>
                    <td style="width:180px;">{{$d->uv}}</td>
                    <td style="width:30px;">{{$d->bulto}}</td>
                </tr>
                @endforeach
                </tbody>

                </tbody>
               
                
            </table>

        </div>
    </div>
</div>
@endsection