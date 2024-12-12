@foreach($products as $product)
    <h2>{{ $product->name }}</h2>
    <img src="{{ asset('images/' . $product->image) }}" width="150" />
    <p>{{ $product->price }} VND</p>
    <a href="{{ route('products.edit', $product->id) }}"><button>Sửa</button></a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Xóa</button>
    </form>
@endforeach