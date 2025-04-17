<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new product</title>
</head>

<body>
    <center>
        <br>
        <h1>Create a new product</h1>
        <form action="/insert" method="post">
            @csrf
            <label for="">Product name</label>
            <input type="text" name="pname">
            <br>
            <label for="">Product price</label>
            <input type="number" name="pprice">
            <br><br>
            <button type="submit">Save product</button>
        </form>
    </center>
</body>

</html>
