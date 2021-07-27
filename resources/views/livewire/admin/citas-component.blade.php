<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            Citas
        </h2>
    </x-slot>

    <div class="container py-12">
        <x-table-responsive>

            <div class="px-6 py-4">
                <x-jet-input wire:model="search" type="text" class="w-full" placeholder="Busque por cliente, teléfono o estado"/>
            </div>
            @if (count($quotes))
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cliente
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Teléfono
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Detalles
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($quotes as $quote)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class=" text-gray-900">
                                        {{$quote->id}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">
                                        {{$quote->client}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$quote->phone}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$quote->state}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a wire:click="edit({{$quote}})" class="pr-2 hover:text-blue-600 cursor-pointer">Ver Detalles</a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4" >
                    No existen registros de citas
                </div>
            @endif

            @if ($quotes->hasPages())
                <div class="px-6 py-4">
                    {{$quotes->links()}}
                </div>
            @endif
        </x-table-responsive>
    </div>

    {{--Modal Editar--}}
    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            DETALLES
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">
                <div>
                    <x-jet-label>
                        Cliente
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.client" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.client"/>
                </div>
                <div>
                    <x-jet-label>
                        Teléfono
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.phone" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.phone"/>
                </div>
                <div>
                    <x-jet-label>
                        Correo Electrónico
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.email" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.email"/>
                </div>
                <div>
                    <x-jet-label>
                        Fecha de Cita
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.date" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.date"/>
                </div>
                <div>
                    <x-jet-label>
                        Descripción
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.description" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.description"/>
                </div>
                <div>
                    <x-jet-label>
                        Estado
                    </x-jet-label>
                    <x-jet-input wire:model.defer="editForm.state" type="text" class="bg-gray-200 w-full mt-1" disabled/>
                    <x-jet-input-error for="editForm.state"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="bg-green-500 hover:bg-green-700" wire:click="update" wire:loading.attr="disabled" wire:target="update">
                ACTUALIZAR ESTADO DE LA CITA
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>

