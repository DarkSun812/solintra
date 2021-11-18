<?php

namespace App\Repositories;

use App\Invoice;
use App\InvoiceItem;
use DB;

class InvoiceRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Invoice();
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function getAll() {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function save($data) {
        $return = (object)[
            'response' => false
        ];

        try {
            DB::beginTransaction();
            $this->model->client_id = $data->client_id;
            $this->model->cliente = $data->cliente;
            $this->model->area = $data->area;
            $this->model->user = $data->user;
            $this->model->nota = $data->nota;
            
            $this->model->save();

            $detail = [];
            foreach($data->detail as $d) {
                $obj = new InvoiceItem;
                $obj->product_id = $d->product_id;
                $obj->codigo = $d->codigo;
                $obj->quantity = $d->quantity;
                $obj->bulto = $d->bulto;              
                $obj->descripcion = $d->descripcion;
                $obj->uv = $d->uv;                
                $detail[] = $obj;               
            }

            $this->model->detail()->saveMany($detail);
            $return->response = true;

            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
        }

        return json_encode($return);
    }
}
