<x-filament::widget>
    <x-filament::card>
        <div>
            <label>
                <input class="rounded" type="radio" value="en" wire:model="localEn" wire:click="switchLocale('en')">
                    English
            </label>

            <label>
                <input class="rounded" type="radio" value="id" wire:model="localId" wire:click="switchLocale('id')">
                    Indonesia
            </label>
        </div>
    </x-filament::card>
</x-filament::widget>
