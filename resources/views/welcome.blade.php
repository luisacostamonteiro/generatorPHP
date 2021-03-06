<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerador de Vidas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Gerador de utilidades</h2>
                <h4>Escolhas as opções</h4>
                <hr>

                <form method="POST" action="{{ route('frontend.post') }}" >
                     @csrf
                    <div class="form-group">
                        <label for="opt">Escolha uma opção</label>
                        <select name="opts" class="form-control" id="opt">
                            <option value="senha">Senha</option>
                            <option value="nif">Nif</option>
                            <option value="mult">Multiplicação</option>
                            <option value="soma">Soma</option>
                            <option value="seq">sequencia de numeros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quant">Quantidade</label>
                        <input name="quant" type="number" class="form-control" id="quant">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if (isset($result))
                    <h1>{!! $result !!}</h1>
                @endif
            </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>
