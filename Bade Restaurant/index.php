<?php
require_once "pdo.php";
session_start();
if(isset($_POST['signupName']) && $_POST['signupEmail'] && $_POST['signupPassword']){
    $sql='insert into costumers(Name,Email,Phone,Password) values(:name,:email,:phone,:password)';
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_POST['signupName'],
        ':email'=>$_POST['signupEmail'],
        ':phone'=>$_POST['signupPhone'],
        ':password'=>$_POST['signupPassword']
    ));

    $_SESSION['name']=$_POST['signupName'];
    header('Location:index.php');
    return;
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Healthyfoods.com</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="img/logo.jpg" alt="Logo" class="img-fluid" width="60em"></a>            
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class ="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home "></span>Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span>About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list "></span>Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card"></span>Contact</a></li>
                    </ul>
                    <?php

                        if(isset($_SESSION['name'])){
                            ?>
                            <span class="navbar-text">
                                <a  id="loginModalOpen" role="button">
                                    <span class="fa fa-user-circle fa-lg"></span><?php echo ' '.$_SESSION['name'] ?></a>
                            </span>
                            &nbsp;  &nbsp;
                            <span >
                                    
                             
                <a class="navbar-brand mr-auto" href="logout.php">Logout</a>            
                                      
                            </span>
                            <?php
                    
                        }
                        else{
                            ?>
                            <span class="navbar-text">
                                <a  id="loginModalOpen" role="button">
                                <span class="fa fa-sign-in"></span>Login</a>
                            </span>
                            <?php
                        }
                        ?>
                   
                </div>
            </div>
        </nav>
        <header class="jumbotron mb-0 " id="jumbotron">
           <div class="container">
               <div class="row ">
                   <div class=" mx-auto">
                            <img src="img/logo.jpg" alt="Logo" class="img-fluid" width="150em" style="margin-top: 30px;">
                    </div>
                </div>
                <div class="row ">
                    <div class="mx-auto mt-3 mb-4 " >
                         <div class=" title ">Foodie's</div>
                       
                    </div>
                 </div>
                <div class="row "> 
                    <div class=" mx-auto" >
                            <div class="badge badge-pill welcome ">
                                <div class="welcomeText">
                                    Welcome to Bade's Group of Hospitality
                                </div> 
                            </div>
                     
                    </div>
                </div>
           </div>
        </header>

        <nav class="navbar navbar-dark navbar-expand">
            <div class="container">
                <div class="navtext">
                    We also deliver food to your doorsteps
                    
                </div>
                <a role="button" class="btn   btn-warning"
                    role="button"
                    id="orderModalOpen" ><strong>Order Now</strong>
                </a>
            </div>
        </nav>


    <div class="container">
        <div class="row row-content">
           <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                src="img/restaurant1.jpg" alt="Uthappizza">
                         
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/restaurant2.jpg" alt="buffet">
                                               
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/restaurant3.jpg" alt="alberto">
                                                  
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/restaurant4.jpg" alt="buffet">
                                               
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/restaurant5.jpg" alt="buffet">
                                               
                        </div>
                        <ol class="carousel-indicators  ">
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                            <li data-target="#mycarousel" data-slide-to="3"></li>
                            <li data-target="#mycarousel" data-slide-to="4"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon "></span>
                        </a>
                        <button class="btn btn-danger btn-sm" id="carouselButton" data-toggle="tooltip" data-html="true"  title="Pause"
                            data-placement="bottom">
                            <span class="fa fa-pause"></span>
                        </button>
                        

                    </div>
                </div>

            </div>
       </div>
    </div>
        <nav class="navbar navbar-dark navbar-expand mt-5">
            <div class="container">
                <div class="navtext">
                    Book table(s) now to get special discounts
                </div>
                <a role="button" class="btn   btn-warning"
                    role="button"
                    id="bookModalOpen" ><strong>Book Table</strong>
                </a>
            </div>
        </nav>
    <footer class="footer ">
        <div class="container ">
            <div class="row ">             
                <div class="col-4 offset-1 col-sm-2 mt-5">
                    <!-- offset-1 pushes the row by one column -->
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5 mt-5">
                    <h5>Our Address</h5>
                    <address >
		              Madhyapur Thimi, Ward no. 4<br>
		              Bhaktapur,Bagmati<br>
		              NEPAL<br>
		              <i class="fa fa-phone fa-lg"></i> +852 1234 5678<br>
		              <span class="fa fa-fax fa-lg"></span> +852 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i> <a href="mailto:confusion@food.net">befoodie@gmail.com</a>
		           </address>
                </div>
                <div  class="col-12 col-sm-4 align-self-center mt-5">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UCCYfwPgrgzOIY8X0KODgs7w?view_as=subscriber"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:" ><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>

        <div id="bookModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class=modal-title text-white" >Book a Table </h3>
                        <button type="button" class="close" id="bookModalClose">&times;</button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="row form-group">
                                <div class="col-12 col-sm-2">Number of Guests</div>
                                <div class="col-12 col-sm">
                                    <input type=radio id="one" name="number">
                                        <label for="one" ><strong>1</strong> &nbsp;</label>
                                    <input type=radio id="two"  name="number">
                                        <label for="two"><strong>2</strong>&nbsp; </label>
                                    <input type=radio id="three" name="number">
                                        <label for="three" ><strong>3</strong> &nbsp;</label>
                                    <input type=radio id="four" name="number">
                                        <label for="four"><strong>4</strong> &nbsp; </label>
                                    <input type=radio id="four" name="number">
                                        <label for="five"><strong>5</strong> &nbsp;  </label>
                                    <input type=radio id="six" name="number">
                                        <label for="six"><strong>6</strong> &nbsp; </label>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-12 col-sm-2 align-self-center">Section</div>
                                <div class="col-12 col-md-8 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-success active ">
                                        <input type="radio" required name="section"   checked autocomplete="off"> Non-Smoking
                                    </label>
                                    <label class="btn btn-danger ">
                                        <input type="radio" required name="section" autocomplete="off"> Smoking
                                    </label>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-12 col-sm-2">
                                    Date and Time
                                </div>
                                
                                <div class="col-12 col-sm-4">
                                    <input type="text" placeholder="Date"  class="form-control"> 
                                </div>
                                <div class="col-12 col-sm-4 ">
                                    <input type="text" placeholder="Time"  class="form-control"> 
                                </div>
                                <div class="col-12 col-sm"></div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-12 offset-sm-2">
                                    <button class="btn btn-primary">Book</button>
                                </div>
                                
                            </div>

                        </form>
                    </div>


                </div>
            </div>

        </div>


    <div class="alert alert-warning alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="row ">
            <div class="mx-auto">
        <strong>Warning: &nbsp; </strong>Please
        <a href="tel:+85212345678" class="alert-link">call</a>
        us to reserve for more than six guests.

            </div>

        </div>
    </div>

    <div id="loginModal" class="modal fade mx-auto" role="dialog">
        <button type="button" class="close loginCloseButton" id="loginModalClose">&times;</button>

        <div class="modal-dialog " role="content">
            <!-- Modal content-->
            
                        <h4 class=" loginTitle" >Login </h4>
                 
               </div>
                   
                    <form>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto mb-2">Email or Phone</div><br>
                                <div class="mx-auto ">
                                    <input type="text" class="form-control" name=""  id="txt1" placeholder="Email or Phone number" style="width:250px;max-width:300px">

                                </div>
                            </div>
                           

                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto mb-2">Password</div>
                                <div class=" mx-auto ">
                                    <input type="password" class="form-control" name="" id="txt2" placeholder="Password" style="width:250px;max-width:300px" >

                                </div>
                              


                            </div>
                        </div>
                        <button type="button" class="modalLoginButton">Login</button>

                        <br><br><br>
                        <p><a href="./index.html" style=" font-family: 'Forum', cursive; color: #ffa502;"> Forgot Password ?</a></p>
                        <br><br>
                        <div class="mt-3">Don't have an account?</div>
                        <button type="button" class="signupButton" id="loginModalSignupButton">Sign up</button>
                        <br>
                      
                    </form>
        </div>
    </div>                

