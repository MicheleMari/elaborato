<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>SIGMA | RESGISTRATI</title>

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
            <a href="../login/login.html">Login</a>
            <a class="active">Registrati</a>
          </div>
        </div>
        
        <br>
        
          <div align="center" id="content">
            <?php
                session_start();
                
                $_SESSION['Nome'] = $nome = $_POST["nome"];
                $_SESSION['Cognome'] = $cognome = $_POST["cognome"];
                $_SESSION['DataNascita'] = $data_nascita = $_POST["data_nascita"];
                $_SESSION['CAP'] = $cap = $_POST["cap"];
                $_SESSION['Citta'] = $citta = $_POST["citta"];
                $_SESSION['Email'] = $email = $_POST["email"];
                $_SESSION['Pass'] = $pass = $_POST["pass"];
                
                $conn_serv = mysql_connect("localhost", "root", "");
                
                $conn_DB = mysql_select_db("my_mari");
                
                $inserimento_ut = "INSERT INTO utenti(Nome, Cognome, DataNascita, Citta, CAP, Email, Pass) VALUES ('$nome','$cognome','$data_nascita','$citta',$cap,'$email','$pass')";

                $tab = mysql_query($inserimento_ut);

                if(!$tab){
                    echo "<h2>Inserimento non Riuscito</h2>";
                } else 
                    header('location: ../dashboard/dashboard.php');         
            ?>
          </div>
        
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>
