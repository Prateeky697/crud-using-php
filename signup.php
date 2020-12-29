<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>signup</title>
</head>

<body> <?php require "partialForm\_navbar.php"; ?> <?php 
require "partialForm\dbconnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $showalert=false;
    $showerror=false;
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    if($password==$cpassword)
    {
        $query="INSERT INTO `userdata` (`username`, `password`, `datatime`) VALUES ('$username', '$password', current_timestamp())";
        $result=mysqli_query($conn,$query);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>your data!</strong> has been succesfully saved.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }else{
            // $showerror=ture;
        }
    }else
    {
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>your data!</strong>password is not match
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }

}

?> <div class="container"> <?php 
// if($showalert){
//     echo '<div class="alert alert-success" role="alert">
// your data has been succesful enterd
// </div>';
// }

?> <div class="row mt-4">
            <div class="col-4 m-auto ">
                <h2>SignUp form</h2>
                <form action=signup.php method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                            placeholder="Enter email" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword"
                            placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
