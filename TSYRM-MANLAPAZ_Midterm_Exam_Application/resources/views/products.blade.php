<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid black; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Product List</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Price ($)</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['brand'] }}</td>
            <td>${{ number_format($product['price'], 2) }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>