@extends('layouts.main_layout');
@section('content')

<h3>Este texto faz parte da view</h3>

{{-- renderizar o component --}}
<x-my-component message="texto da mensagem"/>

{{-- renderizer component que existe dentro de subpasta --}}
<x-admin.admin-card :name="$myName" teste="Olá Mundo" />

<h3>Este texto faz parte da view</h3>

@endsection