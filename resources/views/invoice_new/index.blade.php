@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobantes
            </h2>

            <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>COMPROBANTE</th>
                        <th style="width:180px;">CLIENTE</th>
                        <th style="width:160px;">DEPARTAMENTO</th>
                        <th style="width:160px;">SEDE</th>
                        <th style="width:180px;">FECHA EMISION.</th>
                        <th style="width:180px;">USUARIO</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $m)
                    <tr> <td >
                            <a href="{{url('invoice/detail/' . $m->id )}}">
                                R-000 {{ str_pad ($m->id, 4, '0', STR_PAD_LEFT) }}
                                
                            </a>
                        </td>
                        <td style="width:180px;"> {{ ($m->cliente)}}</td>
                        <td style="width:160px;"> {{ ($m->area)}}</td>
                        <td style="width:160px;"> {{ $m->client->name }}</td>
                        <td style="width:180px;">{{ $m->created_at  }}</td>
                        <td style="width:180px;"> {{ ($m->user)}}</td>
                        <td style="width:30px;">
                            <a class="btn btn-success btn-block btn-xs" href="{{ url('invoice/pdf/' . $m->id) }}">
                                <i class="fa fa-file-pdf-o"></i> Descargar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
