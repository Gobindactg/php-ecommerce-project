<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOIPUNNO DIGITAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/down.css">
    
</head>
<body>
    <div >
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <form action="" class="form-horizontal" role="form">
                        <div class="form-group bg-success">
                            <h2 class="col-md-12 text-center text-white" > WELCOME NOIPUNNO DIGITAL SCHOOL </h2>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <form action="" class="form-horizontal" role="form">
                        <div class="form-group">
                            <h2 class="col-md-12 text-center text-primary"> Jonnerdonpur High School</h2>
                            <h4 class="col-md-12 text-center text-primary"> Aburhat, Jorargonj, Mirsarai, Chattogram </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <form action="" class="form-horizontal" role="form">
                        <div class="form-group bg-success">
                        <button type="button" class="btn btn-success">Registration</button>
                        <button type="button" class="btn btn-danger">Log in</button>
                        <a  href=""><img style="width:40px; padding:0px 5px;" src="images/036-facebook.png" alt=""></a>
                        <a href=""><img style="width:40px; padding:0px 5px;" src="images/001-youtube.png" alt=""></a>
                        <a href=""><img style="width:40px; padding:0px 5px;" src="images/008-twitter.png" alt=""></a>
                        <a href=""><img style="width:40px; padding:0px 5px;" src="images/027-linkedin.png" alt=""></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <form action="" class="form-horizontal" role="form">
                        <div class="form-group " >
                            <div class="bg-white col-md-12 text-justify" style="padding:3px 6px; color: black; font-style: tahoma; font-weight:600"> 
                                    <a href="index.php">Home</a>  
                                    <a href="instution_info.php">Institution Information</a>  
                                    <a href="admission.php"> Student Admissin</a> 
                                    <a href="">Student Information</a>  
                                    <a href=""> Subject</a> 
                                    <a href="display.php">Mark Distribution</a>  
                                    <a href="mark.php">Mark Entry</a>  
                                    <a href="">Exam Informatin</a>  
                                    <a href=""> Testimonial</a> 
                                     
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <form action="" class="form-horizontal" role="form">
                    <div class="form-group " >
                       
                                   <?php
                                    if(isset($nds)){
                                            if($nds == "admission"){
                                                include "pages/admission.php";
                                            }
                                        }else{
                                            include "pages/home.php";
                                        }
                                    ?>
                               
                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   

        <div class="bottom">
                        <table class="table table-bordered">
                            <thead class="thead-success">
                                <tr class="down">
                                    <th class="hover">
                                        <a  href="">Home</a>
                                        <a  href="">Contact</a>
                                        <a  href="">Email</a>
                                    </th>
                                    <th class="social">
                                        <a href=""><img  src="images/036-facebook.png" alt=""></a>
                                        <a href=""><img src="images/001-youtube.png" alt=""></a>
                                        <a href=""><img src="images/008-twitter.png" alt=""></a>
                                        <a href=""><img src="images/027-linkedin.png" alt=""></a>
                                    </th>
                                    <th class="hover">
                                        <a href="">ABOUT US</a>
                                        <a href="">DEVELOPER INFO</a>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                
            </div>
     </div>
        
</body>
</html>