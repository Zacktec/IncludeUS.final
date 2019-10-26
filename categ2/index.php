<?php 
include 'dba.inc.php';
include 'comments.inc.php';

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" type="text/css" href="file:///C:/Users/zakar/Desktop/fontawesome-free-5.9.0-web/css/all.css">
    </head>
<body>
     <!-- Start About -->

   <section class="portfolio" id="portfolio">
		<div class="container">
              <h2 class="title">Experience deafness</h2> 
              
              <div class="portfolio-content">
                  <div class="card">
                        <div class="box">
                              <h3>listen</h3>
                              <h4> OUT:</h4>
                              <img src="3.jpg" alt="portfolio"/>
                              <div class="para"> <p> go to the following web site and try the conversition on starkey.fr</p> </div>
                              <div class ="but">
                              <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                        </div>
                        </div>
                        
                  </div>
                  
                  <div class="card">
                  <div class="box">
                              <h3>Directions</h3>
                              <h4> CHALLENGE:</h4>
                              <img src="0.jpg" alt="portfolio"/>
                              <div class="para"> <p> Wherever you are going , pretend you are deaf and ask for directions in order to get to your destination</p> </div>
                              <div class ="but">
                              <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                        </div>
                      
                            </div>
                  </div>
                 
                 
                  <div class="card">
                        <div class="box">
                              <h3>write </h3>
                              <h4>IT:</h4>
                              <img src="1.jpg" alt="portfolio"/>
                              <p> learn how to tell your name using sign language</p>
                              <div class ="but">
                               
                               <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                              
                            </div>
                            </div>
                  </div>
                  <div class="card">
                       <div class="box">
                             <h3>Sports:</h3>
                             <img src="mute3.png" alt="portfolio"/>
                             <p> watch your favorite sport game with no sound</p>
                             <div class ="but">
                               
                             <a href="../page3/index.2.html"> <input type="submit" value="Join Challenge" class="button" /> </a>
                            
                          </div>
                            </div>
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