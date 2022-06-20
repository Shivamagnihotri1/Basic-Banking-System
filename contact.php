
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
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

<div class="back__">
<a href="index.php"><button align="right" style="background-color : #5361FF ; margin-top: 50px;">Back</button></a>
</div>


<!--===== CONTACT =====-->
<section class="contact section" id="contact" >
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h4 class="contact__subtitle">EMAIL</h4>
                        <span class="contact__text">shivam9611@gmail.com</span>
                        <br><br>
                        <h6 class="contact__subtitle">PHONE</h6>
                        <span class="contact__text">9348******</span>
                        <br><br>
                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">Rourkela, Odisha, India</span>
                        <br><br>
                        <div class="about__social">
                            <a href="https://www.linkedin.com/in/jagannath-pal-a26403178" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://github.com/Jagannath8" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="https://www.instagram.com/_jagannath_08/" class="about__social-icon"><i class='bx bxl-instagram' ></i></a>
                            <a href="" class="about__social-icon"><i class='bx bxl-youtube' ></i></a>

                        </div>


                    </div>


                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder="Name" class="contact__input">
                            <input type="mail" placeholder="Email" class="contact__input">
                        </div>

                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="submit" value="Send" class="contact__button">
                    </form>
                </div>
            </section>
        </main>


            <?php
          include 'footer.php';
      ?>
<link rel="stylesheet" type="text/css" href="css/footer.css">


      
  </body>
</html>