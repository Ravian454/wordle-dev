@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @livewire('game-list', ['games' => config('games')])
@endsection
