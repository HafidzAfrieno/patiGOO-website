<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/Dasbor.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <nav class="navbar">
        <div class="item">
            <img src="foto/rorrr.png" alt="">
             <div class="item2">
                <form>
                    <input type="text" id="fname" placeholder="Search.."xx name="fname">
                    <button type="submit"><span class="material-symbols-outlined">
                        search
                        </span></button>
                </form>
                <p class="kategori">
                  Mau pernikahan kalian mewah dan megah? Order Patigoo aja!! 
                </p>
             </div>

              <a href="shopping-cart.html">
                <span class="material-symbols-outlined">
                shopping_cart
                </span>
              </a>
              <div class="button">
              <button class="login"  onclick="document.getElementById('id01').style.display='block'">masuk</button>
              <button class="regis"  onclick="document.getElementById('id02').style.display='block'">daftar</button>
              </div>
        </div>
    </nav>


    <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="foto/Screenshot 2024-04-29 214536.png" style="width:100%; height: 60vh">
  
    </div>
  
    <div class="mySlides fade">
      <img src="foto/Screenshot 2024-04-29 214702.png" style="width:100%; height: 60vh">
      
    </div>
  
    <div class="mySlides fade">
      <img src="foto/Screenshot 2024-04-29 214833.png" style="width:100%; height: 60vh">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  
  <section class="product">
    <div class="position">
    <a href="">
    <div href="" class="card">
        <div class="imgCard">
           <img src="foto/Screenshot 2024-04-29 214536.png" alt="" style="width:100%;">
        </div>
        <div class="textCard">
           <p class="nameProdact">
              busanan
           </p>
        </div>
    </div>
    </a>

    <a href="">
        <div href="" class="card">
            <div class="imgCard">
               <img src="foto/Screenshot 2024-04-29 214536.png" alt="" style="width:100%;">
            </div>
            <div class="textCard">
               <p class="nameProdact">
                  busanan
               </p>
            </div>
        </div>
        </a>

        <a href="dasbor-Produt.html">
            <div href="" class="card">
                <div class="imgCard">
                   <img src="foto/Screenshot 2024-04-29 214536.png" alt="" style="width:100%;">
                </div>
                <div class="textCard">
                   <p class="nameProdact">
                      busanan
                   </p>
                </div>
            </div>
            </a>

            <a href="">
                <div href="" class="card">
                    <div class="imgCard">
                       <img src="foto/Screenshot 2024-04-29 214536.png" alt="" style="width:100%;">
                    </div>
                    <div class="textCard">
                       <p class="nameProdact">
                          busanan
                       </p>
                    </div>
                </div>
                </a>
    </div>
  </section>
 
  <div id="id01" class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="close" title="Close Modal">&times;</span>
  
      <div class="container">
        <p style="font-size: 30px;margin: 10px 0;">Masuk</p>
        <label for="uname">Username</label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" required>
  
        <button type="submit" class="buttonn">Masuk</button>
      </div>
  
      <p class="window-login">belum punya akun?<a href="" >daftar sekarang</a></p>
    </form>
  </div>

  <div id="id02" class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="close" title="Close Modal">&times;</span>
  
      <div class="container">
        <p style="font-size: 30px;margin: 10px 0;">Daftar</p>
        <label for="uname">Username</label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" required>
  
        <button type="submit" class="buttonn">Daftar</button>
      </div>
  
      <p class="window-login">sudah punya akun?<a href="" >masuk sekarang</a></p>
    </form>
  </div>
  
  <script src="script-dasbor.js"></script>
</body>
</html>