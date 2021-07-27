<style>
    .mercadopago-button
    {
        width: 100%;
        height: 45px;
        background-image: url("/assets/payments/Mercadopago-logo.svg");
        background-repeat: no-repeat;
        background-position: 50% 50% !important;
        background-size: 30%;
        background-color: #009ee3;

        text-shadow: transparent;
        color: transparent;
        text-decoration: none;
    }
    .mercadopago-button:hover
    {
        background-color: rgba(0, 125, 179, 0.7);
    }
</style>
<div>
        @php
            // SDK de Mercado Pago
            require base_path('vendor/autoload.php');
            // Agrega credenciales
            MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

            // Crea un objeto de preferencia
            $preference = new MercadoPago\Preference();

            $shipments = new MercadoPago\Shipments();

            $shipments->cost = $order->shipping_cost;
            $shipments->mode = "not_specified";

            $preference->shipments = $shipments;

            // Crea un ítem en la preferencia
            foreach ($items as $product) {
                $item = new MercadoPago\Item();
                $item->title = $product->name;
                $item->quantity = $product->qty;
                $item->unit_price = $product->price;

                $products[] = $item;
            }
            $preference->back_urls = array(
                "success" => route('orders.pay', $order),
                "failure" => "http://www.tu-sitio/failure",
                "pending" => "http://www.tu-sitio/pending"
            );
            $preference->auto_return = "approved";

            $preference->items = $products;
            $preference->save();
        @endphp
        {{--<script src="https://checkout.culqi.com/js/v3"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}


        <div class="grid grid-cols-5 gap-6 container py-8">
            <div class="col-span-3">
                <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
                    <p class="text-gray-700 uppercase"><span class="font-semibold">Número de orden: </span> Orden - {{$order->id}}</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <div class="grid grid-cols-2 gap-6 text-gray-700">
                        <div>
                            <p class="text-lg font-semibold uppercase">Envio</p>
                            @if ($order->envio_type == 1)
                                <p class="text-sm">Los productos deben ser recogidos en tienda </p>
                                <p class="text-sm">Calle Felipe Durand #136</p>
                            @else
                            <p class="text-sm">Los productos serán enviados a: </p>
                            <p class="text-sm">{{$envio->address}}</p>
                            <p>{{$envio->department}} - {{$envio->city}} - {{$envio->district}}</p>
                            @endif
                        </div>
                        <div>
                            <p class="text-lg font-semibold uppercase">Datos de contacto</p>
                            <p class="text-sm">Persona que recibira el producto: {{$order->contact}}</p>
                            <p class="text-sm">Teléfono de contacto: {{$order->phone}}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 mb-6 text-gray-700 mb-6">
                    <p class="text-xl font-semibold mb-4">Resumen</p>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Precio</th>
                                <th>Cant</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <img class="h-15 w-20 object-cover mr-4"
                                             src="{{ Str::replaceArray('http://localhost', [''], $item->options->image) }}" alt="">
                                             <article>
                                                 <h1 class="font-bold">{{$item->name}}</h1>
                                                 <div class="flex text-xs">
                                                     @isset ($item->options->color)
                                                         Color: {{$item->options->color}}
                                                     @endisset

                                                     @isset ($item->options->size)
                                                         - {{$item->options->size}}
                                                     @endisset
                                                 </div>
                                             </article>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        S/ {{$item->price}}
                                    </td>
                                    <td class="text-center">
                                        {{$item->qty}}
                                    </td >
                                    <td class="text-center">
                                        S/ {{$item->price * $item->qty}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


            </div>
            <div class="col-span-2">
                <div class="bg-white rounded-lg shadow-lg px-6 pt-6">
                    <div class="flex justify-between items-center mb-4">
                        <img class="h-8" src="{{ asset('img/pagos2.png')}}" alt="">
                        <div class="text-gray-700">
                            <p class="text-sm font-semibold ">
                                Subtotal: S/ {{$order->total - $order->shipping_cost}}
                            </p>
                            <p class="text-sm font-semibold ">
                                Envio: S/ {{$order->shipping_cost}}
                            </p>
                            <p class="text-lg font-semibold ">
                                Total: S/ {{$order->total}}
                            </p>
                        </div>
                    </div>
                    <div class="cho-container text-center py-3" style="width: 100%;">

                        <!--<button type="submit" class="mercadopago-button" formmethod="post"  style="width: 100%;">Pagar</button>-->
                    </div>
                    {{--<div id="paypal-button-container"></div>--}}
                    {{--<div>
                        <x-jet-button id="buyButton" class="w-full justify-center">
                            Pagar con Tarjeta de Crédito o Débito
                        </x-jet-button>
                    </div>--}}
                </div>
            </div>
        </div>
        <script src="https://sdk.mercadopago.com/js/v2"></script>

        <script>

              const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                    locale: 'es-AR'
              });


              mp.checkout({
                  preference: {
                      id: '{{ $preference->id }}'
                  },
                  render: {
                        container: '.cho-container',
                        label: 'Pagar', }
            });

        </script>
        @push('script')



        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id')}}">
        </script>

            <script>
                paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                    purchase_units: [{
                        amount: {
                        value: '{{$order->total}}'
                        }
                    }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {

                        Livewire.emit('payOrder');

                    /*console.log(details);
                    alert('Transaction completed by ' + details.payer.name.given_name);*/
                    });
                }
                }).render('#paypal-button-container'); // Display payment options on your web page
        </script>


    @endpush




</div>
