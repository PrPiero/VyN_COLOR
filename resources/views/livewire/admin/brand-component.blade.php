<div class="container py-12">
    {{-- FORMULARIO CREAR MARCA --}}
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Agregar Nueva Marca
        </x-slot>
        <x-slot name="description">
            En este apartado podrá agregar una nueva marca
        </x-slot>
        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input type="text" wire:model="createForm.name" class="w-full"/>
                <x-jet-input-error for="createForm.name"/>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    {{-- LISTA DE MARCAS --}}
    <x-jet-action-section>
        <x-slot name="title">
            Lista de Marcas
        </x-slot>
        <x-slot name="description">
            En este apartado se encuentran todas las marcas registradas
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
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="py-2">
                                <span class="uppercase">
                                    {{ $brand->name }}
                                </span>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{ $brand->id }}')">Editar</a>
                                    <a class="pr-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteBrand', '{{ $brand->id }}')">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
    </x-jet-action-section>

    {{-- EDITAR MARCA --}}
    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar Marca
        </x-slot>
        <x-slot name="content">
            <x-jet-label>
                Nombre
            </x-jet-label>
            <x-jet-input wire:model="editForm.name" type="text" class="w-full"/>
            <x-jet-input-error for="editForm.name"/>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="bg-green-500 hover:bg-green-700" wire:click="update" wire:loading.attr="disabled" wire:target="update">
                ACTUALIZAR
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('script')
        <script>
            Livewire.on('deleteBrand', brandId => {
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

                        Livewire.emitTo('admin.brand-component', 'delete', brandId)

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
