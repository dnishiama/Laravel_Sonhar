<?php

namespace projeto_sonhar\Http\Controllers;
use projeto_sonhar\Models\Voluntario;
use Illuminate\Http\Request;
use Auth;
use Route;

class VoluntarioController extends Controller
{
    private $voluntarios;

    /** Somente usuários autenticados poderão acessar os métodos do controller. */
    public function __construct(Voluntario $voluntario)
    {
        $this->middleware('auth');
        $this->voluntario = $voluntario;
    }

    /** Home Voluntarios. */
    public function index(Voluntario $voluntario)
    {
       return view('Voluntarios.index');
    }

    /**Método de Insert de dados no banco*/
    public function create()
    {
        return view('Voluntarios.create');
    }

    /** Grava dados no banco */
    public function store(Request $request)
    {
        // Cria um novo registro
        $form = $request ->all();
        $insert = $this->voluntario->create($form);
        if($insert)
            return redirect()
                ->route('voluntarios.index')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('voluntarios.index')
                ->with('status', 'Registro não inserido!');
    }

    /** Mostra todos os elementos. */
    public function show()
    {
        $voluntarios = $this->voluntario->all();
        return view('Voluntarios.show', compact ('voluntarios'));
    }

    /** Chama a view de edit e chama o metodo update */
    public function edit($id)
    {
        $voluntarios = $this->voluntario->find($id);
        return view('Voluntarios.edit', compact ('voluntarios'));
    }

    /** Submete o update para o banco */
    public function update(Request $request, $id)
    {
        // Cria um novo registro
        $form = $request ->all();
        $voluntarios = $this->voluntario->find($id);
        $update = $voluntarios->update($form);
        if($update)
            return redirect()
                ->route('voluntarios.show')
                ->with('status', 'Registro atualizado com sucesso!');
        else
            return redirect()
                ->route('voluntarios.show')
                ->with('status', 'Registro não inserido!');
    }

    /** Delete de dados do banco*/
    public function destroy($id)
    {
        $voluntarios = $this->voluntario->find($id);
        $delete = $voluntarios->delete();
        if($delete)
            return redirect()
                ->route('voluntarios.show')
                ->with('status', 'Registro deletado com sucesso!');
        else
            return redirect()
                ->route('voluntarios.show')
                ->with('status', 'Registro não deletado!');
    }
}
