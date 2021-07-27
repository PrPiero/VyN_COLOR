<div class="mt-4">
    <div class="bg-gray-100 shadow-lg rounded-lg p-6">
        {{--Color--}}
        <div class="mb-6">
            <x-jet-label>
                Color
            </x-jet-label>
            <div class="grid grid-cols-6 gap-6">
                @foreach ($colors as $color)
                    <label>
                        <input type="radio" wire:model.defer="color_id" name="color_id" value="{{$color->id}}">
                        <span class="ml-2 text-gray-700 capitalize">
                            {{$color->name}}
                        </span>
                    </label>
                @endforeach
            </div>
            <x-jet-input-error for="color_id"/>
        </div>

        {{--Cantidad--}}
        <div>
            <x-jet-label>
                Cantidad
            </x-jet-label>

            <x-jet-input type="number" wire:model.defer="quantity" placeholder="Ingrese una cantidad" class="w-full"/>
            <x-jet-input-error for="quantity"/>
        </div>

        <div class="flex justify-end items-center mt-4">

            <x-jet-action-message class="mr-3" on="saved">
                Agregado
            </x-jet-action-message>
            <x-jet-button wire:loading.attr="disabled" wire:target="save" wire:click="save">
                AGREGAR
            </x-jet-button>
        </div>
    </div>

    @if ($size_colors->count())
        <div class="mt-8">
            <table>
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-1/3 text-center">
                            Color
                        </th>
                        <th class="px-4 py-2 w-1/3 text-center">
                            Cantidad
                        </th>
                        <th class="px-4 py-2 w-1/3 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($size_colors as $size_color)
                        <tr wire:key="size_color-{{$size_color->pivot->id}}">
                            <td class="capitalize px-4 py-2 text-center">
                                {{ __($colors->find($size_color->pivot->color_id)->name) }}
                            </td>
                            <td class="px-4 py-2 text-center">
                                {{$size_color->pivot->quantity}} unidades
                            </td>
                            <td class="px-4 py-2 flex">
                                <x-jet-button class="bg-green-500 hover:bg-green-700 ml-auto mr-2" wire:click="edit( {{$size_color->pivot->id}})" wire:loading.attr="disabled" wire:target="edit( {{$size_color->pivot->id}})">
                                    ACTUALIZAR
                                </x-jet-button>
                                <x-jet-danger-button wire:click="$emit('deleteColorSize', {{$size_color->pivot->id}})">
                                    ELIMINAR
                                </x-jet-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar Colores
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>
                    Color
                </x-jet-label>

                <select class="form-control w-full" wire:model="pivot_color_id">
                    <option value="">Seleccione un color</option>
                    @foreach ($colors as $color)
                        <option value="{{$color->id}}">{{$color->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-jet-label>
                    Cantidad
                </x-jet-label>
                <x-jet-input class="w-full" wire:model="pivot_quantity" type="number" placeholder="Ingrese una cantidad"/>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button class="bg-gray-200 bg-opacity-50 hover:bg-opacity-75" wire:click="$set('open',false)">
                CANCELAR
            </x-jet-button>
            <x-jet-button class="bg-blue-500 hover:bg-blue-600" wire:click="update" wire:loading.attr="disabled" wire:target="update">
                ACTUALIZAR
            </x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
