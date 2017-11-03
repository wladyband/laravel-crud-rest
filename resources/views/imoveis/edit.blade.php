@extends('shared.base')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o imóvel</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('imoveis.update', $imovel->id)}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                <h4>Dados do imóvel</h4>
                <hr>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" placeholder="Descrição" name="descricao" required value="{{$imovel->descricao}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" class="form-control" placeholder="Preço" name="preco" required value="{{$imovel->preco}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="qtd_quartos">Quantidade de Quartos</label>
                                <input type="number" class="form-control" placeholder="Quantidade de Quartos" required name="qtd_quartos"
                                value="{{$imovel->qtd_quartos}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipo">Tipo do imóvel</label>
                                <select class="form-control" name="tipo" required>
                                    <option {{($imovel->tipo == 'apartamento'  ? 'selected' : '')}} value="apartamento">Apartamento</option>
                                    <option {{($imovel->tipo == 'casa'  ? 'selected' : '')}} value="casa">Casa</option>
                                    <option {{($imovel->tipo == 'kitnet'  ? 'selected' : '')}} value="kitnet">Kitnet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="qtd_quartos">Finalidade do imóvel</label>
                                <select class="form-control" name="finalidade" required>
                                    <option {{($imovel->finalidade == 'venda'  ? 'selected' : '')}} value="venda">Venda</option>
                                    <option {{($imovel->finalidade == 'locacao'  ? 'selected' : '')}} value="locacao">Locação</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h4>Endereço</h4>
                    <hr>

                        <div class="form-group">
                            <label for="logradouro_endereco">Logradouro</label>
                            <input type="text" class="form-control" placeholder="Logradouro" required name="logradouro_endereco"
                            value="{{$imovel->logradouro_endereco}}">
                        </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="bairro_endereco">Bairro</label>
                                <input type="text" class="form-control" placeholder="Bairro" required name="bairro_endereco"
                                value="{{$imovel->bairro_endereco}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input type="number" class="form-control" placeholder="Número" required name="numero_endereco"
                                value="{{$imovel->numero_endereco}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade_endereco">Cidade</label>
                                <input type="text" class="form-control" placeholder="Cidade" required name="cidade_endereco"
                                value="{{$imovel->cidade_endereco}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cep_endereco">CEP</label>
                                <input type="text" class="form-control" placeholder="CEP" required name="cep_endereco"
                                value="{{$imovel->cep_endereco}}">
                            </div>
                        </div>
                    </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection
