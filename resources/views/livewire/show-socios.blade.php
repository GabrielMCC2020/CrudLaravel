<div>
    <div class="m-4">
        <div class="my-3 flex items-center">
            <x-jet-input wire:model="search" type="text" placeholder="Escribe el nombre" class="flex-1 mr-4" />
            @livewire('create-socios')
        </div>
        <div>
            @if ($socios->count())
            <table class="items-center bg-transparent w-full border-collapse ">
                <thead>
                    <tr>
                        <th class="w-24 cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('id')">
                            id
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('nombres')">
                            nombres
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('apellidos')">
                            apellidos
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('direction')">
                            direction
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('edad')">
                            edad
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('estado')">
                            estado
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('dni')">
                            dni
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('celular')">
                            celular
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            wire:click="order('genero')">
                            genero
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                        
                        <th
                            class="w-24 cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            role
                            <i class="fas fa-sort float-right mt-1"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($socios as $socio)
                    <tr>
                        <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 text-left text-blueGray-700 ">
                            {{$socio->id}}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 ">
                            {{$socio->nombres}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->apellidos}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->direction}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->edad}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->estado}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->dni}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->celular}}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs p-4">
                            {{$socio->genero}}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4 flex items-center gap-1">
                            @livewire('edit-socios', ['socio' => $socio], key($socio->id))
                            <a class="btn btn-red" wire:click="$emit('deleteSocio', {{$socio->id}})"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="text-center">
                No existe ningun registro
            </div>
            @endif
        </div>
    </div>
</div>

@push('js')
<script src="sweetalert2.all.min.js"></script>
<script>
    Livewire.on('deleteSocio', socioId => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emitTo('show-socios', 'delete', socioId);
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    })

</script>
@endpush
