<div class="inset-0 w-full h-full min-h-full bg-gray-800 flex items-center justify-center">
    <p class="text-white">DStop chargé !</p>
    @foreach($openWindows as $index => $window)
        <div class="absolute top-10 left-10 bg-white p-4 shadow-lg">
            <div class="flex justify-between border-b pb-2">
                <span>{{ $window }}</span>
                <button wire:click="closeWindow({{ $index }})" class="text-red-500">X</button>
            </div>
            <div class="p-2">
                Contenu de {{ $window }}
            </div>
        </div>
    @endforeach
</div>