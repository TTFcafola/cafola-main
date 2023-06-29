<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produto::all();
        return view('produto.index', ['prod' => Produto::orderBy('id', 'ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categoria::all();
        return view('produto.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->categoria_id = $request->categoria_id;
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;

        if ($request->hasFile('imagem')) {
            $imagem = $request->imagem;
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminhoImagem = $imagem->storeAs('img', $nomeImagem, 'public');
            $produto->imagem = $caminhoImagem;
        }
        
        if($produto->save()){
            return redirect()->route('prod.index');
        }else
            dd("Erro ao salvar");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $prod)
        {
            $cat = Categoria::all();
            return view('produto.edit', ['produto' => $prod], compact('cat'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Produto $prod)
    {

        $prod->categoria_id = $request->categoria_id;
        $prod->nome = $request->nome;
        $prod->preco = $request->preco;

        if ($request->hasFile('imagem')) {
            $imagem = $request->imagem;
            $nomeImagem = time() . '_' . $imagem->getClientOriginalName();
            $caminhoImagem = $imagem->storeAs('img', $nomeImagem, 'public');
            $prod->imagem = $caminhoImagem;
        }

        if($prod->save()){
            return redirect()->route('prod.index');
        }else
            dd("Erro ao atualizar");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $prod)
    {
        if($prod->delete()){
            return redirect()->route('prod.index')->with('bueras', 'Produto excluído com sucesso!!!');

        }else
            dd("Erro ao excluir");
    }
}