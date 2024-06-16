@props(['title', 'image', 'route'])

<div class="max-w-82 bg-white rounded-lg max-h-62">
    <a href="{{ $route }}" class=" cursor-pointer border border-gray-300 rounded-lg block">
        <img class=" w-82 max-h-50 border-2 border-black rounded-lg" src="{{ $image }}" alt="{{ $title }}">
        <p class="text-black text-xl font-semibold text-center mt-3 mb-3">{{ $title }}</p>
    </a>
</div>
