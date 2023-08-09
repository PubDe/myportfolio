

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="slider.css">
    <script defer src="script.js"></script>
</head>

<body>
    <div class="init">  <!-- backgroud style #1 -->
    <!-- <navigation panel> -->

        <nav>
            <div class="sp"></div>
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="#" class="active jump">HOME</a></li>
                <li><a href="#works" class="jump">WORKS</a></li>
                <li><a href="#achives" class="jump">ACHIVEMENTS</a></li>
                <li><a href="#contact" class="jump">CONTACT</a></li>
            </ul>
            <div>
                <a href="/source/samplePDF.pdf" class="btn" download>Download CV</a>
            </div>
        </nav>
    <!-- </navigation panel> -->

    <!-- <Home> -->
    
        <section id="home" class="container">
            <div class="row">
                <div class="home-col">
                    <h2 class="up-anime">Here It's Me...</h2>
                    <h1 class="up-anime">Pubudu Dehigolla</h1>
                    <p class="up-anime">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, totam.
                        Beatae ipsa doloremque pariatur repellendus voluptatem labore quam mollitia soluta
                        molestiae.
                        Quas fuga sapiente in at dolor delectus consectetur nostrum.
                        <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. 
                            Maecenas nisl est, ultrices nec congue eget, auctor vitae massa.
                             Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum 
                             nisi, sed ullamcorper ipsum dignissim ac.</span></p></p>

                        <a href="#"  id="shw-btn" onclick="showMoreFun()" class="btn up-anime">Show more</a>
                    </div>
                <div class="home-col home-left-col">
                    <img src="image/person_4.jpg" class="ft-img fade-anime">
                </div>
            </div>
        </section>
    <!-- </Home> -->
    
    </div>

    <div class="midit"> <!-- backgroud style #2 -->

    <!-- <Works> -->
        <section id="works" class="container ">            
            <div class="row">
                <div class="works-col-r reveal">
                    <h2>Projects</h2>
                    <ul style="padding-top: 10px;">
                        <?php 
                
                function loadProject(){

                $conn = new mysqli("localhost:3306", "root", "admin", "abcdb");
            
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT projectid, topic, descript, link FROM projecttb";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    
                    echo 
                    "
                    <li ><a href='".$row["link"]."'><h3>".$row["topic"]."</h3></a>
                    <ul><li>".$row["descript"]."</li></ul>
                    </li>
                
                        ";
                  }
                } else {
                  echo "0 results";
                }
                
                mysqli_close($conn);
             }

             loadProject();
            ?>



                    </ul>
                </div>
                <div class="works-col-l ">
                    <h2>Turfs I playing</h2>
                    <div class="align-line">
                        <div class="row-card">
                            <div class="cardlet-col fade-out">
                                <img src="image/java-logo-transparent-free-png.webp">
                            </div>
                            <div class="cardlet-col fade-in">
                                <img src="image/docker_logo.png">
                            </div>                            
                        </div>
                        <div class="row-card">
                            <div class="cardlet-col ">
                                <img src="image/cpp.png">
                            </div>
                            <div class="cardlet-col fade-out">
                                <img src="image/main-qimg-28cadbd02699c25a88e5c78d73c7babc.webp">
                            </div>                            
                        </div>
                        <div class="row-card">
                            <div class="cardlet-col fade-in">
                                <img src="image/download (1).jfif">
                            </div>
                            <div class="cardlet-col fade-out">
                                <img src="image/rstudio.jfif">
                            </div>                            
                        </div>
                </div>
            </div>
            </div>  
        </section>
    <!-- </Works> -->

    </div>

    <div class="init"> <!-- backgroud style #1 -->

    <!-- <Achives & certificate> -->

        <section id="achives" class="container">
            <h2>ACHIVEMENTS</h2>
            <p>All foot-Prints along the way on my journey</p>
            <div class="row ">
                <div class="ach-col card fade-out">
                    <img src="image/NetworkingEssentials-01.png">
                </div>
                <div class="ach-col card fade-out">
                    <img src="image/cisco_ccna_R_26S.png">
                </div>
                <div class="ach-col card fade-out">
                    <img src="image/cetiArciDataSci.png">
                </div>
            </div>
            <div class="row">
                <div class="ach-col card fade-out">
                    <img src="image/CyberEssentials.png">
                </div>
                <div class="ach-col card fade-out">
                    <img src="image/Excel_Essentials_for_Data_Analytics.png">
                </div>
                <div class="ach-col card fade-out">
                    <img src="image/badge_ngit_do.png">
                </div>
            </div>
        </section>

        <section class="certificate"> 
            <h2 class="certificate-category">Certificates</h2>
            <button class="pre-btn"><img src="image/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="image/arrow.png" alt=""></button>
            <div class="certificate-container">
                <?php 
                
                    function loadCerti(){

                    $conn = new mysqli("localhost:3306", "root", "admin", "abcdb");
                
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT idimage, imageURL FROM imagey";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        echo 
                        "<div class='certificate-card'>
                                    <div class='certificate-image'>
                                        <img src='".$row["imageURL"]."' class='certificate-thumb' alt=''>
                                    </div>
                                </div>";
                      }
                    } else {
                      echo "0 results";
                    }
                    
                    mysqli_close($conn);
                 }

                            loadCerti();
                ?>
            </div>
        </section>
    
    <!-- </Achives & certificate> -->
    
    </div>

    <div class="midit"> <!-- backgroud style #2 -->

    <!-- <Contact Information> -->

        <section id="contact" class="container">
            <div class="row">
                <div class="con-col">
                    <div id="form"></div>
                    <?php include 'form.php' ?>  
                </div>
                <div class="con-col">
                    <div id="banner">
                        <h1>Contact information</h1>
                        <h2>e-mail</h2>
                        <h3>myOwnEmail@email.com</h3>
                        <h2>Phone</h2>
                        <h3>+112-1231237890</h3>
                        <h2>Address</h2>
                        <h3>123, Web Street, My Home town,OwnHill</h3>
                        <div class="bottm-line"></div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- </Contact Information> -->
    
    </div>
    
    <!-- <Footer> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Category</h4>
                    <ul>
                        <li><a href="#home">About</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Archives</h4>
                    <ul>
                        <li><a href="#achives">March 2021</a></li>
                        <li><a href="#achives">Augest 2022</a></li>
                        <li><a href="#achives">November 2022</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Links</h4>
                    <div class="social-links">
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://github.com/PubDe" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- </Footer> -->

</body>

</html>