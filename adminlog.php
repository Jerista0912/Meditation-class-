<?php
$conn=mysqli_connect("localhost","root","","ymclass");
if(isset($_POST['login_admin'])){
   
    $password=$_POST['password'];
    $sql="SELECT*FROM admin WHERE password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $hashed_password=$row['password'];
        if($password==$hashed_password){
         
            header('Location:admin.php');
            exit;
        }
        else{
            echo "<script>alert('Invalid Password');</script>";
            exit;
        }
    }
 }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Playwrite+CL:wght@100..400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        .wrapper{
            padding:0 20px 0 20px;
            background:#ccc;
        }
        .main{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding-top:30 px;
            box-shadow:0 10px 10px 10px  1px rgba(0,0,0),rgba(0,0,0);
        }
       
        .sideimage{
            background-image:url("logback.jpg");
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;
            position:relative;
            border-radius:10px 0 0 10px;
            
        }
        .row{
            width:990px;
            height:550px;
          border:1px solid #ccc;
            border-radius:10px;
            background:#fff
        }
        .row{
            animation:slideIn 2s forwards;
           
        }
        .text{ 
           top:0%;
            left:10%;
        
            display:flex;
            justify-content:center;
            align-items:center;
                }
        .text p{
            color:white;
        }
        @keyframes slideIn {
            0%{
                opacity:0;
                transform:translatey(600px);
            }
            100%{
                opacity:1;
                transform:translatey(0);

            }
        }
     
        .input-box{
            height:200%;
            padding-left:3%;
            opacity:6;
            animation:fadeIn 7s forwards;
        }
        .input-box{
            animation:fadeIn 4s forwards;
            
        }
        .form-back{
            height:120%;
            position:relative;
        }
        @keyframes fadeIn {
            0%{
                opacity:0;
            }
            100%{
                opacity:1;
            }
    }

    </style>
</head>
<body>
    <div class="wrapper zilla-slab-semibold ">
        <div class="container main" style="overflow:hidden;">
            <div class="row">
                <div class="col-md-6 sideimage">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                    <form method="POST" style="padding-top:20%;"class="form-back">
                    
                    <div class="text d-flex">
                    <div data-bs-theme="dark" >
                    <a href="index.php" class="btn-close" aria-label="Close" style="color:black;">X</a></div>
                    <p style="font-size:25px; color:black; padding-bottom:5px">Welcome Admin</p>
                    
                </div>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <input type="password" class="form-control " id="inputPassword "width="20px;" name="password">
                            <br>
                                                 <div class="btn-div" style="padding-left:20%; padding-top:15px;">
                            <input class="btn" type="submit" style="background-color:#DE5D83; width:70%;" name="login_admin"value="login admin">

                            </div>
                       
                            
              </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>