<?php

namespace projeto_sonhar\Http\Controllers;
use projeto_sonhar\Models\Atividade;
use Illuminate\Http\Request;
use Auth;
use Route;

class AtividadeController extends Controller
{
    private $atividades;

    /** Somente usuários autenticados poderão acessar os métodos do controller. */
    public function __construct(Atividade $atividade)
    {
        $this->middleware('auth');
        $this->atividade = $atividade;
    }

    /** Home atividades. */
    public function index(Atividade $atividade)
    {
        return view('Atividades.index');
    }

    /**Método de Insert de dados no banco*/
    public function create()
    {
        return view('Atividades.create');
    }

    /** Grava dados no banco */
    public function store(Request $request)
    {
        // Cria um novo registro
        $form = $request ->all();
        $insert = $this->atividade->create($form);
        if($insert)
            return redirect()
                ->route('atividades.index')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('atividades.index')
                ->with('status', 'Registro não inserido!');
    }

    /** Mostra todos os elementos. */
    public function show()
    {
        $atividades = $this->atividade->all();
        return view('Atividades.show', compact ('atividades'));
    }

    /** Chama a view de edit e chama o metodo update */
    public function edit($id)
    {
        $atividades = $this->atividade->find($id);
        return view('Atividades.edit', compact ('atividades'));
    }

    /** Submete o update para o banco */
    public function update(Request $request, $id)
    {
        // Cria um novo registro
        $form = $request ->all();
        $atividades = $this->atividade->find($id);
        $update = $atividades->update($form);
        if($update)
            return redirect()
                ->route('atividades.show')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('atividades.show')
                ->with('status', 'Registro não inserido!');
    }

    /** Delete de dados do banco*/
    public function destroy($id)
    {
        $atividades = $this->atividade->find($id);
        $delete = $atividades->delete();
        if($delete)
            return redirect()
                ->route('atividades.show')
                ->with('status', 'Registro deletado com sucesso!');
        else
            return redirect()
                ->route('atividades.show')
                ->with('status', 'Registro não deletado!');
    }
}