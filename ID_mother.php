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

    <title>ID</title>
  </head>
  <body>

    <form  method="post" action="register_id.php">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="steps.php">Steps</a></li>
            <li class="breadcrumb-item active" aria-current="page">ID_Mother</li>
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
              <form action="Data.php">
                <div class="mb-3">
                  <br><br>
                  <label for="ID_Mother" class="form-label">Please enter mother's ID</label>
                  <input type="text" name="id_mother" class="form-control" id="NID" aria-describedby="ID_Mother" onchange="validationID()" required>
                  <div  id="errror" class="form-text"></div>
                </div> 
                <button type="submit"  class="btn btn-primary btn-lg"  id="activated" style="display: block;"> Enters</button>
                <br><br>
              </form>
            </div>
          </div>
        </div>
        <br>
        <br>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>  
    <script src="js/bootstrap.js" ></script>
    <script src="js/script.js"></script>  -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="ID_Validation.js">

    </script>
    </form>
  </body>
</html>