<p>Уважаемый {{$name}}</p>

<p>@lang('mail.order_created.your_order') {{$fullSum}} @lang('mail.order_created.created')</p>

<table>
    <thead>
    <tr>
        <th>@lang('product.name')</th>
        <th>@lang('product.amount')</th>
        <th>@lang('product.price')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <td>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                    <img height="56px" src="{{ Storage::url($product->image) }}">
                    {{ $product->__('name') }}
                </a>
            </td>
            <td><span class="badge">{{ $product->pivot->count }}</span>
                <div class="btn-group form-inline">
                    {!! $product->__('description') !!}
                </div>
            </td>
            <td>{{ $product->price }} @lang('main.rub').</td>
            <td>{{ $product->getPriceForCount() }} @lang('main.rub').</td>
        </tr>
    @endforeach
    </tbody>
</table>
