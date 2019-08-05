<div id="{{ $name }}" class="overlay fixed z-50 top-0 right-0 bottom-0 left-0 flex items-center justify-center" style="background-color: rgba(0, 0, 0, .75)">
    <a href="#" class="absolute w-full h-full cursor-default"></a>
    <div class="relative w-full h-full overflow-y-scroll md:h-auto md:w-3/4 lg:w-1/2 max-w-3xl p-6 lg:p-12 bg-highlight">
        {{ $slot }}
        <a class="script-modal-overlay-button absolute top-0 right-0 px-3 text-3xl font-extrabold no-underline text-white hover:text-support" href="#">&times;</a>
    </div>
</div>
