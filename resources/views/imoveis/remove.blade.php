@extends('shared.base')
@section('content')
<div class="panel panel-default">
      <div class="panel-heading">Remover o imóvel</div>
		<div class="panel-body">
			<form method="post" action="{{route ('imoveis.destroy', $imovel->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<h4>Tem certeza que deseja remover o imóvel?</h4>
						<hr>
						<h4>Sobre o imóvel</h4>
						<p>Descrição: {{$imovel->descricao}}</p>
						<p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
						<p>Quantidade de Quartos: {{$imovel->qtd_quartos}}</p>
						<p>Tipo: {{$imovel->tipo}}</p>
						<p>Finalidade: {{$imovel->finalidade}}</p>
						<hr>
						<h4>Endereço</h4>
						<p>Logradouro: {{$imovel->logradouro_endereco}}</p>
						<p>Bairro: {{$imovel->bairro_endereco}}</p>
						<p>Número: {{$imovel->numero_endereco}}</p>
						<p>CEP: {{$imovel->cep_endereco}}</p>
						<p>Cidade: {{$imovel->cidade_endereco}}</p>
					</div>
				</div>
				<button type="submit" class="btn btn-danger">Remover</button>
				<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
			</form>
		</div>
	</div>
</div>
@endsection