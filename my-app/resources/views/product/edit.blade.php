<form action='{{ route('product.update', $product->id) }}' method='POST'>
    @csrf
    @method('PUT')
    <div>
        {{-- Product Name --}}
        <label for='name'> Product Name </label>
        <input type='text' id='name' name='name' value="{{ old('name', $product->name) }}" required >
    </div>
    <div>
        {{-- Product description --}}
        <label for='description'> Description </label>
        <textarea id='description' name='description' > {{ old('description', $product->description ) }} </textarea> 
    </div>

    <div>
        {{-- Price --}}
        <label for='price'> Price </label>
        <input type='number' id='price' name='price' value="{{ old('price', $product->price) }}" required>
    </div>

    <div>
        {{-- Quantity --}}
        <label for='quantity'> Quantity </label>
        <input type='number' id='quantity' name='quantity' value='{{ old('quantity', $product->quantity ) }}'>
    </div>

    <div>
        {{-- Category Id --}}
        <label for='category_id'> Category </label>
        <input type='number' id='category_id' name='category_id' value="{{ old('category_id', $product->category_id ) }}" required >
    </div>

    <div>
        {{-- Submit Button --}}
        <label for='submit'> Click this to Update </label>
        <button type='submit'> Update </button>
    </div>
</form>