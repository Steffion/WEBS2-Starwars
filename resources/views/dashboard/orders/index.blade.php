<h2>{{ $title }}</h2>

<ul>
    @foreach($orders as $order)
        <li>
            Order number: {{ $order->id }}
            <ul>
                @foreach($order->products as $product)
                    <li>{{ $product->name }} x{{ $product->pivot->quantity }}</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>