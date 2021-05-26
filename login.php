<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>SIGMA | LOGIN</title>

    <style>	
    
      *{
      	font-family: Verdana, sans-serif;
      }
    
      h1{
          padding:5px 5px 5px 5px;
      }
      
      h3{
          padding-bottom: 10px;
      }
      
      .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
      }

      .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
      }

      .header a.logo {
        font-size: 20px;
        font-weight: bold;
      }

      .header a:hover {
        background-color: #ddd;
        color: black;
      }

      .header a.active {
        background-color: #04AA6D;
        color: white;
      }

      .header-right {
        float: right;
      }
      
      #content a{
        color: black;
      }
      
      #content a:hover{
        color: #04AA6D;
      }

        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #f1f1f1;
          text-align: center;
        }

    </style>
    
  </head>
  
  <body>
        
        <div class="header">
          <a href="../" >
            <div id="header" class="logo">
              <h1>SIGMA s.r.l.</h1>
              <h3>IL TUO BLOG A PORTATA DI CLICK</h3>
            </div> 
          </a>
          
          <div class="header-right">
            <a href="../">Home</a>
            <a class="active">Login</a>
            <a href="../registrati/registrati.html">Registrati</a>
          </div>
        </div>
        
        <br>
        
          <div align="center" id="content">
            <?php
                session_start();
                
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                               
                $conn_serv = mysql_connect("localhost","root","");
                $conn_db = mysql_select_db("my_mari");
                
                $query = "SELECT * FROM utenti WHERE Email = '$email'";
                
                $log_result = mysql_query($query);
                
                if(!$log_result){
                
                	die("richiesta fallita ".mysql_error());
                
                }
				
                while($row = mysql_fetch_array($log_result)){
                
                	$ID = $row["ID"];
                    $Nome = $row["Nome"];
                    $Cognome = $row["Cognome"];
                    $DataNascita = $row["DataNascita"];
                    $Citta = $row["Citta"];
                    $CAP = $row["CAP"];
                    $Email = $row["Email"];
                    $Pass = $row["Pass"];
                	
                }
                
                $_SESSION['ID'] = $ID;
                $_SESSION['Nome'] = $Nome;
                $_SESSION['Cognome'] = $Cognome;
                $_SESSION['Data di nascita'] = $DataNascita;
                $_SESSION['Citta'] = $Citta;
                $_SESSION['CAP'] = $CAP;
                $_SESSION['Email'] = $email;
                $_SESSION['Pass'] = $pass;
                
                if($email === $Email and $pass === $Pass){
                
                	header("Location: ../dashboard/dashboard.php");
                
                } else {
                	echo "<h2>Email o Password Errata</h2>";
                  }
            ?>
          </div>
        
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>
