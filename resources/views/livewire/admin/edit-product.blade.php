<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Productos
                </h1>

                <x-jet-danger-button wire:click="$emit('deleteProduct')">
                    Eliminar
                </x-jet-danger-button>
            </div>
        </div>
    </header>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">
        <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para modificar el producto</h1>

        <div class="mb-4" wire:ignore>
            <form action="{{ route('admin.products.files', $product) }}" method="POST" class="dropzone" id="my-awesome-dropzone">
            </form>
        </div>

        @if ($product->images->count())
            <section class="bg-white shadow-xl rounded-lg p-6 mb-4">
                <h1 class="text-2xl text-center font-semibold mb-2">Imágenes del Producto</h1>

                <ul class="flex flex-wrap">
                    @foreach ($product->images as $image)
                        <li class="relative" wire:key="image-{{$image->id}}">
                            <img class="w-32 h-20 object-cover" src="{{ '/storage/' . $image->url }}" alt="">
                            <x-jet-danger-button class="absolute right-2 top-2" wire:click="deleteImage({{$image->id}})" wire:loading.attr="disabled" wire:target="deleteImage({{$image->id}})">
                                X
                            </x-jet-danger-button>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif

        @livewire('admin.status-product', ['product' => $product], key('status-product-' . $product->id))

        <div class="bg-white shadow-xl rounded-lg p-6">
            <div class="grid grid-cols-2 gap-6 mb-4">

                {{--Categoria--}}
                <div>
                    <x-jet-label value="Categorias"/>
                    <select class="w-full form-control" wire:model="category_id">
                        <option value="" select disabled>Seleccione una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                    </select>
                    <x-jet-input-error for="category_id"/>
                </div>
                {{--Subcategoria--}}
                <div>
                    <x-jet-label value="Subcategorias"/>
                    <select class="w-full form-control" wire:model="product.subcategory_id">
                        <option value="" select disabled>Seleccione una subcategoria</option>

                            @foreach ($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                            @endforeach

                    </select>
                    <x-jet-input-error for="product.subcategory_id"/>
                </div>
            </div>
            {{--Nombre--}}
            <div class="mb-4">
                <x-jet-label value="Nombre"/>
                <x-jet-input type="text"
                            class="w-full"
                            wire:model="product.name"
                            placeholder="Ingresa el nombre del producto"/>
                            <x-jet-input-error for="product.name"/>
            </div>
            {{--slug--}}
            <div class="mb-4">
                <x-jet-label value="Url"/>
                <x-jet-input type="text"
                            disabled
                            wire:model="slug"
                            class="w-full bg-gray-200"
                            placeholder="Ingrese la url del producto"/>
                            <x-jet-input-error for="slug"/>
            </div>

            {{--descripcion--}}
            <div class="mb-4" >
                <div wire:ignore>
                    <x-jet-label value="Descripción"/>
                    <textarea class="w-full form-control" rows="4"
                        wire:model="product.description"
                        x-data
                        x-init="ClassicEditor
                        .create( $refs.miEditor )
                        .then(function(editor){
                            editor.model.document.on('change:data',() =>{
                            @this.set('product.description',editor.getData())
                            })
                        })
                        .catch( error => {
                            console.error( error );
                        } );"
                        x-ref="miEditor"></textarea>
                </div>
                <x-jet-input-error for="product.description"/>
            </div>
            <div class=" grid grid-cols-2 gap-6 mb-4">
                {{--marca--}}
                <div>
                    <x-jet-label value="Marca"/>
                    <select class="form-control w-full" wire:model="product.brand_id">
                        <option value="" selected disabled>Seleccione una marca</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="product.brand_id"/>
                </div>
                {{--precio--}}
                <div>
                    <x-jet-label value="Precio"/>
                    <x-jet-input
                            wire:model="product.price"
                            type="number"
                            class="w-full"
                            step=".01"/>
                            <x-jet-input-error for="product.price"/>
                </div>
            </div>


            @if ($this->subcategory)
                @if (!$this->subcategory->color && !$this->subcategory->size)
                    <div>
                        <x-jet-label value="Cantidad"/>
                        <x-jet-input
                                wire:model="product.quantity"
                                type="number"
                                class="w-full" />
                                <x-jet-input-error for="product.quantity"/>
                    </div>
                @endif
            @endif

            <div class="flex justify-end  items-center mt-4">

                <x-jet-action-message class="mr-3" on="saved">
                    Actualizado
                </x-jet-action-message>
                <x-jet-button
                    wire:loading.attr="disabled"
                    wire:target="save"
                    wire:click="save">
                    ACTUALIZAR PRODUCTO
                </x-jet-button>
            </div>
        </div>

        @if ($this->subcategory)
            @if ($this->subcategory->size)
                @livewire('admin.size-product', ['product' => $product], key('size-product-'. $product->id))
            @elseif($this->subcategory->color)
                @livewire('admin.color-product', ['product' => $product], key('color-product-'. $product->id))
            @endif
        @endif
    </div>

    @push('script')
        <script>
            Dropzone.options.myAwesomeDropzone = {
                headers: {
                    'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                },
                dictDefaultMessage: "Arrastre una imagen al recuadro",
                acceptedFiles: 'image/*',
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                complete: function (file) {
                    this.removeFile(file);
                },
                queuecomplete: function () {
                    Livewire.emit('refreshProduct');
                }
            };

            Livewire.on('deleteProduct', () => {
                Swal.fire({
                    title: '¿Está seguro de eliminar?',
                    text: "¡No puede revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar',
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.edit-product', 'delete');

                        Swal.fire(
                            '¡Eliminado!',
                            'El producto ha sido eliminado',
                            'success'
                        );
                    }
                });
            });

            Livewire.on('deleteSize', sizeId => {
                Swal.fire({
                    title: '¿Está seguro de eliminar?',
                    text: "¡No puede revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar',
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.size-product', 'delete', sizeId);

                        Swal.fire(
                            '¡Eliminado!',
                            'La talla ha sido eliminada',
                            'success'
                        );
                    }
                });
            });

            Livewire.on('deletePivot', pivot => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podras revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Eliminar!',
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-product', 'delete', pivot);
                        Swal.fire(
                            '¡Eliminado!',
                            'El color ha sido eliminado',
                            'success'
                        );
                    }
                });
            });

            Livewire.on('deleteColorSize', pivot => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podras revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Eliminar!',
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.color-size', 'delete', pivot);
                        Swal.fire(
                            '¡Eliminado!',
                            'El color ha sido eliminado',
                            'success'
                        );
                    }
                });
            });
        </script>
    @endpush
</div>