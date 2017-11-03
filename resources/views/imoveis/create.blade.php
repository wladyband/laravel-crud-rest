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

        <div class="panel-heading"><h3>Cadastre o imóvel</h3></div>
        <div class="panel-body">

    <form method="post" action="{{route ('imoveis.store')}}">
        {{ csrf_field() }}
        <h4>Dados do imóvel</h4>
        <hr>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" placeholder="Descrição" name="descricao" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" placeholder="Preço" name="preco" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtd_quartos">Quantidade de Quartos</label>
                    <input type="number" class="form-control" placeholder="Quantidade de Quartos" required name="qtd_quartos">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo">Tipo do imóvel</label>
                    <select class="form-control" name="tipo" required>
                        <option value="apartamento">Apartamento</option>
                        <option value="casa">Casa</option>
                        <option value="kitnet">Kitnet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Finalidade do imóvel</label>
                    <select class="form-control" name="finalidade" required>
                        <option value="venda">Venda</option>
                        <option value="locacao">Locação</option>
                    </select>
                </div>
            </div>
        </div>
        <h4>Endereço</h4>
        <hr>

            <div class="form-group">
                <label for="logradouro_endereco">Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" required name="logradouro_endereco">
            </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="bairro_endereco">Bairro</label>
                    <input type="text" class="form-control" placeholder="Bairro" required name="bairro_endereco">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control" placeholder="Número" required name="numero_endereco">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidade_endereco">Cidade</label>
                    <input type="text" class="form-control" placeholder="Cidade" required name="cidade_endereco">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cep_endereco">CEP</label>
                    <input type="text" class="form-control" placeholder="CEP" required name="cep_endereco">
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
        </div>
    </div>

@endsection
