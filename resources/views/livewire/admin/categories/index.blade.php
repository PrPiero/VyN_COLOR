<x-admin-layout>

    <div class="container py-12">
        @livewire('admin.create-category')
    </div>

    @push('script')
        <script>
            Livewire.on('deleteCategory', categorySlug => {
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

                        Livewire.emitTo('admin.create-category', 'delete', categorySlug)

                        Swal.fire(
                        '¡Eliminado',
                        'La categoría ha sido eliminada',
                        'success'
                        );
                    }
                });
            });
        </script>
    @endpush
</x-admin-layout>
