@props(['trigger'])

<div x-data="{show: false}" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}        
    </div>

    {{-- Links --}}
    <div x-show="show" class="absolute py-2 bg-gray-100 w-full mt-2 rounded-xl z-50">
        {{ $slot }}        
    </div>
</div>