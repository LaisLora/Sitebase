<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ClientsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

//
    public function getIndex(){
        $clientes = $this->SelectAll();
        return view('clientes_list', ['clientes' => $clientes]);
     }

     public function deleteClient($id){
        $this->DeleteById($id);
        $clientes = $this->SelectAll();
        return view('clientes_list', ['clientes' => $clientes]);
     }

     public function insertClient(){
        
        $cliente = Request::get('cliente');
        $pet = Request::get('pet');
        $cel = Request::get('cliente');
        $idadepet = Request::get('pet');
        $observacoes = Request::get('pet');

        $this->Insert($cliente, $pet, $cel, $idadepet, $observacoes);
        $clientes = $this->SelectAll();
        return view('clientes_list', ['clientes' => $clientes]);
     }

    public function SelectAll()
    {
        $connection = "mysql";
        return DB::connection($connection)->select('SELECT * FROM clientes');
    }

    public function DeleteById($id)
    {
        $connection = "mysql";
        return DB::connection($connection)->select("DELETE FROM clientes WHERE idCliente = '".$id."'");
    }

    public function Insert($cliente, $pet, $cel, $idadepet, $observacoes)
    {
        $connection = "mysql";
        return DB::connection($connection)->select("INSERT INTO clientes
        (`cliente`,
`pet`,
`idadepet`,
`cel`,
`observacoes`)
        VALUES ('".$cliente."',
        '".$pet."',
        '".$idadepet."',
        '".$cel."',
        '".$observacoes."')");
    }

}