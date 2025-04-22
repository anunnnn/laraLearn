<table border='1' cellspacing='1'>
    <thead>
        <tr>
            <th> Product ID</th>
            <th> Name </th>
            <th> Description </th>
            <th> Price </th>
            <th> Quantity </th>
            <th> Category </th>
            <th> Created At </th>
            <th> Updated At </th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $products as $product )
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }} </td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>
                    <a href='{{ route('product.edit', $product['id']) }}'> Edit </a>

                    
                    <button >
                        <a href='{{ route('product.show', $product['id']) }}'> View </a>
                    </button>
                    

                    <form action='{{ route('product.destroy', $product['id']) }}' method='POST' style='display:inline;'>
                        @csrf
                        @method('DELETE')
                        <button type='submit' onClick="return confirm('Are you sure ?')"> Delete </button>
                    </form>
                        
                </td>
                {{-- <td>{{  $product['category_id'] }}</td> --}}
                <td>{{  $product['created_at']}}</td>
                <td>{{  $product['updated_at']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>