<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Car 99</title>
    <link rel="icon" type="image/x-icon" href="Assets/smalllogo.png">

    <!-- fonts from google fonts -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- HEADER FOR THE WEBSITE -->
    <section id="header" class="header">
        
        <nav>
            <a href="index.html">
                <img src="assets/logo.png">
            </a>
            <div class="nav-links">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#vehicleType">Category</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li class="login"><a href="login.html">Sign Up</a></li>
                </ul>
            </div>
        </nav>
    
    <!-- END OF HEADER -->


    <!-- CONTENT FOR THE WEBSITE -->
        <div class="title">
            <h1>
                RENTAL MOBIL 99
            </h1>
            <p>
                Solusi rental mobil yang aman dan 100% <br>terpercaya!
            </p>
            <h2>
                BOOKING SEKARANG!
            </h2>
            <div class="booknow">
                <div class="column">
                    <input class="input" id="name" type="text" placeholder="Name">
                </div>
                <div class="column">
                    <select class="input" id="tipemobil" value="Tipe Mobil">
                        <option value="volvo">Tipe Mobil</option>
                        <option value="volvo">Sedan</option>
                        <option value="saab">MPV</option>
                        <option value="fiat">Luxury</option>
                        <option value="audi">SUV</option>
                    </select>
                </div>
                <div class="column">
                    <input class="input" id="tanggalSewa"type="date" value="Tanggal Sewa">
                </div>
                <div class="column">
                    <input class="input" id="noTelp"type="number" placeholder="Nomor Telepon">
                </div>
                <div class="column">
                    <input class="button" type="button" value="Book">
                </div>
            </div>
        </div>


    </section>

    <section>
        <div class="info">
            <div class="cat">
                <img src="assets/Group 26.png">
                <h2>TIPE MOBIL <br>BERVARIASI</h2>
                <p>Banyak pilihan mobil yang tersedia dalam website ini!</p>
            </div>
            <div class="cat">
                <img src="assets/Group 28.png">
                <h2>RENTAL MOBIL TERDEKAT</h2>
                <p>Banyak pilihan mobil yang tersedia dalam website ini!</p>
            </div>
            <div class="cat">
                <img src="assets/Group 27.png">
                <h2>HARGA YANG TERJANGKAU</h2>
                <p>Banyak pilihan mobil yang tersedia dalam website ini!</p>
            </div>
            <div class="cat">
                <img src="assets/Group 29.png">
                <h2>TRANSAKSI YANG AMAN</h2>
                <p>Banyak pilihan mobil yang tersedia dalam website ini!</p>
            </div>
        </div>
    </section>
        

        <!-- VEHICLE TYPE -->
    <section id="vehicleType" class="car-type">
        <h1>JENIS MOBIL</h1>
        <p>Berikut adalah beberapa pilihan mobil yang dapat anda sewa sesuai dengan kebutuhan anda</p>

        <div class="row">
            <div href="/Rental Car 99/detail.html" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>TOYOTA INNOVA</h2>
                <img src="Assets/MPV.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>450.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>HONDA MOBILIO</h2>
                <img src="Assets/Mobilio.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>450.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>MITSUBISHI XPANDER</h2>
                <img src="Assets/Xpander.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>550.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div href="#about" class="car-col">
                <h3>PREMIUM SUV</h3>
                <h2>TOYOTA FORTUNER</h2>
                <img src="Assets/Forturner.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>1.500.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL PREMIUM</h3>
                <h2>TOYOTA ALPHARD</h2>
                <img src="Assets/Alphard(2).png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>450.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>MITSUBISHI PAJERO</h2>
                <img src="Assets/Pajero.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>550.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>TOYOTA INNOVA</h2>
                <img src="Assets/MPV.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>450.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>HONDA MOBILIO</h2>
                <img src="Assets/Mobilio.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>450.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>

            <div href="#about" class="car-col">
                <h3>MOBIL KELUARGA</h3>
                <h2>MITSUBISHI XPANDER</h2>
                <img src="Assets/Xpander.png">
                <div class="isi">
                    <div class="isi2">
                        <h4>HARGA SEWA</h4>
                        <p>550.000/12 jam</p>
                    </div>
                    <div class="isi2">
                        <a href="detail.html">
                            <input class="button2" type="button" value="BOOK NOW">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <a href="">CLICK TO SEE MORE</a>
        
    </section>

    <section id="cara" class="cara">
        <h1>CARA RENTAL MOBIL</h1>
        <p>Berikut adalah tahapan dalam penyewaan mobil di Rental Mobil 99</p>

        <div class="info2">
            <div class="cat2">
                <img src="assets/Group 24 (1).png">
                <h2>PILIH TANGGAL<br>SEWA</h2>
                <p>Berikan informasi tanggal penggunaan mobil</p>
            </div>
            <div class="cat2">
                <img src="assets/Group 24 (2).png">
                <h2>PILIH JENIS MOBIL</h2>
                <p>Pilih jenis mobil yang sesuai dengan keinginan dan kebutuhan anda</p>
            </div>
            <div class="cat2">
                <img src="assets/Group 24 (3).png">
                <h2>TRANSAKSI</h2>
                <p>Lakukan transaksi untuk melanjutkan proses penyewaan mobil</p>
            </div>
            <div class="cat3">
                <img src="assets/Group 24 (4).png">
                <h2>GUNAKAN MOBIL</h2>
                <p>Gunakan mobil untuk pergi kemanapun yang anda ingin kunjungi!</p>
            </div>
        </div>
    </section>

    <section class="aboutrental">
        <div class="konten">
            <div class="tentang">
                <h3>
                    ABOUT US
                </h3>
                <h1>
                    TENTANG RENTAL MOBIL 99
                </h1>
                <p>
                    RENTAL CAR 99 adalah sebuah web based application tentang rental mobil untuk mempermudah dan membantu mereka yang membutuhkan mobil untuk disewa.
                </p>
                <div class="datadiri">
                    <img src="assets/Ellipse 2.png">
                    <div class="datadirilagi">
                        <h4>
                            HALID ALI
                        </h4>
                        <h5>
                            FOUNDER of RENTAL CAR 99
                        </h5>
                    </div>
                </div>
            </div>
    
            <div class="kenapa">
                <h3>
                    KENAPA HARUS MEMILIH
                </h3>
                <h1>
                    RENTAL MOBIL 99
                </h1>
                <div class="konten2">
                    <div>
                        <img src="assets/Group 31.png" alt="">
                    </div>
                    <div class="hehe">
                        <h2>
                            TIPE MOBIL BERVARIASI
                        </h2>
                        <p>
                            Tersedia mobil manual dan matic
                        </p>
                    </div>
                </div>

                <div class="konten2">
                    <div>
                        <img src="assets/Group 32.png" alt="">
                    </div>
                    <div class="hehe">
                        <h2>
                            RENTAL MOBIL TERDEKAT
                        </h2>
                        <p>
                            Tersedia mobil manual dan matic
                        </p>
                    </div>
                </div>

                <div class="konten2">
                    <div>
                        <img src="assets/Group 30.png" alt="">
                    </div>
                    <div class="hehe">
                        <h2>
                            HARGA SEWA YANG MURAH
                        </h2>
                        <p>
                            Dapatkan harga sewa mobil termudah disini!
                        </p>
                    </div>
                </div>

                <div class="konten2">
                    <div>
                        <img src="assets/Group 33.png" alt="">
                    </div>
                    <div class="hehe">
                        <h2>
                            TRANSAKSI AMAN
                        </h2>
                        <p>
                            Tersedia mobil manual dan matic
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="konten3">
            <h3>
                LAYANAN RENTAL CAR 99
            </h3>
            
        </div>
    </section>

        

    <!-- END OF CONTENT -->


    <!-- FOOTER FOR THE WEBSITE -->

    <section id="about"class="footer">
        <h2>About us</h2>
        <p>Contact us on</p>
        <p>0896-5853-4669</p>
        <p>fastfordrive@gmail.com</p>
        <p>Fast for Drive is a website for rent cars<br>
            with the greatest experience you can ever have
        </p>
        <p></p>
        <a href="https://www.instagram.com/halidali_/">
            <img src="Assets/instagram.png">
        </a>
        <a href="https://twitter.com/groovybearr">
            <img src="Assets/twitter.png">
        </a>
        <a href="https://www.youtube.com/watch?v=iik25wqIuFo">
            <img src="Assets/youtube.png">
        </a>
    </section>

    <!-- END OF FOOTER -->
    
</body>
</html>