<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-footer.css" type="text/css">
 

    <!-- reference copy Font Awesome -------------->
    <script src="https://kit.fontawesome.com/03d3a58230.js" crossorigin="anonymous"></script>
    
  </head>


<!--Footer starts (Slackoverflow with modification)-->

<footer>
<section class="ft-main">
  
</section>

<section class="ft-social">
  <ul class="ft-social-list">
  <li><a href="https://github.com/kellycfj" target="_blank"><i
      class="fab fa-github-square fa-2x" title="Github"></i></a></li>
    <li><a href="https://www.facebook.com/visitdublin" target="_blank"><i
      class="fab fa-facebook-square fa-2x" title="Facebook"></i></a></li>
    <li><a href="https://wa.me/353011001000" target="_blank"><i class="fab fa-whatsapp-square fa-2x"
      target="_blank" title="WhatsApp"></i></li>
    <li><a href="mailto:info@wefly.ie" target="_blank"><i
      class="fas fa-envelope-square fa-2x" target="_blank" title="E-mail"></i></li>
    <li><a href="https://www.linkedin.com/in/kelly-crystine-f-jesus-b2b510b6" target="_blank"
      alt="Profile Picture" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
  </ul>
</section>


<section class="ft-legal">
  <ul class="ft-legal-list">
    <li><?php echo "Terms &amp; Conditions";?></li>
    <li><?php echo "Kelly F. Jesus   " . date('d/m/Y'); ?></li>
    <li>&copy; <?php echo "2020 CCT Web Development";?></li>
  </ul>
</section>
</footer>

<?php
//back top button - (W3School)
echo '<button onclick="topFunction()" id="mytopBtn" title="Back to top">Top</button>';
?>

<!--Get the top button -->
<script> var mybutton = document.getElementById("mytopBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the page
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}; </script>


</body>
</html>