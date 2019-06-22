<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>
<center><h1>Lista de Atividades</h1>
    <br>

    <a href="{{ route('atividades.index') }}">
        <span class="glyphicon glyphicon-arrow-left" height="10" width="10"> Voltar</span>
    </a>
    <br>
    <br>
    <br>
</center>
<table style="width:100%" class="table table-striped">
    <tr align="center">
        <th>ID</th>
        <th>Data</th>
        <th>Descrição</th>
        <th>Instituição</th>
        <th colspan="2">Ação</th>
    </tr>
    @foreach($atividades as $atv)
        <tr>
            <td align="center">{{ $atv->ATV_ID }}</td>
            <td>{{ $atv->ATV_DATA }}</td>
            <td align="center">{{ $atv->ATV_DESCRICAO }}</td>
            <td align="center">{{ $atv->INST_ID }}</td>

            <td align="center">
                <form action="{{ route('atividades.edit', $atv->ATV_ID) }}" method="put">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type='submit'>
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                </form>

            </td>
            <td align="center">
                <form action="{{ route('atividades.destroy', $atv->ATV_ID) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <button type='submit'>
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
</body>
</html>