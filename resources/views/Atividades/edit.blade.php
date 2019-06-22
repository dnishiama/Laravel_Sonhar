<html>
<head>
    <style>
        form {
            /* Apenas para centralizar o form na página */
            margin: 0 auto;
            width: 500px;
            /* Para ver as bordas do formulário */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }
        form div + div {
            margin-top: 1em;
        }
        label {
            /*Para ter certeza que todas as labels tem o mesmo tamanho e estão propriamente alinhadas */
            display: inline-block;
            width: 130px;
            text-align: right;
        }
        input, textarea, select {
            /* Para certificar-se que todos os campos de texto têm as mesmas configurações de fonte. Por padrão, textareas ter uma fonte monospace*/
            font: 1em sans-serif;

            /* Para dar o mesmo tamanho a todos os campo de texto */
            width: 350px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            /* Para harmonizar o look & feel das bordas nos campos de texto*/
            border: 1px solid #999;
        }
        input:focus, textarea:focus {
            /* Dar um pouco de destaque nos elementos ativos */
            border-color: #000;
        }
        textarea {
            /* Para alinhar corretamente os campos de texto de várias linhas com sua label*/
            vertical-align: top;

            /* Para dar espaço suficiente para digitar algum texto */
            height: 5em;

            /* Para permitir aos usuários redimensionarem qualquer textarea verticalmente. Ele não funciona em todos os browsers */
            resize: vertical;
        }
        .button {
            /* Para posicionar os botões para a mesma posição dos campos de texto */
            padding-left: 200px; /* mesmo tamanho que os elementos do tipo label */
        }
        button {
            /* Esta margem extra representa aproximadamente o mesmo espaço que o espaço entre as labels e os seus campos de texto*/
            margin-left: .5em;
        }
    </style>
</head>
<body>
<center><h1>Lista de Atividades</h1></center>

<form action="{{ route('atividades.update', $atividades->ATV_ID) }}" method="post" role="form">
    {!! method_field('PUT') !!}
    {{ csrf_field() }}
    <div>
        <label for="ATV_DATA">Data:</label>
        <input type="text" id="ATV_DATA" name="ATV_DATA" value='{{ $atividades->ATV_DATA }}'>
    </div>
    <div>
        <label for="ATV_DESCRICAO">Descrição:</label>
        <input type="text" id="ATV_DESCRICAO" name="ATV_DESCRICAO" value='{{ $atividades->ATV_DESCRICAO }}'>
    </div>
    <div>
        <label for="INST_ID">ID Instituição:</label>
        <input type="number" id="INST_ID" name="INST_ID" value='{{ $atividades->INST_ID }}'>
    </div>

    <div class="button">
        <button type="submit">Atualizar</button>
    </div>
    <div align="center">
        <a href="{{ route('atividades.show') }}">Voltar ao menu anterior</a>
    </div>

</form>
</body>
</html>