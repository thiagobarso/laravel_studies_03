@extends('layouts.main_layout');
@section('content')

<h3>Este texto faz parte da view</h3>

{{-- renderizar o component --}}
<x-my-component />

{{-- renderizer component que existe dentro de subpasta --}}
<x-admin.admin-card />

<h3>Este texto faz parte da view</h3>

@endsection