<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Small Table</h2>
    <p>The .table-sm class makes the table smaller by cutting cell padding in half:</p>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>remove</th>
            <th>update</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->qty}}</td>
            <td>{{number_format($item->subtotal(0))}}</td>
            <td><a href="/product/remove/{{$item->rowId}}">
                    remove
                </a></td>
            <td>
                <form action="">
                    <input type="number" value="{{$item->qty}}">
                    <button type="submit"> update</button>

                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td>{{number_format(\Gloudemans\Shoppingcart\Facades\Cart::total())}}</td>
        </tr>
        </tbody>

    </table>

</div>

</body>
</html>
