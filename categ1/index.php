<?php 
include 'dba.inc.php';
include 'comments.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css"/>
  <link rel="stylesheet" type="text/css" href="file:///C:/Users/zakar/Desktop/fontawesome-free-5.9.0-web/css/all.css">

</head>
<body>
 <!-- Start Portfolio -->
 
 <section class="portfolio" id="portfolio">
    <div class="container">

            
         <h2 class="title">Experience Blindness</h2>

         <div class="portfolio-content">
               <div class="card">
                     <div class="box">
                           <h3>lights </h3>
                           <h4> out:</h4>
                           <img src="8.jpg" alt="portfolio"/>
                            <p> something hidden in a dark room</p> 
                            <div class ="but">
                            
                                <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                               
                          </div>
                     </div>
                     
               </div>
               <div class="card">
                     <div class="box">
                           <h3>Store </h3>
                           <h4>challenge:</h4>
                           <img src="4.jpg" alt="portfolio"/>
                           <p> put on an eyefold and buy something from the nearest store , it's as easy as that ! </p> 
                           <div class ="but">
                           <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                              
  
            
            
          </script>
                        </div>
                     </div>
               </div>
              
              
               <div class="card">
                     <div class="box">
                           <h3>dark </h3>
                           <h4>screen google:</h4>
                           <img src="11.jpg" alt="portfolio"/>
                           <p>  put on eyefolds and google something you are wondering about</p>
                           <div class ="but">
                           <a href="../page3/index.2.html"><input type="submit" value="Join Challenge" class="button" /></a>
                             
                        </div>
                     </div>
               </div>
               <div class="card">
                    <div class="box">
                          <h3>Snacks:</h3>
                          <img src="9.jpg" alt="portfolio"/>
                          <p> darken the kitchen and make a sandwitch</p>
                          <div class ="but">
                          <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                              
                        </div>
                    </div>
              </div>
              <div class="card">
                    <div class="box">
                          <h3>Keys:</h3>
                          <img src="15.jpg" alt="portfolio"/>
                          <p> gather some of avaibale keys in a bag and try oppening 3 doors with eyefolds</p>
                          <div class ="but">
                          <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                              
                        <!--</div>
                        <a href="https://twitter.com/hashtag/include_us?src=hash" title="hastag #INCLUDE_US" target="_blank">#INCLUDE_US</a>
                        </div>-->
              </div>
              
         </div>
         

        

    </div>
</section>
<?php 
 echo "<div class='classtest'>
 <form method = 'POST' action='".setComments($conn)."'>
    <input type = 'hidden' name = 'uid' value ='Anonymous' >
    <input type = 'hidden' name = 'date' value ='".date('Y-m-d H:i:s')."' >
    <input type = 'hidden' name = 'uid' value ='Anonymous' ><br>
<textarea name='message' > </textarea><br>
<button type='submit' name='commentSubmit'> comment </button> 

</form>
</div>";

getComment($conn);
?>
</body>
</html>