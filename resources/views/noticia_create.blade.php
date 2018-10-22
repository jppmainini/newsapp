@extends('core.base')

@section('title')
    Nova Noticia |
@endsection

@section('container')
    <form method="post" action="salvar_noticia">
        {{csrf_field()}}
        <h3>Nova Noticia</h3>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control form-control-sm" id="titulo" name="text_titulo" placeholder="Titulo" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" class="form-control form-control-sm" id="autor" name="text_autor" placeholder="Autor" required>
                </div>
            </div>
            <div class="col-1 text-center mt-4">
                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="visivel" name="check_visivel" checked>
                    <label for="visivel" class="form-check-label">Visivel</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="texto">Example textarea</label>
                    <textarea class="form-control" id="texto" name="text_texto" placeholder="Noticia" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="form-row text-center pt-2 pb-2">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection