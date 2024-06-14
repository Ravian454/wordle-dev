<!-- resources/views/livewire/wordle-game.blade.php -->
<div x-data="{ open: false }" class="w-full">
    <div :class="{ 'block': !open, 'hidden': open }" @click="open = !open"
        class="w-96 mb-10 mt-10 cursor-pointer border border-gray-300 bg-white rounded-lg">
        <img class="w-full border-2 border-black rounded-lg"
            src="https://wordlewebsite.com/upload/cache/upload/imgs/wordle-game-m190x110.png" alt="Wordle Game">
        <p class="text-black text-3xl font-semibold text-center mt-3 mb-3">Wordle</p>
    </div>
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden flex items-start gap-5 flex-grow relative w-full">
        <div class="w-3/4">
            <p @click="open = !open"
                class="absolute cursor-pointer top-2 left-2 text-white flex items-center text-lg gap-2"><svg
                    fill="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512">
                    <path
                        d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                </svg>Close</p>
            <iframe class="rounded-lg border-2 w-full" style="height: 750px; background: #fff;" id="iframehtml5"
                src="https://wordlewebsite.com/game/wordle.embed" frameborder="0" scrolling="no" allowfullscreen="yes">
            </iframe>
        </div>
        <div class="w-1/4 border rounded-lg flex flex-grow">
            
        </div>
    </div>
</div>
