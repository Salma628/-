<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src="Capture.PNG" class="img-thumbnail" alt="مبادرة رئيس الجمهورية لعلاج ضعف السمع">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  


  <body>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"  aria-current="page">Home</a></li>
        </ol>
      </nav>
    </div>

    <div class="row"></div>
      <div class="container" style="height: 100%; border:blue solid 2px;" >
        <div class="row">
          <div class="col-4 ">
            <img src="login_form.PNG" alt="login form" width="100%" style="height: 100%;" >
          </div>
          <div class="col-8" >
            <form name="login" action="" method="POST">
              <br>
              <div class="mb-3">
                <label for="user" class="form-label">USER</label>
                <input type="text" name="user" class="form-control" id="user" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              
                <button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>
                <br><br>
            </form>
          </div>
        </div>
      </div>
      <br>
      <br>
      
  

      <?php
          session_start();
          $email="";
          $user="";
          $password="";
          require_once "connection.php";
          if(isset($_POST['login'])) 
          {
              $user =$_POST['user'];
              /*$email = $_POST['username'];*/
              $password=$_POST['password'];
              
              $stmt = "SELECT m FROM display_data WHERE USER='$user' and PASSWORD='$password' limit 1";
              $query=mysqli_query($conn, $stmt) or die("error:".mysqli_error($conn));
                  if(mysqli_num_rows($query)== 1){  
                      /*$_SESSION["username"]= $email;*/
                      header("location: steps.php");    
                  }
                  else{
                      $error = "username or password didn't match";?>
                      <div class="row">
                        <div class="col-1">

                        </div>
                        <div class="col-4 badge bg-danger text-wrap  fs-5" style="width: 25rem;">
                        <?php echo $error; ?>
                        </div>
                      </div>
                      <?php 

                  }    
          }
          elseif($user =="" && $password == ""){
            
              /*echo "Please, Enter your Username and Password....";*/
          }

      ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>  
    <script src="js/bootstrap.js" ></script>
    <script src="js/script.js"></script>   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


