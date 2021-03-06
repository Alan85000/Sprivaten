<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprivaten</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<section id="intro">

<?php include('header.php'); ?>

<body>
<div id="drive">
    <h2>Drive More <br> Customers <br> Through Digital</h2>
    <p>We know how large objects will act, but things on a <br> small scale.</p>
    <div id="buttons">
        <button id="get">
            Get Quote Now
        </button>
        <button id="learn">
            Learn More
        </button>
    </div>
    </div>
</section>
<!-- fin de la section intro -->

<!-- Section why choose us -->
<section id="why">
    <h3>WHY CHOOSE US</h3>
    <p id="problems">Problems trying to resolve the conflict between <br> the two major realms of Classical physics: Newtonian mechanics</p>
    <section id="wnd">
        <div class="web">
            <div class="titre">
        <i class="fa-solid fa-users"></i>
            <h4>Web Development</h4>
            </div>
            <p class="products">-The best products start <br>with figma<br>
                -Design with real data<br>
                -Lightning first prototyping<br>
                -Fastest way to organize<br>
                -Work at the speed of thought.<br>
                <span>Learn More</span>
            </p>
        </div>

        <div class="web">
            <div class="titre">
        <i class="fa-solid fa-award"></i>
            <h4>National top 50 films</h4>
            </div>
            <p class="products">-The best products start <br>with figma <br>
                -Design with real data<br>
                -Lightning first prototyping<br>
                -Fastest way to organize<br>
                -Work at the speed of thought.<br>
                <span>Learn More</span>
            </p>
        </div>

        <div class="web">
            <div class="titre">
        <i class="fa-solid fa-book"></i>
            <h4>Digital Marketing</h4>
        </div>
            <p class="products">-The best products start <br>with figma<br>
                -Design with real data<br>
                -Lightning first prototyping<br>
                -Fastest way to organize<br>
                -Work at the speed of thought.<br>
                <span>Learn More</span>
            </p>
        </div>
    </section>
</section>
<section id="team">
   <div id="contentun">
       <div id="meet">
       <h3>Meet Our Team</h3>
       <p>Problems trying to resolve the conflict between<br> the two majors realms of Classical physics: Newtonian mechanics
       </div>
       <div id="staff">
           <div id="staffun">
               <img src="beaton.png" alt="Avie Beaton">
               <p id="nomun">Avie Beaton</p>
               <p>CO Founder</p>
               <div id="iconesun">
               <i class="fa-brands fa-facebook"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               </div>
           </div>
           <div id="staffdeux">
               <img src="jonson.png" alt="Ben Jonson">
               <p id="nomdeux">Ben Jonson</p>
               <p>Consultant</p>
               <div id="iconesdeux">
               <i class="fa-brands fa-facebook"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               </div>
           </div>
           <div id="stafftrois">
               <img src="fletcher.png" alt="Ashley Fletcher">
               <p id="nomtrois">Ashley Fletcher</p>
               <p>CEO</p>
               <div id="iconestrois">
               <i class="fa-brands fa-facebook"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               </div>
           </div>        
        </div>    
  </div>    
</section>
<section id="appointement">
    <div id="contentdeux">
      <div id="contact">
        <p>Contact Us</p>
        <h2>Make an Appointement</h2>
      </div>
      <div id="formulaire">
        <div id="rangeeun">
        <input id="name" type="text" value="Full Name">
        <input id="emailun" type="text" value="exemple@gmail.com">
        </div>
        <div id="rangeedeux">
        <select name="pets" id="selectun">
         <option value="">Please Select</option>
        </select>
        <select name="pets" id="selectdeux">
        <option value="">400 Available</option>
        </select>
        </div>
        <div id="rangeetrois">
        <input id="message" type="text" value="Message">
        </div>
        <div id="book">
        <button id="sendun"><a href="send">Book Appointement</a></button>
        </div>              
      </div>    
    </div>    
</section>
<section id="agency">
<div id="consulting">
    <div id="contenttrois">
        <div id="textun">
        <h3>Consulting Agency For Your Business</h3>
        <p>the quick fox jumps over the lazy dog</p>    
        </div>
        <div id="buttonun">
        <button id="senddeux"><a href="send">Contact Us</a></button>
        </div>       
    </div>
</div>
</section>
<?php include('footer.php'); ?>
</body>
</html>