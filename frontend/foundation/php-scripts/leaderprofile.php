<?php
@session_start();
echo "working";
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");

$name = $_SESSION['username'];
$comment = $_POST['content'];
#echo "$name";
$result = mysqli_query($con,"Insert into comments(name,comments) values('$name','$comment')");
echo "Insert into comments(name,comments) values('$name','$comment')";
#$result = mysqli_query($con,"Insert into workshop(q1,date,q2,q3,q4) values('$q1','$d','$q2','$q3','$q4')");

#$result = "Insert into comments(name,comment) values(\"". $name. "\",\""  . $comment. "\")";
mysqli_commit($con);


#echo "ddd".$mysqli->commit();
#$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");
$query1 = "Select * from comments";
$result= mysqli_query($con, $query1);
#echo ;





echo '<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leader Profile</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../foundation-icons/foundation-icons.css">
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
           
 
      <div class="row">
        <div class="large-12 columns">
          <div class="panel">
            <h1>Mr. Abhinav Shah</h1>
          </div>
        </div>
      </div>
       
      <div class="row">
      
         
        <div class="large-3 columns ">
          <div class="panel">
            <a href="#"><img src="http://placehold.it/300x240&text=[img]"/></a>
            <h5><a href="#">Leader id : 123</a></h5>
              <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
              <section class="section">
                <h5 class="title"><a href="#">View School Feedback</a></h5>
              </section>
              <section class="section">
                <h5 class="title"><a href="#">Submit Workshop Feedback </a></h5>
              </section>
              <section class="section">
                <h5 class="title"><a href="#">View Leader-board</a></h5>
              </section>
            </div>
     
          </div>
        </div>
        
         
         
        <div class="large-6 columns">
     
           
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]"/></div>
            <div class="large-10 columns">
              <p><strong>Priority 1</strong>Infrastructure Management.</p>
             
              <div class="row">
                <div class="large-10 columns"><p>Toilet and water</p></div>
              </div>
              <div class="row">
                <div class="large-2 columns small-3">time: 12:12</div>
                <div class="large-10 columns"><p>School Display</p></div>
              </div>
              <div class="row">
                <form method="post" action="./php-scripts/leaderprofile.php">
                  <div class="large-10 columns">
                    <div class="row collapse">
                      <div class="small-8 columns">
                        <input type="text" name="content" placeholder="Enter a comment">
                      </div>
                      <div class="small-4 columns">
                        <input type="submit" class="button postfix">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          </div>
           
     
          <hr/>
     
           
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]"/></div>
            <div class="large-10 columns">
              <p><strong>Priority 1</strong></p>
              <h6>%n Comments</h6>
              <div class="row">
                
                <div class="large-10 columns"></div>
              </div>
              <div class="row">
                
                <div class="large-10 columns">';
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
{
echo $row['name'];
echo $row['comments'];	
}
				
				echo '</div>
              </div>
              <div class="row">
                <form method="post">
                  <div class="large-10 columns">
                    <div class="row collapse">
                      <div class="small-8 columns">
                        <input type="text" placeholder="Enter a comment">
                      </div>
                      <div class="small-4 columns">
                        <input type="submit" class="button postfix">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
           
     
          <hr/>
     
           
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]"/></div>
            <div class="large-10 columns">
              <p><strong>Priority 2</strong>Toilets and water</p>
              <h6>%n Comments</h6>
              <div class="row">
                <div class="large-2 columns small-3">time: 12:12</div>
                <div class="large-10 columns"></div>
              </div>
              <div class="row">
                <div class="large-2 columns small-3">time: 12:12</div>
                <div class="large-10 columns"></div>
              </div>
              <div class="row">
                <form method="post">
                  <div class="large-10 columns">
                    <div class="row collapse">
                      <div class="small-8 columns">
                        <input type="text" placeholder="Enter a comment">
                      </div>
                      <div class="small-4 columns">
                        <input type="submit" class="button postfix">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
     
         
         
        <!-- <aside class="large-3 columns hide-for-small">
          <p><img src="http://placehold.it/300x440&text=[ad]"/></p>
          <p><img src="http://placehold.it/300x440&text=[ad]"/></p>
        </aside> -->
     
      </div>
     
     
       
     
      <footer class="row">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-5 columns">
              <p>© Copyright ISLI</p>
            </div>
          </div>
        </div>
      </footer>
    
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>';


mysqli_close($con);

?>
