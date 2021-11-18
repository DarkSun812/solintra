
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>N/E R-000 {{ str_pad ($model->id, 4, '0', STR_PAD_LEFT) }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logorif.png')}}">
     <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>"/>
</head>
<body>

<div id="page_pdf">
          <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>
    <table id="factura_head">
        <tr>
            <td class="logo_factura">
                <div>
                   <img src="{{ asset('img/logorif.png')}}">
                </div>
            </td>
            <td class="info_empresa">
                 <div class="textleft"> 
                    <p>Direcciómn Fiscal: Av. Ppal Parque  Industrial El Marquez, Edificio</p>
                    <p>Soloson Ofic. Administrativa, Zona Industrial El Marquez Norte</p>
                    <p>Guatire Edo Miranda.</p>
                    <p>Teléfono: 0058 212 - 6551600</p>
                    
                </div>
             </td>   
        </tr>
    </table>
        <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td> 
                <div>
                    <p style="font-size: 12pt">NOTA DE ENTREGA</p>
                 </div>    
            </td>
            <td >
                <div>
                    <p style="text-align: right; font-size: 12pt; position: absolute; margin-left: 250px; margin-top: -6px; font-weight: bold;"> R-000 {{ str_pad ($model->id, 4, '0', STR_PAD_LEFT) }}</p>                
                </div>
            </td>
        </tr>
    </table>
     <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>
     <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">SEDE:   </label><label>{{ $model->client->name }}</label></td></tr>            
    </table>
             
    <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">DPTO:   </label><label>{{ ($model->area)}}</label></td></tr>
            
    </table>
    <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">CREADO POR:   </label><label>{{ ($model->user)}}</label></td></tr>
            
    </table>
     <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">FECHA DE EMISION:   </label><label> {{ $model->created_at  }}</label></td></tr>            
    </table>
     <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">CLIENTE:   </label><label> {{ ($model->cliente)}}</label></td></tr>            
    </table>
    <table>  
             <tr><td><label class="textleft" style="font-weight: bold;">TOTAL BULTOS:   </label><label> {{ ($model->tbulto)}}</label></td></tr>            
    </table>

    <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>
       <table>  
             
             <tr><td><p class="text-center">POR MEDIO DE LA PRESENTE HACEMOS ENTREGA DE LOS MATERIALES ANEXO:</p></td></tr>
    </table> 

    <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>
                


    <table  id="factura_detalle" class="table table-striped">
        <thead>
        <tr>
            <th class="textleft">CODIGO</th>
            <th class="textleft">DESCRIPCIÓN</th>
            <th class="textleft" style="width:150px;">RETORNO</th>
            <th class="textleft"style="width:80px;">CANT.</th>
            <th class="textleft"style="width:80px;">U. VENTA</th>
            <th class="textleft"style="width:10px;">BULTO</th>
        </tr>
        </thead>
        <tbody>

            @foreach($model->detail as $d)
                <tr>
                    <td>{{$d->codigo}}</td>
                    <td class="textleft">{{$d->descripcion}}</td>
                    <td class="textleft" style="width:150px;">{{$d->product->name}}</td>
                    <td style="width:80px;">{{$d->quantity}}</td>
                    <td style="width:80px;">{{$d->uv}}</td>
                    <td style="width:10px;">{{$d->bulto}}</td>
                </tr>
                @endforeach      
        </tbody>
        
    </table>
        <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>

     <table  id="factura_detalle" class="table table-striped">
        <thead>
            <tr>
                <th style="text-align: left;"> NOTA:</th>
            </tr>    
          </thead>
        <tbody>
            <tr each={detail}>
               
                <td>{{ ($model->nota)}}</td>
                
            </tr>
                   
        </tbody>
        
    </table>
        <table id="detalle_totales">
        <tr>
            <td class="info_cliente">
                <div class="round3">                    
                    <table class="datos_cliente">
                        <tr>
                            <td><label></label><td>                             
                        </tr>                   
                    </table>                    
                </div>
            </td>
        </tr>
    </table>

    <table id="factura_head">
        <tr>
            <td class="info_empresa">
                <div >
                   <table  style="line-height: 15pt;">
                        <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Preparador de Pedido:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                               <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Hora:</label><label>___________:_____________</label> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td class="info_empresa">
                 <div> 
                       <table  style="line-height: 15pt;">
                             <tr>
                                <td>
                                    <p style="font-weight: bold; text-decoration: underline;">Dpto de Despacho:</p> <br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <label>Nombre:</label><label>_______________________</label> 
                                </td><br><br>
                            </tr>
                            <tr>
                                <td>
                                    <label>Fecha:</label><label>_______/________/________</label><br> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <label>Hora:</label><label>___________:_____________</label> <br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <label>Firma:</label><label>_________________________</label> 
                                </td>
                            </tr>
                      </table>                 
                    </div>
            </td>
            <td class="info_empresa">
                <div>
                   <table  style="line-height: 15pt;">
                         <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Recepcion de Cliente:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                                <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Hora:</label><label>___________:_____________</label> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                  </table>
                </div>
            </td>    

        </tr>
    </table>

    <table id="factura_head">
        <tr>
            <td class="info_empresa">
                <div>
                   <table  style="line-height: 15pt;">
                         <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Autorizado Jefe de Area:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                                <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                  </table>
                </div>
            </td>
            <td class="info_empresa">
                 <div> 
                     <table  style="line-height: 15pt;">
                         <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Seguridad Interna / Externa:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                                <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                      </table>                   
                </div>
            </td>
            <td class="info_empresa">
                <div>
                   <table  style="line-height: 15pt;">
                        <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Auditado por Dpto Despacho:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                                <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td class="info_empresa">
                <div>
                   <table  style="line-height: 15pt;">
                         <tr>
                            <td>
                                <p style="font-weight: bold; text-decoration: underline;">Firma del Conductor:</p> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Nombre:</label><label>_______________________</label> 
                            </td><br><br>
                        </tr>
                        <tr>
                            <td>
                                <label>Fecha:</label><label>_______/________/________</label><br> 
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Firma:</label><label>_________________________</label> 
                            </td>
                        </tr>
                  </table>
                </div>
            </td>    

        </tr>
    </table> 

</body>
</html>