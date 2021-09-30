<?php

require_once("models/filme.php");

class FilmesController extends Controller
{
 
    public function listar()
    {
        $filmes = Filme::all();
        return $this->view('filmes/lista', ['filmes' => $filmes]);
    }
 
    public function criar()
    {
        return $this->view('filmes/form');
    }
 
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $filme = Filme::find($id);
 
        return $this->view('filmes/form', ['filme' => $filme]);
    }
 
    public function salvar()
    {
        $filme           = new Filme;
        $filme->original_title     = $this->request->original_title;
        $filme->overview = $this->request->overview;
        $filme->rating    = $this->request->rating;
        if ($filme->save()) {
            return $this->listar();
        }
    }
 
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $filme           = Filme::find($id);
        $filme->original_title     = $this->request->original_title;
        $filme->overview = $this->request->overview;
        $filme->rating    = $this->request->rating;
        $filme->save();
 
        return $this->listar();
    }
 
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $filme = Filme::destroy($id);
        return $this->listar();
    }
}
?>