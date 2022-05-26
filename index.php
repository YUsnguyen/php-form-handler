<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <h1>PHP Test Page</h1>

  <?php

  echo "This is PHP!";

    if(isset($_POST["FirstName"])){ //showdata
    echo $_POST["FirstName"];
    
    }else{//show form
      echo '

          <form method="post" action="">
            <p>
              First Name: <input type="text" name="FirstName"/>              </p>
            <p> 
              <input type="submit" value="Submit" />
            </p>
          


            ';
    }


  ?>

  
    
    
    
    </form>
    
  </body>
</html>
