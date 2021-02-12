<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use Illuminate\Http\Request;

class CreateCliente extends Component
{
    public $cliente;
    public $email;
    public $telefone;
    public $celular;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $uf;
    public $estado;
    public $cidade;
    public $cep;
    public $cpf;
    public $rg;
    public $contato;
    public $telefone_contato;
    public $celular_contato;

    protected $rules = [
        'cliente' => 'required',
        'email' => 'required|email',
        'celular' => 'required',
        'logradouro' => 'required',
        'numero' => 'required',
        'complemento' => 'required',
        'bairro' => 'required',
        'uf' => 'required',
        'cidade' => 'required',
        'cep' => 'required',
        'cpf' => 'required',
    ];

    public function render()
    {
        return view('livewire.clientes.create-cliente');
    }

    public function updated($email)
    {
        $this->validateOnly($email);
    }

    public function create(Request $request)
    {
        $this->validate();
        $data = [
            'cliente' => $this->cliente,
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
        Cliente::create($data);
        $this->cliente =
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
        session()->flash('message', 'Dados do cliente inseridos com successo!');
    }
}
