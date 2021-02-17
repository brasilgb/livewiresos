<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Http\Request;

class CreateClient extends Component
{
    public $nome;
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
        'nome' => 'required',
        'email' => 'required|email|unique:clientes',
        'celular' => 'required',
        'logradouro' => 'required',
        'numero' => 'required|numeric',
        'complemento' => 'required',
        'bairro' => 'required',
        'uf' => 'required',
        'cidade' => 'required',
        'cep' => 'required',
        'cpf' => 'required|unique:clientes',
    ];

    public function render()
    {
        return view('livewire.clients.create-client');
    }

    public function updated($field)
    {
        $this->validateOnly($field);

        // $field == 'telefone' ? $this->telefone = Manny::mask($this->telefone, "(11) 1111-1111") :'';
        // $field == 'celular'  ? $this->celular  = Manny::mask($this->celular,  "(11) 1111-11111"):'';
        // $field == 'cep'  ? $this->cep  = Manny::mask($this->cep,  "11111-111"):'';
        // $field == 'cpf'  ? $this->cpf  = Manny::mask($this->cpf,  "111111111/11"):'';
        // $field == 'rg'  ? $this->rg  = Manny::mask($this->rg,  "1111111111"):'';
        // $field == 'telefone_contato'  ? $this->telefone_contato  = Manny::mask($this->telefone_contato,  "(11) 1111-1111"):'';
        // $field == 'celular_contato'  ? $this->celular_contato  = Manny::mask($this->celular_contato,  "(11) 1111-11111"):'';
    }

    public function create(Request $request)
    {
        $this->validate();
        $data = [
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
        Client::create($data);
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
        session()->flash('message', 'Dados do cliente inseridos com successo!');
    }

}
