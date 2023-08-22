<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Product</h1>
    <a href="{{ route('product.create') }}">Create product</a>
    <div>
        <table border="2">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td><a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('product.delete', ['product' => $product]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
