<?php
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-3 col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Admin - Login</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Enter email" name="email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                   name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

</div>
</body>
</html>
