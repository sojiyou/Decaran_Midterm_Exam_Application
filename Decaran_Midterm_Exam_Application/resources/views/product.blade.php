<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td> {{ $product['name'] }} </td>
            <td> {{ $product['price'] }} </td>
            <td> {{ $product['category'] }} </td>
        </tr>
        @endforeach
    </table>

    <a href="/">Home Page</a>
</body>
</html>