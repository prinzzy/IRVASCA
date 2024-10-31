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
        <td>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td> <!-- Format price in Rupiah -->
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
    <p><span>Sub Total</span> Rp{{ number_format($subtotal, 0, ',', '.') }}</p> <!-- Format subtotal in Rupiah -->
    <p><span>Total</span> Rp{{ number_format($total, 0, ',', '.') }}</p> <!-- Format total in Rupiah -->
</div>

<div class="cart-button">
    <button id="checkoutButton" type="button" class="btn btn-primary" style="background-color: #b3aa9b; border-color: #b3aa9b;">
        Checkout
    </button>
</div>