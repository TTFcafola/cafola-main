<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();
        return view('categoria.index', ['categoria' => Categoria::orderBy('id', 'ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->imagem = $request->imagem;

        if ($request->hasFile('imagem')) {
            $imagem = $request->imagem;
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminhoImagem = $imagem->storeAs('img', $nomeImagem, 'public');
            $categoria->imagem = $caminhoImagem;
        }

        if($categoria->save()){
            return redirect()->route('categoria.index');
        }else
            dd("Erro ao salvar");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categorium)
    {
        return view('categoria.show', ['categoria' => $categorium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categorium)
        {
            
            return view('categoria.edit', ['categoria' => $categorium]);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categoria $categorium)
    {

        $categorium->nome = $request->nome;
        
        if ($request->hasFile('imagem')) {
            $imagem = $request->imagem;
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminhoImagem = $imagem->storeAs('img', $nomeImagem, 'public');
            $categorium->imagem = $caminhoImagem;
        }

        if($categorium->save()){
            return redirect()->route('categoria.index');
        }else
            dd("Erro ao atualizar");
    }

    /**
     * Display the specified list for produtos based in the categoria selected.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function produto($id)
    {
    $categoria = Categoria::findOrFail($id);
    $produto = $categoria->produtos;
    return view('categoria.produto', compact('categoria', 'produto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Categoria::findOrFail($id);
    
        if ($cate->pinto()->count() > 0) {
            return redirect()->route('categoria.index');
        }
    
        $cate->delete();
    
        return redirect()->route('categoria.index');
    }
}