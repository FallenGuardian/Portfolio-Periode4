<?php
require 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Over mij</a></li>
                <li><a href="#services" class="menu-btn">Diensten</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#projects" class="menu-btn">Projecten</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2">Dion Cali</div>
                <div class="text-3">En ik ben een <span class="typing"></span></div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column right">
                    <div class="text">Ik ben Dion en ik ben een <span class="typing-2"></span></div>
                    <p>Ik ben Dion Cali, en ik ben 24 jaar. Op dit moment volg ik de opleiding Sofware Developement op het Nova College in Haarlem.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My diensten</h2>
            <div class="serv-content">
                <?php
                $qServices = $mysqli->query("SELECT * FROM services");
                $fServices = $qServices->fetch_all();

                foreach ($fServices as $services) {
                ?>
                    <div class="card">
                        <div class="box">
                            <i class="fas <?php echo $services[3]; ?>"></i>
                            <div class="text"><?php echo $services[1]; ?></div>
                            <p><?php echo $services[2]; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mijn skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mijn ervaring</div>
                    <p>Hier kan je vinden wat ik op dit moment beheers en hoeveel ervaring ik heb</p>
                </div>
                <div class="column right">
                    <?php
                    $qSkills = $mysqli->query("SELECT * FROM skills");


                    while ($fSkills = $qSkills->fetch_assoc()) {
                    ?>
                        <div class="bars">
                            <div class="info">
                                <span><?php echo $fSkills['name']; ?></span>
                                <span><?php echo $fSkills['percent']; ?>%</span>
                            </div>
                            <div class="line html" style="--my-percent-var: <?php echo $fSkills['percent']; ?>%;"></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="projects">
        <div class="max-width">
            <h2 class="title">Mijn projecten</h2>
            <div class="carousel owl-carousel">
                <?php
                $qProject = $mysqli->query("SELECT * FROM projects");
                $fProject = $qProject->fetch_all();

                foreach ($fProject as $fProject) {
                ?>
                    <div class="card">
                        <div class="box">
                            <img src="<?php echo $fProject[3]; ?>" alt="">
                            <div class="text"><?php echo $fProject[1]; ?></div>
                            <p><?php echo $fProject[2]; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Neem contact op</div>
                    <p>Via dit formulier kan je contact met mij opnemen</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Dion Cali</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    $cUser = $mysqli->prepare("INSERT INTO reactions (`name`, `email`, `subject`, `company`, `place`, `adress`, `postal`, `phone`, `message`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
                    $cUser->bind_param("sssssssss", $name, $email, $subject, $company, $place, $adress, $postal, $phone, $message);

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $company = $_POST['company'];
                    $place = $_POST['place'];
                    $adress = $_POST['adress'];
                    $postal = $_POST['postal'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];

                    $cUser->execute();
                }
                ?>
                <div class="column right">
                    <div class="text">Stuur mij een bericht</div>
                    <form action="index.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Naam" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Onderwerp" name="subject" required>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Bedrijfsnaam" name="company">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Vestigingsplaats" name="place">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Adres" name="adress">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Postcode" name="postal">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Telefoonnummer" name="phone">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span><span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>

</html>