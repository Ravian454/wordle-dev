@php
    $games = config('games');
@endphp

@foreach ($games as $slug => $game)
    <x-game-card
        title="{{ $game['title'] }}"
        image="{{ $game['image'] ?? 'default-image-url.png' }}"
        route="{{ route('games.show', ['slug' => $slug]) }}"
    />
@endforeach
