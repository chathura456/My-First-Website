<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="home page.css">
    
    
</head>
<body>

    <div class="head"><!--Navigation Bar create-->
        <nav>
            <div class="logo">
           <img src="images/logo2.png" alt="">
            </div>

             <!-- Hamburger Menu -->
             <input type="checkbox" name="" id="menu">
             <label for="menu"><i class="fas fa-bars"></i></label>
             <label for="menu"><i class="fas fa-times"></i></label>
             <!-- Menu Bar -->
        <ul class="menu">
            <div class="dropdown"><li><button><a href="#">Home</a></button></li></div>
            <div class="dropdown">
            <li><button class="dropbtn" id="1"><a href="#">Category  <i class="fa fa-caret-down"></i></a></button></li>
            <div class="dropdown-content">
                <a href="new-category/c++.php">C++</a>
                <a href="new-category/HTML.php">HTML</a>
                <a href="new-category/css.php">CSS</a>
                <a href="new-category/javascript.php">JavaScript</a>
                <a href="new-category/java.php">JAVA</a>
            </div>
        </div>

        <div class="dropdown">
            <li><button class="dropbtn" id="1"><a href="#">Recources  <i class="fa fa-caret-down"></i></a></button></li>
            <div class="dropdown-content">
                <a href="youtube.php">YouTube</a>
                <a href="https://www.w3schools.com/" target="_blank">W3School</a>
                <a href="https://github.com/" target="_blank">GitHub</a>
                <a href="download.php">Downloads</a>
            </div>
        </div>

        <div class="dropdown">
            <li><button class="dropbtn" id="1"><a href="#">Community <i class="fa fa-caret-down"></i></a></button></li>
            <div class="dropdown-content">
                <a href="post_details.php">Q & A</a>
                
            </div>
        </div>
            
            <div class="dropdown"><li><button><a href="compiler-test/TestCompiler.php">Try it Yourself</a></button></li></div>
            
        </ul>
    </nav>
    </div><!--End of the nav bar-->

    
<center>
<div class="bgcolor">
    <!--Slider create-->
    <div class="slider">
   
        <figure>

            <div class="slide"><img src="home-images/2.jpg" alt=""></div>
            <div class="slide"><img src="images/13.jpg" alt=""></div>
            <div class="slide"><img src="images/14.jpg" alt=""></div> 
            <div class="slide"><img src="images/12.jpg" alt=""></div>
            
            <div class="slide"><img src="images/11.jpeg" alt=""></div>
            
        </figure>
    </div>
<!--End of the Slider-->

<hr id="hr2"></center>

<div class="learn1" id="i1">
<div class="title"><h1>Learn C++ Programming</h1></div>
<div class="slider1"> 
        <img src="home-images/c4.png" alt="">  
        <a href="new-category/c++.php"><button class="learn2" >
                Learn More..
            </button></a> </div>   
</div><hr id="hr1">

<div class="learn1" id="i2">
    <div class="title"><h1>Learn HTML</h1></div>
    <div class="slider1"> 
            <img src="home-images/ht7.jpg" alt="">  
            <a href="new-category/HTML.php"><button class="learn2" >
                    Learn More..
                </button></a> </div>   
    </div><hr id="hr1">

<div class="learn1" id="i3">
    <div class="title"><h1>Learn CSS</h1></div>
    <div class="slider1"> 
            <img src="home-images/cs4.png" alt="">  
            <a href="new-category/css.php"><button class="learn2" >
                    Learn More..
                </button></a> </div>   
    </div><hr id="hr1">

<div class="learn1" id="i4">
    <div class="title"><h1>Learn JAVA</h1></div>
    <div class="slider1"> 
            <img src="home-images/java1.jpg" alt="">  
            <a href="new-category/java.php"><button class="learn2" >
                    Learn More..
                </button></a> </div>   
    </div>

<div class="footer"><p>Copyright &copy; AzCoding 2021</p></div>
</div>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
