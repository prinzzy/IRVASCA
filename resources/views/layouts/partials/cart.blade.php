<table>
    @forelse($cartItems as $item)
    <tr>
        <td class="product-thumb">
            <a href="#"><img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" /></a>
        </td>
        <td>
            <a title="{{ $item['name'] }}" href="#">{{ $item['name'] }}</a>
            <p>Size: {{ $item['size'] ?? 'N/A' }}</p> <!-- Display selected size -->
        </td>
        <td>x{{ $item['quantity'] }}</td>
        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
        <td>
            <a class="remove-from-cart-button" data-product-id="{{ $item['product_id'] }}" href="#"><i class="fa fa-close"></i></a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Your cart is empty</td>
    </tr>
    @endforelse
</table>

<div class="sub-total">
    <p><span>Sub Total</span> ${{ number_format($subtotal, 2) }}</p>
    <p><span>Total</span> ${{ number_format($total, 2) }}</p>
</div>

<div class="cart-button">
    <a title="Checkout" href="#">Checkout</a>
</div>