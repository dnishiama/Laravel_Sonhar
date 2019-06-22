<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            text-align: center;
        }
    </style>
</head>
<body>
<center><h1>Crianças</h1></center>
<center><h2></h2></center>

<table style="width:50%" align="center">
    <tr>
        <th colspan="2">SELECIONE ABAIXO A OPÇÃO DESEJADA</th>
    </tr>
    <tr>
        <th><a href="{{ route('criancas.create') }}">Cadastro</a></th>

        <th><a href="{{ route('criancas.show') }}">Visualizar</a></th>
    </tr>
    <tr>
        <th colspan="2">
            <a href="{{ route('home') }}">Voltar ao menu principal</a>
        </th>
    </tr>

</table>
</body>
</html>