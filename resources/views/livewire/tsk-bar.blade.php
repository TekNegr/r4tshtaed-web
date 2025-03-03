<div class="w-full bg-gray-800 p-2 flex gap-4 mt-auto z-50 border-t border-gray-700">
    @foreach($files as $file)
        <button wire:click="open('{{ $file }}')" class="bg-gray-500 text-white px-4 py-2 rounded">{{ $file }}</button>
    @endforeach
</div>
