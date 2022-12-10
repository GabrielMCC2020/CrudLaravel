<div>
    <a class="btn btn-green" wire:click="$set('open', true)"><i class="fas fa-edit"></i></a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar el post {{$socio->nombres}}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombres"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.nombres"/>
                <x-jet-input-error for="nombres" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Apellidos"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.apellidos"/>
                <x-jet-input-error for="apellidos" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Direction"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.direction"/>
                <x-jet-input-error for="direction" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Edad"/>
                <x-jet-input type="number" class="w-full" wire:model="socio.edad"/>
                <x-jet-input-error for="edad" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Estado"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.estado"/>
                <x-jet-input-error for="estado" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Dni"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.dni"/>
                <x-jet-input-error for="dni" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Celular"/>
                <x-jet-input type="number" class="w-full" wire:model="socio.celular"/>
                <x-jet-input-error for="celular" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Género"/>
                <x-jet-input type="text" class="w-full" wire:model="socio.genero"/>
                <x-jet-input-error for="genero" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save()">
                Editar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
