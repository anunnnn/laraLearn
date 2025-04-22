<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}" required>
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}">
    </div>
    <div>
        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" value="{{ old('category_id', $product->category_id) }}">
    </div>

</form>