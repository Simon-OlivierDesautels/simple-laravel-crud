<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create a product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="qty">qty</label>
            <input type="number" name="qty">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description">
        </div>
        <div><input type="submit" value="Save a new product"></div>
    </form>
</body>

</html>
