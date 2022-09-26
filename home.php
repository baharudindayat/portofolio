<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <header>
        <div class="topnav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skill">Skill</a>
            <a href="#hobi">gallery</a>
            <a href="#contact">Contact</a>
        </div>
    </header>


    <div class="main">
        <section class="home" id="home">
            <div class="home1">
                <a>Hi, There</a><br>
                <a>My name is Dayat</a><br>
                <a>I'am a Programmer</a>
            </div>
            <div class="sosmed">
                <a style="margin-right: 30px;" class="fab fa-youtube"></a>
                <a style="margin-right: 30px;"class="fab fa-instagram" ></a>
                <a style="margin-right: 30px;"class="fab fa-facebook"></a>
                <a style="margin-right: 30px;"class="fab fa-github"></a>
                <a style="margin-right: 30px;"class="fab fa-steam"></a>
                <a style="margin-right: 30px;"class="fab fa-discord"></a>
            </div>
        </section>

        <section class="about" id="about">
            <div class="title">
                <p>ABOUT</p>
            </div>
            <div class="abouttext">
                <p>Nama saya Baharudin Nur Hidayat, Saya lahir di kendal pada 22 July 2002, saya sedang berkuliah<bR>
                    di Universitas Ahmad Dahlan Yogyakarta, menempuh S1 Teknik Informatika, saya tertarik dengan<br>
                    sesuatu yang bersangkutan denagn teknologi.
                </p>
            </div>
        </section>

        <section class="about"  id="skill">
            <div class="title">
                <p>SKILL</p>
            </div>
            <div class="skillgua">
                <i class="fab fa-html5"> </i><a> HTML 5 </a><br>
                <div class="progressBarContainer">
                    <div class="progressBarValue value-80">
                        <div class="tulis">80 %</div>
                    </div>
                </div>
                <i class="fab fa-css3"> </i><a> CSS 3</a><br>
                <div class="progressBarContainer">
                    <div class="progressBarValue value-60">
                        <div class="tulis">60 %</div>
                    </div>
                </div>
                <i class="fab fa-js-square"> </i><a> JAVA SCRIPT</a><br>
                <div class="progressBarContainer">
                    <div class="progressBarValue value-50">
                        <div class="tulis">50 %</div>
                    </div>
                </div>
                <i class="fas fa-paint-brush"> </i><a> UI/UX</a><br>
                <div class="progressBarContainer">
                    <div class="progressBarValue value-100">
                        <div class="tulis">100 %</div>
                    </div>
                </div>
                <i class="fas fa-camera"> </i><a> PHOTOGRAPHY</a>
                <div class="progressBarContainer">
                    <div class="progressBarValue value-90">
                        <div class="tulis">90 %</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about"  id="hobi">
            <div class="title">
                <p>GALLERY</p>
            </div>
            <div class="galeri">
                <img src="img/1.png" alt="photos">
                <img src="img/3.png" alt="photos2">
                <img src="img/2.png" alt="photos3">
                <img src="img/4.png" alt="photos4">
                <img src="img/5.jpg" alt="photos5">
                <img src="img/6.jpg" alt="photos6">
            </div>
        </section>

        <section class="about" id="contact">
        <div class="title">
                <p>CONTACT</p>
            </div>
            <div>
                <form class="kontak" >
                    <input class="mwehehe" type="text" placeholder=" NAME"><br>
                    <input class="mwehehe" type="email" placeholder=" EMAIL"><br>
                    <input class="textt" type="text" placeholder=" "><br>
                    <button class="tombol"> SUMBIT </button>
                </form>
            </div>
        </section>

        <section class="about">
        <div class="title">
            <p>VISITOR
        </div>
        <div class="visit">
        <?php
            $filename = 'counter.txt';
            
            function counter(){		
                global $filename;	
            
                if(file_exists($filename)){		
                    $value = file_get_contents($filename);	
                }else{		
                    $value = 0;		
                }
            
                file_put_contents($filename, ++$value);		
            }
            
            counter();	
            
            echo ' Anda Pengunjung ke : '.file_get_contents($filename);	
            ?>
        </div>
        </section>
    </div>


    <footer class="sikil">
        <h3>Baharudin Nur Hidayat 2021 @Copyright all right reserved</h3>
    </footer>
</body>
</html>