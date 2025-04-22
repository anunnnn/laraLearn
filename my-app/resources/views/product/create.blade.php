<form action='{{ route('product.store') }}' method='POST'>
    @csrf
    <div>
        {{-- Product Name --}}
        <label for='name'> Product Name </label>
        <input type='text' name='name' id='name' required >
    </div>
    <div>
        {{-- Product description --}}
        <label for='description'> Description </label>
        <textarea id='description' name='description'></textarea> 
    </div>

    <div>
        {{-- Price --}}
        <label for='price'> Price </label>
        <input type='number' id='price' name='price' required>
    </div>

    <div>
        {{-- Quantity --}}
        <label for='quantity'> Quantity </label>
        <input type='number' id='quantity' name='quantity' value='0'>
    </div>

    <div>
        {{-- Category Id --}}
        <label for='category_id'> Category </label>
        <input type='number' id='category_id' name='category_id' required >
    </div>

    <div>
        {{-- Submit Button --}}
        <label for='submit'> Click this to Submit </label>
        <button type='submit'> Submit </button>
    </div>
</form>