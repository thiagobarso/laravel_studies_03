@extends('layouts.main_layout')
@section('content')
    {{-- <div class="text-center">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
           <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div> --}}
    <div>
        <h4 class="text-info">Como funciona um Slot?</h4>
        <x-other-card>
            <h4 class="text-danger">Este é o Slot!</h4>
            <h4 class="text-danger">Este é o Slot!</h4>
            <h4 class="text-danger">Este é o Slot!</h4>
        </x-other-card>
    </div>
@endsection
