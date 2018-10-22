@extends('core.base')

@section('title')
    Gestor Noticias |
@endsection

@section('container')
    @if(count($noticias) == 0)
        <div class="alert alert-danger text-center" role="alert">
            Nao existem noticias
        </div>
    @else
    <h1>listar noticias</h1>
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Visivel</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($noticias as $noticia)
            <tr>
                <th scope="row">{{$noticia->id_noticias}}</th>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->autor}}</td>
                <td>
                    @if($noticia->visivel == 1)
                        Sim
                    @else
                        Não
                    @endif
                </td>
                <td>
                    <a href="noticias_editar/{{ $noticia->id_noticias }}" class="pr-2"><i class="fas fa-pencil-alt"></i></a>
                    <a href="noticias_deletar/{{ $noticia->id_noticias }}" class="pr-2"><i class="far fa-trash-alt"></i></a>
                    @if($noticia->visivel == 1)
                        <a href="noticias_visivel/{{ $noticia->id_noticias }}" class="pr-2" title="Visivel"><i class="fas fa-eye"></i></a>
                    @else
                        <a href="noticias_visivel/{{ $noticia->id_noticias }}" class="pr-2" title="Invisivel"><i class="fas fa-eye-slash"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
@endsection