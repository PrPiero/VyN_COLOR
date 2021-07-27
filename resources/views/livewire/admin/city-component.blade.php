<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            Provincia: {{$city->name}}
        </h2>
    </x-slot>

    <div class="container py-12">
        {{--Agregar Departamentos--}}
        <x-jet-form-section submit="save" class="mb-6">
            <x-slot name="title">
                Agregar Nuevo Distrito
            </x-slot>

            <x-slot name="description">
                Complete la información necesaria para poder agregar un nuevo distrito
            </x-slot>

            <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1"/>
                    <x-jet-input-error for="createForm.name" />
                </div>
            </x-slot>

            <x-slot name="actions">

                <x-jet-action-message class="mr-3" on="saved">
                    Distrito agregado
                </x-jet-action-message>
                <x-jet-button>
                    Agregar
                </x-jet-button>
            </x-slot>

        </x-jet-form-section>

        {{--Mostrar Departamento--}}
        <x-jet-action-section>
            <x-slot name="title">
                Lista de Distritos
            </x-slot>
            <x-slot name="description">
                Aqui encontrará todas los distritos agregados
            </x-slot>
            <x-slot name="content">
                <table class="text-gray-600">
                    <thead class="border-b border-gray-300">
                        <tr class="text-left">
                            <th class="py-2 w-full">Nombre</th>
                            <th class="py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($districts as $district)
                            <tr>
                                <td class="py-2">

                                    <span class="uppercase">
                                        {{ $district->name }}
                                    </span>
                                </td>
                                <td class="py-2">
                                    <div class="flex divide-x divide-gray-300 font-semibold">
                                        <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit({{$district}})">Editar</a>
                                        <a class="pr-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteDistrict',{{$district->id}})">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-slot>
        </x-jet-action-section>

        {{--Modal Editar--}}
        <x-jet-dialog-modal wire:model="editForm.open">
            <x-slot name="title">
                Editar Distrito
            </x-slot>
            <x-slot name="content">
                <div class="space-y-3">
                    <div>
                        <x-jet-label>
                            Nombre
                        </x-jet-label>
                        <x-jet-input wire:model.defer="editForm.name" type="text" class="w-full mt-1"/>
                        <x-jet-input-error for="editForm.name"/>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button class="bg-green-500 hover:bg-green-700" wire:click="update" wire:loading.attr="disabled" wire:target="update">
                    ACTUALIZAR
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>

    @push('script')
        <script>
            Livewire.on('deleteDistrict', districtId => {
                Swal.fire({
                    title: '¿Está seguro?',
                    text: "¡No podrá revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, Eliminar!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.city-component', 'delete',districtId)

                        Swal.fire(
                            '¡Eliminado',
                            'La marca ha sido eliminada',
                            'success'
                        );
                    }
                });
            });
        </script>
    @endpush
</div>
