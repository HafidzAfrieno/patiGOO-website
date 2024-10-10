<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/shopping-cart.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <nav class="navbar">
        <div class="item">
            <img src="foto/rorrr.png" alt="">
            <div class="item2">
                <form>
                    <input type="text" id="fname" placeholder="Search.." xx name="fname">
                    <button type="submit"><span class="material-symbols-outlined">
                            search
                        </span></button>
                </form>
                <ul class="kategori">
                    <li><a href="">busana</a></li>
                    <li><a href="">busana</a></li>
                    <li><a href="">busana</a></li>
                </ul>
            </div>

            <a href="shopping-cart.html">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
            </a>
            <div class="button">
                <button class="login" onclick="document.getElementById('id01').style.display='block'">masuk</button>
                <button class="regis" onclick="document.getElementById('id02').style.display='block'">daftar</button>
            </div>
        </div>
    </nav>

    <section class="container">
        <main class="container-card">
            <!-- start dari sini -->
            <div class="container-card-olshop">
                <div class="card">
                    <div class="cheked-all-item">
                        <input class="chebox-item-1" type="checkbox" id="vehicle-1" name="vehicle1" value="Bike" onclick="checkAllCheckboxes('#vehicle-1','.chekedBarangToko-1')">
                        <p class="title-olshop">Toko subur Jaya</p>
                    </div>
                    <!-- ini untuk item tiap toko -->
                    <div class="cheked-item">
                        <div class="container-1">
                            <input type="checkbox" class="chekedBarangToko-1" name="vehicle1" value="Bike">
                            <img src="foto/Screenshot 2024-04-29 214536.png" alt="">
                            <p class="title-product">Kebaya Magetan</p>
                        </div>
                        <div class="container-2">
                            <div class="harga">
                                <p>RP 12.000.000</p>
                            </div>
                            <div class="tongsampah">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>

                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="1" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cheked-item">
                        <div class="container-1">
                            <input type="checkbox" class="chekedBarangToko-1" name="vehicle1" value="Bike">
                            <img src="foto/Screenshot 2024-04-29 214536.png" alt="">
                            <p class="title-product">Kebaya Magetan</p>
                        </div>
                        <div class="container-2">
                            <div class="harga">
                                <p>RP 12.000.000</p>
                            </div>
                            <div class="tongsampah">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>

                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="1" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cheked-item">
                        <div class="container-1">
                            <input type="checkbox" class="chekedBarangToko-1" name="vehicle1" value="Bike">
                            <img src="foto/Screenshot 2024-04-29 214536.png" alt="">
                            <p class="title-product">Kebaya Magetan</p>
                        </div>
                        <div class="container-2">
                            <div class="harga">
                                <p>RP 12.000.000</p>
                            </div>
                            <div class="tongsampah">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>

                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="1" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



                <div class="card">
                    <div class="cheked-all-item">
                        <input class="chebox-item-1" type="checkbox" id="vehicle-2" name="vehicle1" value="Bike" onclick="checkAllCheckboxes('#vehicle-2','.chekedBarangToko-2')">
                        <p class="title-olshop">Toko subur Jaya</p>
                    </div>
                    <!-- ini untuk item tiap toko -->
                    <div class="cheked-item">
                        <div class="container-1">
                            <input type="checkbox" class="chekedBarangToko-2" name="vehicle1" value="Bike">
                            <img src="foto/Screenshot 2024-04-29 214536.png" alt="">
                            <p class="title-product">Kebaya Magetan</p>
                        </div>
                        <div class="container-2">
                            <div class="harga">
                                <p>RP 12.000.000</p>
                            </div>
                            <div class="tongsampah">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>

                                <div class="input-group">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                    <input type="number" step="1" max="" value="1" name="quantity"
                                        class="quantity-field">
                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="container-display">
        <div class="title-display">
            <p>Ringkasan Belanja</p>
        </div>
     <form action="">
        <div class="text-label-display">
            <p class="label">Total Belanja</p>
            <p class="output">12.000</p>
        </div>
        <div class="text-label-display">
            <p class="label">Total Pesanan</p>
            <p class="output">20</p>
        </div>
        <div class="text-label-display">
            <p class="label">Jangka Waktu</p>
            <p class="output">3 Hari</p>
        </div>
        <button>sewa</button>
    </form>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/script-shopping-cart.js')}}">
        
    </script>
</body>

</html>