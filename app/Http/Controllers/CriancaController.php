<?php

namespace projeto_sonhar\Http\Controllers;
use projeto_sonhar\Models\Crianca;
use Illuminate\Http\Request;
use Auth;
use Route;

class CriancaController extends Controller
{
    private $criancas;

    /** Somente usuários autenticados poderão acessar os métodos do controller. */
    public function __construct(Crianca $crianca)
    {
        $this->middleware('auth');
        $this->crianca = $crianca;
    }

    /** Home criancas. */
    public function index(Crianca $crianca)
    {
        return view('Criancas.index');
    }

    /**Método de Insert de dados no banco*/
    public function create()
    {
        return view('Criancas.create');
    }

    /** Grava dados no banco */
    public function store(Request $request)
    {
        // Cria um novo registro
        $form = $request ->all();
        $insert = $this->crianca->create($form);
        if($insert)
            return redirect()
                ->route('criancas.index')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('criancas.index')
                ->with('status', 'Registro não inserido!');
    }

    /** Mostra todos os elementos. */
    public function show()
    {
        $criancas = $this->crianca->all();
        return view('Criancas.show', compact ('criancas'));
    }

    /** Chama a view de edit e chama o metodo update */
    public function edit($id)
    {
        $criancas = $this->crianca->find($id);
        return view('Criancas.edit', compact ('criancas'));
    }

    /** Submete o update para o banco */
    public function update(Request $request, $id)
    {
        // Cria um novo registro
        $form = $request ->all();
        $criancas = $this->crianca->find($id);
        $update = $criancas->update($form);
        if($update)
            return redirect()
                ->route('criancas.show')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('criancas.show')
                ->with('status', 'Registro não inserido!');
    }

    /** Delete de dados do banco*/
    public function destroy($id)
    {
        $criancas = $this->crianca->find($id);
        $delete = $criancas->delete();
        if($delete)
            return redirect()
                ->route('criancas.show')
                ->with('status', 'Registro deletado com sucesso!');
        else
            return redirect()
                ->route('criancas.show')
                ->with('status', 'Registro não deletado!');
    }
}