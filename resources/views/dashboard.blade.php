<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            {{-- <a href="" class="navbar-brand">LOGO</a> --}}
            <ul class="navbar-nav" style="margin-left: 300px">
                <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li><a href="{{ route('transation') }}" class="nav-link">Sale_transaction</a></li>
                <li><a href="{{ route('addProduct') }}" class="nav-link">Add_Product</a></li>
                <li><a href="{{ route('sellProduct') }}" class="nav-link">Sell_Product</a></li>
                <li><a href="{{ route('updateProduct') }}" class="nav-link">Update_Product</a></li>

            </ul>


    </nav>



    @yield('body')

</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-Gn5384XdvEe5tLT10PZnhqYOhEp1yOWgDR3eZLZBfE=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iK7ZZZGUExZlMJSVa8h9I1LUM4MRAF/NBpGQ8U5zDfl...qpX/BlOtbB1p" crossorigin="anonymous"></script>

</body>
</html>
