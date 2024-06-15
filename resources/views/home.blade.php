<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @livewire('wordle-game')
    @livewire('custom-wordle-game')
    @livewire('diffle-game')
    @livewire('wordle-unlimited-game')
    @livewire('feudle-game')
    @livewire('phone-numble-game')
    @livewire('phrazle-game')
    @livewire('heardle-game')
    @livewire('foodle-game')
    @livewire('octordle-game')
@endsection
