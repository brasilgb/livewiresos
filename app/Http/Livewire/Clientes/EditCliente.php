<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditCliente extends Component
{
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



    public function mount(Cliente $cliente)
    {
        $this->idcliente = $cliente->id_cliente;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email;
        $this->telefone = $cliente->telefone;
        $this->celular = $cliente->celular;
        $this->logradouro = $cliente->logradouro;
        $this->numero = $cliente->numero;
        $this->complemento = $cliente->complemento;
        $this->bairro = $cliente->bairro;
        $this->uf = $cliente->uf;
        $this->cidade = $cliente->cidade;
        $this->cep = $cliente->cep;
        $this->cpf = $cliente->cpf;
        $this->rg = $cliente->rg;
        $this->contato = $cliente->contato;
        $this->telefone_contato = $cliente->telefone_contato;
        $this->celular_contato = $cliente->celular_contato;
    }

    public function updated($email)
    {
        $this->validateOnly($email);
    }

    public function update()
    {
        $cliente = Cliente::find($this->idcliente);
        $rules = [
            'nome' => 'required',
            'email' => ['required','email', Rule::unique('clientes')->ignore($this->idcliente, 'id_cliente')],
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
        $this->validate($rules);

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

        $cliente->update($data);

        session()->flash('message', 'Dados do cliente inseridos com successo!');
    }

    public function render()
    {
        return view('livewire.clientes.edit-cliente');
    }
}
