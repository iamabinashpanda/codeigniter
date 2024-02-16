<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container col-md-4">
        <div class="jumbotron bg-primary m-2"><h1 class="display-4 text-center"><b>Admin-Login</b></h1></div>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="checkbox my-2">
                Don't have an account ? <a class="text-primary" href="<?=base_url()?>signup">Sign-Up</a> here.
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me.</label>
            </div>
            <button type="submit" class="form-control btn-primary">Login</button>
        </form>
    </div>
</body>

</html>