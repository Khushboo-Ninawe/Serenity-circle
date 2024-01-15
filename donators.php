<?php
include('database.php');
$query="SELECT * FROM serenity";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/png" sizes="18x18">
    <title>Serenity-Circle</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!--Google Fonts Ico-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--AOS CDN-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

</head>

<body>

<body style="background-color:rgb(76, 65, 160);">

    <section id="navbar">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll" style="background-color: rgb(236, 236, 236); margin-top: -3px;">
            <div class="container" style="margin-bottom: -7px">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" height="53" width="63" alt="logo" loading="lazy" style="margin-top: -1px;"> 
                    <font face="Bradley Hand ITC" class="ab"><b>Serenity Circle</b></font>
                </a>
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active hover" aria-current="page" style="color: rgb(0, 67, 129);" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hover" style="color: rgb(0, 67, 129);" href="#">Join Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hover" style="color: rgb(0, 67, 129);" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link hover" style="color:#115723;" href="donate.html">
                            <i class="fas fa-hand-holding-heart" height="5" width="5"> Donate</i>
                        </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- Navbar -->
    </section>

    <section id="header">
        <div style="margin-top:70px; background-image: url(images/donatebg.jpg); height:130px;">
            <center><div style="height: 40px;"></div>
                <h1 style="font-family:serif; color:white">DONATORS</h1>

            </center>
        </div>
    </section>

    <section id="table" data-aos="flip-up">
        <div class="container">
            <center>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <table class="table table-sm mt-3" style="background-color: rgb(76, 65, 160); width: 100%">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">City</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <th scope="row" class="white"><?php echo $row['ID']; ?></th>
                            <td class="white"><?php echo $row["name"]; ?></td>
                            <td class="white"><?php echo $row["email"]; ?></td>
                            <td class="white"><?php echo $row["city"]; ?></td>
                            <td class="white"><?php echo $row["dob"]; ?></td>
                            <td class="white"><?php echo $row["amount"]; ?></td>
                        </tr>
                    </tbody>
                    <?php
                        $i++;
                        }
                    ?>
                </table>
            
            <?php
            }
            else{
                    echo "No result found";
            }
            ?>
            </center>
        </div>
    </section>

    <section id="joinus">
        <div class="container-fluid" style="background-image: url(images/i.jpg); width: 100%; background-repeat: no-repeat; height: 250px; margin-top: 60px;">
            <div class="container">
                <div style="height: 75px;"></div>
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    
                        <h3 style="font-family:'Times New Roman', Times, serif; color:rgb(26, 79, 192); font-weight: bold; word-spacing: 4px;">JOIN US AND BECOME A VOLUNTEER<br><br>
                        <a class="button" href="#">JOIN US</a></h3>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid" style="height: 100%;">
            <center>
                <div style="height: 70px;"></div>
            <div class="container donatef" data-aos="zoom-in" data-aos-duration="2000">
                Serenity Circle Is An Organization Which Help Peoples Who Are Fighting With 
                Depression, Anxiety, Insecurity, Loneliness And Other Mental Issues,
                We Are Ready To Help You 24 X 7 Hours. Just Contact Us.
            </div>
            <div style="height: 70px;"></div>
            </center>
        </div>
    </section>

    <section id="contact">
        <div class="fluid-container contact-bg">
            <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col" style="align-items: center;">
                    <div class="container" style="align-items: center;">
                        <h2 style="font-family:serif; font-weight: 700; color: rgba(0, 26, 22, 0.562);">
                            <i class="far fa-envelope"></i> Send Us Your Query
                        </h2> <br>
                        <font style="font-size:18px; font-weight: 800; color: rgba(0, 26, 22, 0.562);">
                            <div>
                                <i class="fas fa-angle-right"></i>  Address : Serenity-Circle, Nagpur, Maharshtra<br>
                                <span> Pin-Code - 44008</span>
                            </div><br>
                            <div>
                                <i class="fas fa-angle-right"></i>  E-mail : serenitycircle153@gmail.com
                            </div><br>
                            <div>
                                <i class="fas fa-angle-right"></i>  Contact : +91 9665560085
                            </div>
                        </font>
                    </div>
                </div>
                <div class="col" style="margin-top: 20px;">
                    <div class="container">
                        <div style="float: inline-end;">
                        <form class="contact">
                            <div class="row">
                                <div class="col">
                                    <label for="fname" class="form-label ctext">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="lname" class="form-label ctext">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last name" aria-label="Last name">
                                </div>
                            </div>
                    
                            <div class="mt-1">
                                <label for="exampleFormControlInput1" class="form-label ctext">Email Address :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mt-1">
                                <label for="exampleFormControlTextarea1" class="form-label ctext">Message :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="mb-0" style="margin-top: 15px;">
                                <input type="button" class="sendbutton" value="Send Message"></a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" style="background-color:darkslateblue; color: white; height: 100%;">
        <div style="height: 6px;"></div>
        <center>
            <div class="container">
                Copyright © Khushboo Ninawe
            </div>
        </center>
    </div>

</body>

<script>
    AOS.init({
        duration: 1200,
    })
</script>
</html>

</body>
</html>