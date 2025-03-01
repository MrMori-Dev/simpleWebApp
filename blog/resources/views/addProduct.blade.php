<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="rForm" action="{{route("product.create")}}" method="post">
                @csrf
                <h2 class="text-center">Insert Product</h2>
                <input type="text" class="form-control" name="productTitle" placeholder="Enter product Title:">
                <button type="submit" value="SUBMIT" class="btn btn-success btn-block">Add</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
