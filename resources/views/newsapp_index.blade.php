@extends('core.base')

@section('container')
    <h1>Noticias</h1>
    @if(count($dados) == 0)
        <div class="alert alert-danger text-center" role="alert">
            Nao existem noticias
        </div>
    @else
        @php
            $total = 0;
        @endphp
        @foreach($dados as $noticia)
            @if($noticia->visivel == 1)
                <div class="card mt-2 mb-2">
                    <div class="card-header alert-primary">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>{{$noticia->titulo}}</strong>
                            </div>
                            <div class="col-md-4 text-md-right">
                                {{$noticia->autor}} | {{$noticia->created_at->diffForHumans()}}
                            </div>

                        </div>
                    </div>
                    <div class="card-body text-justify">
                        <p>{{$noticia->texto}}</p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        {{$noticia->autor}}
                    </div>
                </div>
                @php
                    $total++;
                @endphp
            @endif
        @endforeach
        <div class="row">
            <div class="col-md-12 text-right">
                <p>Total: {{$total}}</p>
            </div>

        </div>
    @endif
@endsection