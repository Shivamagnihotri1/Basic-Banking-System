<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color: #fd9ecd">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                <h2 style = "color :black; margin-bottom:40px; ">Basic Banking System </h2>
                  <h3>Welcome to</h3>
                  <h1 style = "color :#096a06; ">SPARK BANK</h1>

                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2"  style ="height : 300px;"><br><br>
              </div>
      </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="background-color : #fcfc54">
                  <div class="col-md act">
                    <img src="img/create.png" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #5361FF ; margin-top: 50px;">Create a User</button></a>
                    <br><br><br>
                  </div>
                  <div class="col-md act">
                    <img src="img/transac.png" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #5361FF ; margin-top: 50px; ">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/tranhist.png" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #5361FF ; margin-top: 50px;">Transaction History</button></a>
                  </div>
            </div>
      </div>


      <?php
          include 'footer.php';
      ?>
<link rel="stylesheet" type="text/css" href="css/footer.css">


      
  </body>
</html>