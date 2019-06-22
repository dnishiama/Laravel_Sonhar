@extends('layouts.app')
<style>
    table, td, th {
        border: 1px;
        alignment: center;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        vertical-align: bottom;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><center>Bem vindo ao Projeto Sonhar</center></strong></div>
                <div class="panel-body">
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th>
                                <a href="{{ url('/criancas') }}"><center>Crianças</center></a>
                                </th>
                                <th>
                                <a href="{{ url('voluntarios') }}"><center>Voluntarios</center></a>
                                </th>
                                <th>
                                <a href="{{ url('/atividades') }}"><center>Atividades</center></a>
                                </th>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
