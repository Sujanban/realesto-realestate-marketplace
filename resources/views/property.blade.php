<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property') }}
        </h2>
    </x-slot>
{{-- <form>
    <label>Property Title</label>
    <input type="text" id="pname">
</form> --}}

    {{-- <div class="max-w-6xl mx-auto">
        <div class="flex justify-end m-2 p-2">
            <x-jet-button wire:click="showPropertyModel">Create</x-jet-button>
        </div>
        <div class="m-2 p-2">

        </div>
        <div>
            <x-jet-dialog-model wire:model="showingPropertyModel">
                <x-slot name="title">Title</x-slot>
                <x-slot name="location">Location</x-slot>
                <x-slot name="discription">Discription</x-slot>
                <x-slot name="feature">Feature</x-slot>
            </x-jet-dialog-model>
        </div>
    </div> --}}


</x-app-layout>
