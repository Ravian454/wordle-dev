<div>
    <div class="flex gap-10 justify-between w-full flex-wrap">
        @foreach ($games as $slug => $game)
            <x-game-card title="{{ $game['title'] }}" image="{{ $game['image'] ?? 'default-image-url.png' }}"
                route="{{ route('games.show', ['slug' => $slug]) }}" />
        @endforeach
    </div>
</div>
