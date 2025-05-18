@extends('layouts.other_layout')

@section('page_title', 'Other Page')

@section('top_bar')    
    <div>Conteúdo adicional da barra de topo</div>
    @parent
@endsection

@section('content')
<p>Conteúdo da minha view</p>
@endsection

@section('bottom_bar')    
    <div>Conteúdo da barra de rodapé</div>
@endsection