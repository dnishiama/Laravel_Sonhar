<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>
<center><h1>Lista de Voluntarios</h1>
<br>

<a href="{{ route('voluntarios.index') }}">
    <span class="glyphicon glyphicon-arrow-left" height="10" width="10"> Voltar</span>
</a>
    <br>
    <br>
    <br>
</center>
<table style="width:100%" class="table table-striped">
    <tr align="center">
        <th>ID</th>
        <th>Nome do Voluntario</td>
        <th>RG</th>
        <th>CPF</th>
        <th>Nascimento</th>
        <th>Telefone</th>
        <th>Status</th>
        <th colspan="2">Ação</th>
    </tr>
    @foreach($voluntarios as $vol)
        <tr>
            <td align="center">{{ $vol->VOL_ID }}</td>
            <td>{{ $vol->VOL_NOME }}</td>
            <td align="center">{{ $vol->VOL_RG }}</td>
            <td align="center">{{ $vol->VOL_CPF }}</td>
            <td align="center">{{ $vol->VOL_DT_NASCIMENTO }}</td>
            <td align="center">{{ $vol->VOL_TELEFONE }}</td>
            <td align="center">{{ $vol->VOL_STATUS }}</td>
            <td align="center">
                <form action="{{ route('voluntarios.edit', $vol->VOL_ID) }}" method="put">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type='submit'>
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                </form>

            </td>
            <td align="center">
                <form action="{{ route('voluntarios.destroy', $vol->VOL_ID) }}" method="post">
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