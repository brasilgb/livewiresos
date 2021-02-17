<?php

namespace App\Http\Livewire\Orders;

use App\Models\Client;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Http\Request;

use Manny\Manny as Manny;

class CreateOrder extends Component
{
    public $clientename;
    public $search;
    public $clientes;
    public $cliente_id;
    public $equipamento;
    public $modelo;
    public $senha;
    public $defeito;
    public $estado;
    public $acessorios;
    public $observacoes;
    public $previsao;
    public $orcamento;
    public $valorcamento;
    public $servico;
    public $valservico;
    public $valtotal;
    public $status; //Orçamento, comunicado, entregue
    public $dt_entrega;
    public $hr_entrega;
    public $tecnoco;

    protected $rules = [
        'cliente_id' => 'required',
        'equipamento' => 'required',
        'modelo' => 'required',
        'senha' => 'required',
        'defeito' => 'required',
        'estado' => 'required',
        'acessorios' => 'nullable',
        'observacoes' => 'nullable',
        'previsao' => 'nullable'
    ];

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->clientes = Client::where('nome', 'like', $search)->get();
        return view('livewire.orders.create-order');
    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function create(Request $request)
    {
        $this->validate();
        $data = [
            'cliente_id' => $this->cliente_id,
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'celular' => $this->celular,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'uf' => $this->uf,
            'cidade' => $this->cidade,
            'cep' => $this->cep,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'contato' => $this->contato,
            'telefone_contato' => $this->telefone_contato,
            'celular_contato' => $this->celular_contato
        ];
        Order::create($data);
            $this->cliente_id =
            $this->nome =
            $this->email =
            $this->telefone =
            $this->celular =
            $this->logradouro =
            $this->numero =
            $this->complemento =
            $this->bairro =
            $this->uf =
            $this->cidade =
            $this->cep =
            $this->cpf =
            $this->rg =
            $this->contato =
            $this->telefone_contato =
            $this->celular_contato = null;
        session()->flash('message', 'Dados da ordem de serviço inseridos com successo!');
    }

    

}
