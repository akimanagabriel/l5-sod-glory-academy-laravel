<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1>{{ $user }}</h1> --}}
    <center>
        <h1>All products</h1>

        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Date create</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </center>
</body>

</html>
