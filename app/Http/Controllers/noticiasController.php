<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{

    protected $primarykey = 'id_noticias';
    //====================================================
    public function index()
    {
        //Irá buscar todas as noticias
        $dados = noticias::all();

        return view('newsapp_index', compact('dados'));
    }

    //====================================================
    public function create()
    {
        //Apresentar a pagina de apresentacao nova noticia
        return view('noticia_create');
    }

    //====================================================
    public function store(Request $request)
    {
        //vai gravar a nova noticia no bd
        $noticia = new noticias;
        $noticia->titulo = $request->text_titulo;
        $noticia->autor = $request->text_autor;
        $noticia->texto = $request->text_texto;
        if (isset($request->check_visivel)){
            $noticia->visivel = 1;
        }else{
            $noticia->visivel = 0;
        }
        $noticia->save();
        return redirect('/');
    }

    //====================================================
    public function show($id)
    {
        //
    }

    //====================================================
    public function edit($id)
    {
        //editar uma noticia
        $noticia = noticias::find($id);
        return view('/noticias_editar', compact('noticia'));
    }

    //====================================================
    public function update(Request $request, $id)
    {
        //atualiza a edicao de uma noticia
        $noticia = noticias::find($id);

        $noticia->titulo = $request->text_titulo;
        $noticia->autor = $request->text_autor;
        $noticia->texto = $request->text_texto;
        if (isset($request->check_visivel)){
            $noticia->visivel = 1;
        }else{
            $noticia->visivel = 0;
        }

        $noticia->save();
        return redirect('/gestor_noticia');

    }

    //====================================================
    public function destroy($id)
    {
        //deleta noticia
        noticias::destroy($id);
        return redirect('/gestor_noticia');
    }

    //====================================================
    public function listarNoticias()
    {
        //gestor de noticias
        $noticias = noticias::all();
        return view('listar_noticias', compact('noticias'));
    }

    //====================================================
    public function visivelNoticias($id){
        $noticia = noticias::find($id);

        if($noticia->visivel == 0){
            $noticia->visivel = 1;
        }
        elseif($noticia->visivel == 1){
            $noticia->visivel = 0;
        }
        $noticia->save();

        return redirect('/gestor_noticia');
    }
}
