<!-- Last updated:  25th March 2022 -->


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Practicum > Home </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* --------------------------- */
      /*  HOMEPAGE CONTENT: emner  */
      /* --------------------------- */
      .content-emner {
          margin-top: 10em;
          margin-bottom: 3em;
          text-align: center;

          border: red 1px solid;

      }

      .content-emner .boxes {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          margin-left: 4em;
          margin-right: 4em;

          border: blue 1px solid;
      }

      .content-emner .box {
          width: 25%;
          min-width: 15%;
          aspect-ratio: 1;
          justify-content: space-around;
          margin: 2em;

          padding: 15px;
          border-radius: 20px;
          background: #ffffff;
          box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.1),
                    -0px -1px 2px -0px rgba(0, 0, 0, 0.06);
        
          
      }

      .content-emner #buttonbox {
        display: flex;
        justify-content: center;
        align-items: center;

        margin: 1rem;

        border: green 1px solid;
      }

      .content-emner #button {
        width: fit-content;
        height: 2rem;

        font-size: 1rem;
        text-decoration: none;

        display: flex;
        justify-content: center;
        align-items: center;

        padding: 15px;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0px 0.1px 0.3px 0px rgba(87, 87, 87, 0.1),
                    -0px -0.1px 0.2px -0px rgba(87, 87, 87, 0.06);
      }

      .content-emner #button a {
        font-size: 1rem;
        text-decoration: none;  
        color: black;
      }

      .content-emner #button a:hover {
        color: rgb(121, 121, 144);
      }

      @media (max-width: 35em) {
          .content-emner .box {
              width: 100%;
              margin-left: 0.25rem;
              margin-right: 0.25rem;
          }
      }

      .content-emner h2 {
          text-align: center;
          font-size: 1.75em;
          font-family: "Archivo Narrow";
        }
        
      .content-emner p {
          text-align: justify;   
          font-size: 1em;
          font-family: "Source Sans Pro";
        }


      /* --------------------------- */
      /*  HOMEPAGE CONTENT: price    */
      /* --------------------------- */

    </style>
  </head>



  <!-- START HOMEPAGE -->
  <body>
    <!-- START header (logo, nav) -->
    <header class="header">
      <!-- LOGO img -->
      <div class="logo">
        <img src="./assets/logo.png" alt="" height="60" width="60" />
      </div>
      
      <!-- toggle-button -->
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>

      <!-- START navigation -->
      <nav>
        <ul class="nav-tabs">
          <li class="nav-link">
            <a href="index.html" class="selected"> <span> 00 </span> Home </a>
          </li>
          <li class="nav-link">
            <a href="Emneoversikt.html"> <span> 01 </span> Emneoversikt </a>
          </li>
          <li class="nav-link">
            <a href="about.html"> <span> 02 </span> Om </a>
          </li>
          <li class="nav-link">
            <a href="index.html"> <span> 03 </span> Pris </a>
          </li>
        </ul>
      </nav>
      <!-- END navigation -->
    </header>
    <!-- END header -->

    <!-- START content: title -->
    <div class="title-textbox">
        <div id="box">
            <h2>catchphrase</h2>
            <h1>PRACTICUM</h1>
            <br/>
            <p>THIS IS SOME TEXT</p>
        </div>
        <aside></aside>
    </div>
    <!-- END content: title -->



    <!---------------------->
    <!-- START content: om emene -->
    <div class="content-emner">
      <div>
        <h2> subtitle h2 </h2>
      </div>
      <div class="boxes">
        <div class="box">
          <h3>Teori</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="box">
          <h3>Oppgavesmaling</h3>
          <p>
              Praktikumsoppgaver og teorioppgaver med løsningsforslag 
              <br>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="box">
          <h3>Annet</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
      <div id="buttonbox">
        <div id="button">
          <a href="Emneoversikt.html"> se emneoversikt </a>
        </div>
      </div>
    </div>

    <!--------------->
    <div class="price">
      
    </div>






    <!-- START footer -->
    <footer>
      <div class="footer-textbox">
        <div class="section">
            <h4> Practicum. </4>
                <h5> by ISO </h5>
                <br>
                <p> social media icons? </p>
        </div>
        <div class="section">
            <h4> Kontakt </h4>
            <p> 981 15 209 </p>
            <p> ISO.tande@gmail.com </p>
            <p> Org.nr. xxx xxx xxx </p>
          </div>
          <div class="section">
            <h4> Linker </h4>
            <a href="FAQ.html"> FAQ </a>
            <p> link2 </p>
            <p> link3 </p>
        </div>
      </div>
    </footer>

    <!-- JS for nav-bar toggle-button -->
    <script>
        const navbar = document.getElementsByClassName("nav-tabs")[0]
        const navToggle = document.getElementsByClassName("toggle-button")[0]

        navToggle.addEventListener("click", function() {
            navbar.classList.toggle("active")
        })

        navToggle.addEventListener("click", function() {
            navToggle.classList.toggle("selected")
        })
    </script>
  </body>
</html>

