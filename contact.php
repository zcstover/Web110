
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Zachary Stover: WEB110 Portal Website</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
 </head>
 <body>
     <header>
     <h1>Zachary Stover: WEB110 Portal Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="big/index.html">BIG</a>
       <a href="aia.html">AIA</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="contact.php">Contact Zachary Stover</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
     </header>
     
   <main class="wrapper">
     
     <img class="desktop" src="images/me.jpg" alt="Photo of an adorable a puppy and me" width="800" height="540" />
       
     <img class="tablet" src="images/me.jpg" alt="Photo of an adorable a puppy and me" width="500" height="330"/>
       
     <img class="phone" src="images/me.png" alt="Photo of an adorable a puppy and me" width="320" height="220"/>
       
       <h2 class="subheader">About Me</h2>
       
       <p>I am a student at Seattle central working towards transferring to North Seattle Community College for a bachelors of applied science.</p>
           
      <p>I like to play board games with my friends.</p>

       <h3>Sub Header</h3>

       <p>I've never been that keen on telling other people things about myself</p>

      <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here
        
            $toAddress = "zcstover@gmail.com";  //place your/your client's email address here
            $toName = "Amir Adams"; //place your client's name here
            $website = "Jerzz.co";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

      ?>
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Zachary Stover </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>