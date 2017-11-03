<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
      "descricao", "logradouro_endereco", "bairro_endereco", "numero_endereco", "cep_endereco", 
      "cidade_endereco", "preco", "qtd_quartos", "tipo", "finalidade"
    ];
    protected $table = "imoveis";
}
