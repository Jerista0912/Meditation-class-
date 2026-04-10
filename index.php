<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marci Maindfulness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Playwrite+CL:wght@100..400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
<style>
.zilla-slab-semibold {
  font-family: "Zilla Slab", serif;
  font-weight: 600;
  font-style: normal;
}
.baskervville-sc-regular {
  font-family: "Baskervville SC", serif;
  font-weight: 400;
  font-style: normal;
}

.edu-vic-wa-nt-beginner {
  font-family: "Edu VIC WA NT Beginner", cursive;
  font-optical-sizing: auto;
  font-weight:lighter;
  font-style: normal;
}
    .c-item{
        height:480px;
        width:100%;
    }
   
    .c-image{
        height:100%;
       filter:brightness(0.5);
        object-fit:center;
    }
    .message .carousel-inner{
        flex-direction:row;
        overflow-x:auto;
    }
  
   .c-image1{
    height:500px;
    object-fit:cover;
   }
   .c-item1{
    height:500px;
    filter:brightness(0.5);
        object-fit:center;
   }
 .bookyhead{
  padding-left:10px;
  text-align:center;
 }
 .bookbut{
 display: flex;
 justify-content:center;
 align-items:center;
 }
 .btn-primary{
  text-align:center;
 }
 .card1{
  transition: all 2s ease-in-out;
 }
 .card1::hover{
  transform:scale(1.15);
 }
 @keyframes slideIn {
            0%{
                opacity:0;
                transform:translatey(300px);
            }
            100%{
                opacity:1;
                transform:translatey(0);

            }
        }

  .dropdown-menu{
    background-color:#FFC5C5;
  }
  .nav-link:hover{
    color:white;
  }
    </style>
</head>
<body>
<div class="container-fluid p-0 flex-direction-row zilla-slab-semibold">
   <nav class="navbar navbar-expand-lg navbar-style" style="background-color:#FF69B4;Position:fixed;top:0;z-index:1000;width:100%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Marci Mindfulness</a>
  
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="padding-left:55%;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#CarouselExampleAutoplayingHome" style="padding-right:28px;">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="padding-right:28px;">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="padding-right:28px;">
            Classes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="event_table.php">Schedule</a></li>
            <li><a class="dropdown-item" href="classreg.php">Registeration</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlog.php" style="padding-right:28px;">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleAutoplayinghome " class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner edu-vic-wa-nt-beginner">
          <div class="carousel-item active c-item">
            <img src="c4.jpg" class="d-block w-100 c-image" alt="...">
                  <div class="carousel-caption top-0 mt-5 d-none d-md-block">
                    <p class="fs-1  mt-5 text-Capitalize playwrite-cl" style="font-weight:5px;padding-top:70px; animation:slideIn 5s forwards;">A Journey Of Self - Discovery ,<br> One Breath At A time </p>
                   </div>
            </div>
    
          <div class="carousel-item c-item">
              <img src="c2.jpg" class="d-block w-100 c-image" alt="...">
              <div class="carousel-caption top-0 mt-5 d-none d-md-block">
                    <p class="fs-1 mt-5 pt-5 text-Capitalize playwrite-cl fadet"style=" font-weight:10px;padding-top:100px; animation:slideIn 5s forwards;">Find Your Inner Peace ,
                    One Pose At A time </p>
               </div>
           </div>
    <div class="carousel-item c-item">
      <img src="c3.jpg" class="d-block w-100 c-image" alt="...">
              <div class="carousel-caption top-0 mt-5 d-none d-md-block">

                <p class="fs-1 mt-5 text-Capitalize playwrite-cl fadet"style="padding-top:70px; animation:slideIn 5s forwards;">Unlock Your Potential , Unplug from Stress.</p>

            </div>
    </div>
    <div class="carousel-item c-item">
      <img src="c1.jpg" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption top-0 mt-5 d-none d-md-block">

            <p class="fs-1 mt-5 text-Capitalize playwrite-cl fadet"style="padding-top:70px; animation:slideIn 5s forwards;">Experience The Power of Peace , <br>Start Your Journey Today</p>

        </div>
      </div>

  </div>
      </div>
</div></div>
<div id="carouselExample" class="carousel slide zilla-slab-semibold ">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <div class="content d-flex p-3" style="justify-content:space-between;">
        <div class="cert-ins" style="width:50%;"><h4><i class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#DE5D83" class="bi bi-check-circle-fill pl-2" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></i> Expert Instructions</h4>
<p class="mx-2">We have the certified instructors to teach the methodologies and lessons.
  They help you to now the techniques of yoga and meditation.
</p></div>
    <div class="hol-ap"style="width:50%;">
    <h4><i class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#DE5D83" class="bi bi-check-circle-fill pl-2" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></i> Holistic Approach</h4>
<p class="mx-2">Exploring and Recognizing the interconnectedness of all living beings and the natural world.
</p>
    </div>
    <div class="spec-wor" style="width:50%;"><h4><i class="bi bi-check-circle-fill"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#DE5D83" class="bi bi-check-circle-fill pl-2" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></i> Specialized Workshop</h4>
<p class="mx-2">Exploring and Recognizing the interconnectedness of all living beings and the natural world.
</p></div>
     </div>
        </div>
        
    </div></div></div>
<div id="carouselExampleblog" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <div class="carousel-caption top-0  w-20" style="color:black;padding-top:5rem;" >
        <h2 class="fs-2 mx-3 zilla-slab-semibold">Meet Our Trainers</h2>
        <p class="edu-vic-wa-nt-beginner ">Join our yoga community and connect with like-minded individuals on a journey to wellness and<br>Know about the benefits of the particular yoga by click one of them</p>
      </div>
      <div class="yogaclasses mt-5 baskervville-sc-regular" style="padding-top:15rem;display:flex;justify-content:space-around; ">
      <div class="card1"style="width:20%;height:120%;">
      <div class="card-img">
        <div class="not-mg">
          <img src="t1.jpg" class="card-img-top"  width="50px"height="290px"alt="..." style="border-radius:50%;padding:10%;"></div></div> 
          <div class="img-para">
            <h5  style="padding-left:30%; "><b>Emily Brown</b></h6>

          </div>
      </div> 
<div class="card1" style="width:20%;height:120%;">
<div class="card-img"> <img src="t4.jpg" class="card-img-top"  width="30px"height="290px"alt="..." style="border-radius:50%;padding:10%;">
<div class="img-para">
            <h5  style="padding-left:30%; "><b>Fredick Roch</b></h6>
          </div>
</div>
 
</div>
<div class="card1"style="width:20%;height:120%">
<div class="card-img"> <img src="t2.jpg" class="card-img-top"  width="50px"height="290px"alt="..." style="border-radius:50%;padding:10%;"></div>
<div class="img-para">
            <h5  style="padding-left:35%; "><b>Asley Rose</b></h6>
          </div>
</div>
   
 </div>
 
</div></div>
</div></div></div>
</div>
</div>
    </div>
    </div></div></div>

  </div>
</div>
    </div></div></div>
    
    
  </div>
</div>
    

  </div>
</div>
    

  </div>
  
  </div>
  <footer style="background-color: rgba(0,0,0) ;color:white;padding:10px; text-align: center;">
<div class="container">
<p>&copy; Marci Mindfulness. All rights reserved.</p>

<div style="margin-top: 10px;">
<a href="#" style="margin-right: 10px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#" style="margin-right: 10px;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#" style="margin-right: 10px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
</div>
</footer>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>