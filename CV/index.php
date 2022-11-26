<?php


$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die ('connection failed');
if (isset($_POST['send'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $msg  = mysqli_real_escape_string($conn, $_POST['message']);


  $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg' ") or die ('query failed');

  if(mysqli_num_rows($select_message) > 0){
  $message[] = 'message sent already!';
  }else{
    mysqli_query($conn,"INSERT INTO `contact_form`(name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die ('query failed');
    $message[] = 'message sent successfully';
  }
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    
  <?php
    if (isset($message)){
      foreach($message as $message){
        echo '<div class="message"  data-aos="fade-down">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
              </div>
  ';
      }
    }
  
  ?>

    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>
      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="image" data-aos="fade-right">
        <img src="images/user-model.jpg" alt="" />
      </div>
      <div class="content">
        <h3 data-aos="fade-up">hi, i'm amen mhamdi</h3>
        <span data-aos="fade-up">web designer & web developer</span>
        <p data-aos="fade-up">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
          laudantium, modi hic repellat neque nostrum
        </p>
        <a data-aos="fade-up" href="#about" class="btn">About Me</a>
      </div>
    </section>

    <section class="about" id="about">
      <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>

      <div class="biography">
        <p data-aos="fade-up">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
          laborum totam doloremque ut, expedita corrupti quisquam
        </p>

        <div class="bio">
          <h3 data-aos="zoom-in"><span>name : </span>amen mhamdi</h3>
          <h3 data-aos="zoom-in"><span>email : </span>amenmhamdi666@gmail.com</h3>
          <h3 data-aos="zoom-in"><span>address : </span>tunisia , sidi hassine</h3>
          <h3 data-aos="zoom-in"><span>phone : </span>+216 29669732</h3>
          <h3 data-aos="zoom-in"><span>age : </span>22 years</h3>
          <h3 data-aos="zoom-in"><span>experience : </span>2+ years</h3>
        </div>
        <a href="#" class="btn"  data-aos="fade-up"> download cv</a>
      </div>
      <div class="skills"  data-aos="fade-up">
        <h1 class="heading"><span>skills</span></h1>
        <div class="progress">
          <div class="bar" data-aos="fade-left">
            <h3><span>HTML</span> <span>95%</span></h3>
          </div>
          <div class="bar" data-aos="fade-right">
            <h3><span>CSS</span> <span>85%</span></h3>
          </div>
          <div class="bar" data-aos="fade-left">
            <h3><span>JavaScript</span> <span>65%</span></h3>
          </div>
          <div class="bar" data-aos="fade-right">
            <h3><span>PHP</span> <span>70%</span></h3>
          </div>
        </div>
      </div>
      <div class="edu-exp">
        <h1 class="heading"  data-aos="fade-up"><span>education & experience</span></h1>
        <div class="row">
          <div class="box-container">
            <h3 class="title"  data-aos="fade-right">education</h3>
            <div class="box" data-aos="fade-right">
              <span>( 2019 - 2020 )</span>
              <h3>web designer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
            <div class="box" data-aos="fade-right">
              <span>( 2020 - 2021 )</span>
              <h3>web designer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
            <div class="box" data-aos="fade-right">
              <span>( 2021 - 2022 )</span>
              <h3>web designer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
          </div>
          <div class="box-container">
            <h3 class="title" data-aos="fade-left">experience</h3>
            <div class="box" data-aos="fade-left">
              <span>( 2019 - 2020 )</span>
              <h3>front-end experience</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
            <div class="box" data-aos="fade-left">
              <span>( 2020 - 2021 )</span>
              <h3>back-end experience</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
            <div class="box" data-aos="fade-left">
              <span>( 2021 - 2022 )</span>
              <h3>full-stack experience</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                aliquid reprehenderit sequi atque excepturi
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <h1 class="heading"  data-aos="fade-up"><span>services</span></h1>
      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-code"></i>
          <h3>web development</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-paint-brush"></i>
          <h3>graphic design</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fab fa-bootstrap"></i>
          <h3>bootstrap</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-chart-line"></i>
          <h3>seo marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-bullhorn"></i>
          <h3>digital marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fab fa-wordpress"></i>
          <h3>wordpress</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            necessitatibus, nulla cum non quibusdam nam
          </p>
        </div>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <h1 class="heading"  data-aos="fade-up"><span>portfolio</span></h1>
      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <img src="images/img-1.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
        <div class="box" data-aos="zoom-in">
          <img src="images/img-2.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
        <div class="box" data-aos="zoom-in">
          <img src="images/img-3.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
        <div class="box" data-aos="zoom-in">
          <img src="images/img-4.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
        <div class="box" data-aos="zoom-in">
          <img src="images/img-5.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
        <div class="box" data-aos="zoom-in">
          <img src="images/img-6.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
      </div>
    </section>
    
    <section class="contact" id="contact">
      <h1 class="heading"  data-aos="fade-up"><span>contact me</span></h1>
      <form action="" method="post">
        <div class="flex">
          <input data-aos="fade-right"
            type="text"
            name="name"
            placeholder="Enter Your Name"
            class="box"
            required
          />
          <input data-aos="fade-left"
            type="email"
            name="email"
            placeholder="Enter Your Email"
            class="box"
            required
          />
        </div>
        <input data-aos="fade-up"
          type="number"
          min="0"
          name="number"
          placeholder="Enter Your Number"
          class="box"
          required
        />
        <textarea data-aos="fade-up"
          name="message"
          class="box"
          required
          placeholder="Enter Your Message"
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit"  data-aos="zoom-in"  value="Send Message" name="send" class="btnv" >
      </form>

      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-phone"></i>
          <h3>phone</h3>
          <p>123-456</p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-envelope"></i>
          <h3>email</h3>
          <p>amenmhamdi666@gmail.com</p>
        </div>
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-map-marker-alt"></i>
          <h3>address</h3>
          <p>sidi hassine , tunis</p>
        </div>
      </div>
    </section>
    
    <div class="credit">&copy;copyright @<?php echo date('Y') ;?> by <span>amen mhamdi</span></div>


    <script src="js/main.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

      AOS.init({
        duration:800,
        delay:300
      });
       
    </script>
  </body>
</html>
 