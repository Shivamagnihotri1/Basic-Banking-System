<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/createuser.css"> -->
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

</head>

<body style="background-color : #ff6e4a;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Yeahh...! New User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>








<!--===== FORM =====-->
<section class="user" id="userid">
              <div class="heading"> 
                <h1 align="center" color="white">CREATE USER</h1>
              </div>

                <div class="container bd-grid">
                <div class="screen">
                    <div class="info">
                        <center>
                        <img class="img-fluid" src="img/user.png" height="200" width="200" style="border: none; border-radius: 50%;">
                        </center>
                    </div>
                    
                    
                    
                    
                            <form class="form" method="post">
                              <div class="inputs">
                                <input type="text" placeholder="Name" class="input" name="name" required> <br><br>
                                <input type="email" placeholder="Email" class="input" name="email" required> <br><br>
                                <input type="number" placeholder="Balance" class="input" name="balance" required> <br><br>
                                <input type="submit" value="CREATE" class="button" name="submit">
                              </div>
                            </form>
                    </div>
                </div>
            </section>
        </main>





        <?php
          include 'footer.php';
        ?>



      
      
<!-- <footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>VAISHNAVI WAHILE</b> <br> The Spark Foundation</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->


</body>
</html>