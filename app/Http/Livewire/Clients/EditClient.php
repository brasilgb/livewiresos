<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditClient extends Component
{
    public $client;
    public $idcliente;
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

    public function rules()
    {
        return [
        'nome' => 'required',
        'email' => ['required', Rule::unique('clientes')->ignore($this->idcliente, 'id_cliente')],
        'celular' => 'required',
        'logradouro' => 'required',
        'numero' => 'required',
        'complemento' => 'required',
        'bairro' => 'required',
        'uf' => 'required',
        'cidade' => 'required',
        'cep' => 'required',
        'cpf' => ['required', Rule::unique('clientes')->ignore($this->idcliente, 'id_cliente')]
        ];
    }

    public function mount(Client $client)
    {
        $this->idcliente = $client->id_cliente;
        $this->nome = $client->nome;
        $this->email = $client->email;
        $this->telefone = $client->telefone;
        $this->celular = $client->celular;
        $this->logradouro = $client->logradouro;
        $this->numero = $client->numero;
        $this->complemento = $client->complemento;
        $this->bairro = $client->bairro;
        $this->uf = $client->uf;
        $this->cidade = $client->cidade;
        $this->cep = $client->cep;
        $this->cpf = $client->cpf;
        $this->rg = $client->rg;
        $this->contato = $client->contato;
        $this->telefone_contato = $client->telefone_contato;
        $this->celular_contato = $client->celular_contato;
    }

    public function updated($email)
    {
        $this->validateOnly($email);
    }

    public function update()
    {
        $client = Client::find($this->idcliente);

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

        $client->update($data);

        session()->flash('message', 'Dados do clientes inseridos com successo!');
    }



    public function render()
    {
        return view('livewire.clients.edit-client');
    }
}
