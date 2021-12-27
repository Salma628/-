<?php
    session_start();
    if(empty($_SESSION["id_mother"])){
        header("location: ID_mother.php");
        exit;

    }
?>
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

    <title>Data</title>
  </head>
  <body>


    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="steps.php">Steps</a></li>
            <li class="breadcrumb-item"><a href="ID_mother.php">ID_Mother</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
    </div>

    <div class="row"></div>
        <div class="container" style="height: 100%; border:blue solid 2px;" >
            <div class="row" >
                <div class="col-4 ">
                  <img src="login_form.PNG" alt="login form" width="100%" style="height: 100%;" >
                </div>
                <div class="col-8" dir="rtl">
                    <div class="row">
                        <br><br>
                        <div class="col-4 mb-3">
                            <label for="Mother's ID" class="form-label">الرقم القومى الأم</label>
                            <span class="d-block p-2 bg-danger text-white" id="Mother's ID"><?php echo $_SESSION["id_mother"];?></span>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="Name" class="form-label">اسم الطفل</label>
                            <span class="d-block p-2 bg-danger text-white" id="Name"><?php echo $_SESSION["child_name"];?></span>
                        </div> 
                        <div class="col-4 mb-3">
                            <label for="mother_name" class="form-label">اسم الأم</label>
                            <span class="d-block p-2 bg-danger text-white" id="mother_name"><?php echo $_SESSION["mother_name"];?></span>
                        </div> 
                        
                    </div>  
                    <br><br>
                    <div class="row">
                        <br><br>
                        <div class="col-4 mb-3">
                            <label for="Date" class="form-label">تاريخ الاحالة</label>
                            <span class="d-block p-2 bg-danger text-white" id="Date"><?php echo $_SESSION["Date"];?></span>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="Hospital" class="form-label">اسم المستشفى</label>
                            <span class="d-block p-2 bg-danger text-white" id="Hospital"><?php echo $_SESSION["hospital_name"];?></span>
                        </div> 
                        <div class="col-4 mb-3">
                            <label for="Unit_Number" class="form-label">اسم الوحده</label>
                            <span class="d-block p-2 bg-danger text-white" id="Unit_Number"><?php echo $_SESSION["name"];?></span>
                        </div>  
                    </div>
                    <br><br>
                    <div class="row">
                        <br><br>
                        <div class="col-4 mb-3">
                            <label for="phone" class="form-label">رقم الموبايل</label>
                            <span class="d-block p-2 bg-danger text-white" id="phone"><?php echo $_SESSION["phone"];?></span>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="Birth_Date" class="form-label">تاريخ الميلاد</label>
                            <span class="d-block p-2 bg-danger text-white" id="Birth_Date"><?php echo $_SESSION["Birth_Date"];?></span>
                        </div> 
                        
                    </div> 
                    <br><br> 
                    <div class="row">
                            <form action="tests.php">
                                <button type="submit" class="btn btn-primary btn-lg">ادخال البيانات</button>
                                <br><br>
                            </form>
                    </div>
                    
                  <!--   ___________________________________________________________________   -->
                </div>
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
  </body>
</html>