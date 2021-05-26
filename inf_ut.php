<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>SIGMA | DASHBOARD</title>

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

        #content{
          padding-top: 2%;
          padding-bottom: 5%;
          width:60%;
        }

        #content a{
          color: black;
        }

        #informazioni_p {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #informazioni_p td, #informazioni_p th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #informazioni_p tr:nth-child(even){background-color: #f2f2f2;}

        #informazioni_p tr:hover {background-color: #ddd;}

        #informazioni_p th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #04AA6D;
          color: white;
        }
        
        #informazioni_p a {
          color: black;
        }
      
        .blog{
          padding-top:5%;
          width:50%;
        }
      
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #f1f1f1;
          text-align: center;
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
          background-color: #DDD;
          color: black;
        }

        .header a.active {
          background-color: #04AA6D;
          color: white;
        }

        .header-right {
          float: right;
        }
        
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
          color:white;
          border:solid 2px #f44336;
        }
        
        .cancelbtn a{
          color:white;
        }
        
    </style>
    
  </head>
  
  <body>
        
        <div class="header">
          <a href="#default" class="logo">
            <div id="header">
              <h1>SIGMA s.r.l.</h1>
              <h3>IL TUO BLOG A PORTATA DI CLICK</h3>
            </div> 
          </a>
		<?php session_start() ?>
          <div class="header-right">
            <a class="active">Informazioni Utente</a>
            <a href="../dashboard.php"> Torna alla Dashboard</a>
          </div>
        </div>
            
       <?php
                
                echo "<table id=\"informazioni_p\">";
                
                	echo "<tr align=\"center\">";
                    	echo "<th>ID</th>";
                        echo "<th>Nome</th>";
                        echo "<th>Cognome</th>";
                        echo "<th>Data di nascita</th>";
                        echo "<th>Citt&agrave;</th>";
                        echo "<th>CAP</th>";
                        echo "<th>Email</th>";
                        echo "<th>Password</th>";
                    echo "</tr>";
                
                	echo "<tr align=\"center\">";
                    	echo "<td>".$_SESSION['ID']."</td>";
                    	echo "<td>".$_SESSION['Nome']."</td>";
                        echo "<td>".$_SESSION['Cognome']."</td>";
                        echo "<td>".$_SESSION['Data di nascita']."</td>";
                        echo "<td>".$_SESSION['Citta']."</td>";
                        echo "<td>".$_SESSION['CAP']."</td>";
                        echo "<td>".$_SESSION['Email']."</td>";
                        echo "<td>".$_SESSION['Pass']."</td>";
                    echo "</tr>";
                    
                    echo "<tr align=\"center\">";
                    	echo "<td>non mod.</td>";
                    	echo "<td><a href=\"#\">modifica</a></td>";
                        echo "<td><a href=\"#\">modifica</a></td>";
                        echo "<td><a href=\"#\">modifica</a></td>";
                        echo "<td><a href=\"#\">modifica</a></td>";
                        echo "<td><a href=\"#\">modifica</a></td>";
                        echo "<td><a href=\"email.php\">modifica</a></td>";
                        echo "<td><a href=\"#\">modifica</a></td>";
                    echo "</tr>";
                echo "</table>";

       ?>
            
            <br><br><br><br><br>
            
        <div  align="center">
        	<button class="cancelbtn"><a href="cancellazione.php">ELIMINA IL TUO ACCOUNT</a></button>
        </div>
            
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>
