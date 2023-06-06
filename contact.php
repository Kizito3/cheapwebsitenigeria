<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheap Website Nigeria</title>
    <link rel="icon" href="./asset/images/Cheap Website Logo White 1.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
       <?php
            include("include/nav.php");
        ?>
<div class="inner-banner">
                <section class="w3l-breadcrumb">
                    <div class="container">
                        <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Contact Us</h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Contact Us</li>
                        </ul>
                    </div>
                </section>
        </div>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5 pt-5">
                        <h3>Send us a message</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="form mb-5">
        <form action="proc_contact.php" method="post" enctype="multipart/form-data">
           <div class="container">
            <div class="row">
            <?php
                                
                                if($_GET['succ'] == 'yes') {
                                    echo '<div class="alert alert-success">Your message has been sent. One of our representatives would contact you.</div>' ;
                                    // exit;
                                }

                                if($error)
                                {
                                echo '<div class="alert alert-danger">'.$error.'</div>' ;
                                }

                                ?>
                <div class="col-md-6">
                <p class="mt-5">You Can Get In Touch With The Details Below</p>
                    <input type="text" class="mb-4" placeholder="Name" name="fname" required>
                    <input type="email" class="mb-4" placeholder="Email" name="email" required>
                    <input type="text" class="mb-4" placeholder="Phone number" name="phone" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="mb-4" name="company" placeholder="Company name">
                    <select name="plan" class="mb-4" id="">
                        <option value="">Choose plan</option>
                        <option>Starter plan</option>
                        <option>Pro Plan</option>
                        <option>Premium Plan(recommended)</option>
                    </select>
                    <textarea id="" cols="30" name="message" rows="10"></textarea>
                    <input type="submit" class="submit mt-4" value="SEND">
                </div>
            </div>
           </div>
         </form>
        </section>
        <section>

        <div class="container">
            <div class="row left1">
                <div class="col-md-2">
                <i class="fa-solid fa-phone-volume"></i><span>Phone</span><p>09034345678</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                <i class="fa-brands fa-instagram"></i><span>Instagram</span><p>cheapwebsitenigeria</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1">
                <i class="fa-solid fa-envelope"></i><span>Email</span><p><a href="mailto:info@cheapwebsitenigeria.com">info@cheapwebsitenigeria.com</a></p>
                </div>
            </div>
        </div>


    <div class="container mt-5 pt-5">
    <div class="row get-in-touch mb-5 mt-5">
                    <div class="col-md-5">
                        <div class="question">
                            <h5>Still have questions?</h5>
                            <p>Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
                        </div>
                    </div>
                        <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div class="get-btn mt-3">
                        <a href="https://wa.me/message/WAIHT7P7TID5H1"><button>Get in touch</button></a>
                        </div>
                    </div>
                </div>
    </div>
  </section>

<?php
include("include/footer.php");
?>

        <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="js/scrpt.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>