<div id="signupModal" class="modal fade mx-auto" role="dialog">
        <button type="button" class="close signupCloseButton" id="signupModalClose">&times;</button>

        <div class="modal-dialog " role="content">
            <!-- Modal content-->
            
                        <h4 class=" signupTitle" >Sign Up </h4>
                 
               </div>
                   
                    <form method="post">
                         <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto ">Username</div>
                                <div class="mx-auto ">
                                    <input type="text" class="form-control" name="signupName"  id="txt1" placeholder="Username" style="width:250px;max-width:300px" required>

                                </div>
                            </div>
                           

                        </div>

                        <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto ">Email</div>
                                <div class="mx-auto ">
                                    <input type="email" class="form-control" name="signupEmail"  id="txt1" placeholder="Email or Phone number" style="width:250px;max-width:300px">

                                </div>
                            </div>
                           

                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto ">Phone</div>
                                <div class="mx-auto ">
                                    <input type="number" class="form-control" name="signupPhone"  id="txt1" placeholder="Phone number" style="width:250px;max-width:300px" required>

                                </div>
                            </div>
                           

                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <div class="col-12 mx-auto mb-2">Password</div>
                                <div class=" mx-auto ">
                                    <input type="password" class="form-control" name="signupPassword" id="txt2" placeholder="Password" style="width:250px;max-width:300px" required>

                                </div>
                              


                            </div>
                        </div>
                        <input type="submit" class="modalSignupButton " value="Submit">


                            <br><br>
                        <div class="or">OR</div>
                        <div class="signup">Sign up using </div>
                        <div class="icons">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        
                        </div> 
                    
                    </form>
        </div>
    </div>            


        
       
       
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            $('document').ready(function(){
                $('.logoutButton').click(function(){
                        
                    <?php

                    header("Location:logout.php");
                    return;
                    ?>
                });

            });
            
        </script>
      
    </body>
</html>