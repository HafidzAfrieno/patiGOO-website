<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/show-product.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav class="navbar">
        <div class="item">
            <img src="foto/rorrr.png" alt="" />
            <div class="item2">
                <form>
                    <input type="text" id="fname" placeholder="Search.." xx name="fname" />
                    <button type="submit">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </form>
                <ul class="kategori">
                    <li><a href="">busana</a></li>
                    <li><a href="">busana</a></li>
                    <li><a href="">busana</a></li>
                </ul>
            </div>

            <a href="shopping-cart.html">
                <span class="material-symbols-outlined"> shopping_cart </span>
            </a>
            <div class="button">
                <button class="login" onclick="document.getElementById('id01').style.display='block'">
                    masuk
                </button>
                <button class="regis" onclick="document.getElementById('id02').style.display='block'">
                    daftar
                </button>
            </div>
        </div>
    </nav>

    <form action="" method="post">
        <div class="container-opsion-model">
            <div class="container-slides">
                <div class="mySlides">
                    <img src="foto/Screenshot 2024-04-29 214536.png" />
                </div>

                <div class="mySlides">
                    <img src="foto/Screenshot 2024-04-29 214702.png" />
                </div>

                <div class="mySlides">
                    <img src="/foto/Screenshot 2024-04-29 214905.png" />
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="foto/Screenshot 2024-04-29 214536.png" />
                    <input type="checkbox" name="check" onclick="currentSlide(1,this)" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="foto/Screenshot 2024-04-29 214702.png" />
                    <input type="checkbox" name="check" onclick="currentSlide(2,this)" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="foto/Screenshot 2024-04-29 214833.png" />
                    <input type="checkbox" name="check" onclick="currentSlide(3,this)" />
                </div>
            </div>
            <h2>Ulasan Pembeli</h2>
            <div class="retting">
                <h1><i class="fa-sharp fa-solid fa-star"></i> 4.7/</h1>
                <p>5.0</p>
            </div>
        </div>

        <div class="container-text-product">
            <div class="title-text-product">
                <h1>Busana Kebaya</h1>
            </div>
            <div class="retting-text-product">
                <p>terjual 250+ 
                    <span>|</span>  
                    <span><i class="fa-sharp fa-solid fa-star"></i>4.7 (140 Rating)
                    </span>  
                </p>
            </div>
            <div class="harga-product">
                <h1>RP 1.200.800</h1>
            </div>
            <div class="opsional-size">
                <p>Pilih Ukuran Pakaian :</p>
                <div class="opsi">
                    <div class="column">
                        <h1 class="size">S
                        <input type="checkbox" name="check-size" onclick="currentSlidesize(1,this)" /></h1>
                    </div>
                    <div class="column">
                        <h1 class="size">M
                        <input type="checkbox" name="check-size" onclick="currentSlidesize(1,this)" /></h1>
                    </div>
                    <div class="column">
                        <h1 class="size">L
                        <input type="checkbox" name="check-size" onclick="currentSlidesize(1,this)" /></h1>
                    </div>
                </div>
            </div>
            <div class="decription-product">
                <h1>Detail</h1>
                <p>Kondisi: Baru</p>
                <p>Min.pemesanan: 1 buah</p>
                <div class="deskripsi-rinci">
                    <p class="title">Batik</p>
                    <p class="body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam,
                        doloremque saepe dignissimos reiciendis doloribus maiores culpa,
                        laborum cumque eum dolorum aut accusamus impedit consectetur eius
                        porro quasi praesentium possimus hic?
                    </p>
                </div>
            </div>
            <div class="akun-user">
               <!-- akun user kosong dulu yah -->
            </div>
            <div class="pengiriman">
                <p>pengiriman</p>
                <div class="lokasi">
                    <p> <span class="material-symbols-outlined">
                        location_on
                        </span> lokasi dari <span>Pati</span></p>
                </div>
                <div class="harga-ongkir">
                    <p> <span class="material-symbols-outlined">
                        local_shipping
                        </span>ongkir reguler 8rb-10rb</p>
                </div>
            </div>
        </div>

        <div class="submit">
            <p class="title">Atur Jumlah dan Catatan</p>
            <p class="p">S</p>
            <div class="container-submit-input">
                <div class="grub-1">
                    <div class="input-group">
                        <input type="button" value="-" class="button-minus" data-field="quantity">
                        <input type="number" step="1" max="" value="1" name="quantity"
                            class="quantity-field">
                        <input type="button" value="+" class="button-plus" data-field="quantity">
                    </div>
                    <p class="rule">MAX.Pembelian 5 pcs</p>
                </div>
                <p class="stok">stok: 240</p>
            </div>
            <div class="container-total">
                <p>SubTotal: </p>
                <p class="sub-harga">12.0000</p>
            </div>
            <div class="all-button">
                <button type="submit" name="" class="btn-1">
                    +Keranjang
                </button>
                <button type="submit" name="" class="btn-2">
                    Sewa Sekarang
                </button>

            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/script-shopping-cart.js')}}"></script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        // Thumbnail image controls
        function currentSlide(n, checkbox) {
            var checkboxes = document.getElementsByName(checkbox.name);
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
            });
            showSlides((slideIndex = n));
        }
        function currentSlidesize(n, checkbox) {
            var checkboxes = document.getElementsByName(checkbox.name);
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
            });
        }
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>

</html>