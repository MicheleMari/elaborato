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

        #blog {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #blog td, #blog th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #blog tr:nth-child(even){background-color: #f2f2f2;}

        #blog tr:hover {background-color: #ddd;}

        #blog th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        
        #crea-blog button{
          background:#04AA6D;
          color:white;
          border-radius:5px;     
          }
          
        #crea-blog a{
          color:white;
          text-decoration:none;
          }
      
        .blog{
          padding-top:1%;
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
          	<h3 align="center">Ciao<?php echo " ".$_SESSION['Nome']; ?></h3>
            <a class="active">Dashboard</a>
            <a href="informazioni/informazioni_ut.php">Informazioni utente</a>
            <a href="../">Logout</a>
          </div>
        </div>
        
             <div align="center">
      			<div class="blog" align="center">
      
            <br>
        
        <?php
       
       		$ris_conn = mysql_connect("localhost","root","");
            
            $select_DB = mysql_select_db("my_mari");
            
            $ID = $_SESSION['ID'];
            
            $query = "SELECT * FROM blog WHERE CodiceUtente = $ID";
            
            $tab = mysql_query($query);

              echo "

                              <div id=\"blog_esist\">
                              <h3>BLOG CREATI</h3>
                              <table id=\"blog\">
                              <tr>
                                  <th>Dominio</th>
                                  <th>Tipo di blog</th>
                                  <th>Tema usato</th>
                              </tr>
                       ";

                while($rec = mysql_fetch_array($tab)){

                  echo "<tr>";
                      echo "<td>".$rec["Dominio"]."</td>";
                      echo "<td>".$rec["TipoBlog"]."</td>";
                      echo "<td>".$rec["TemaUsato"]."</td>";
                  echo "</tr>";

                }

                  echo "</table>";
                 echo "</div>";
                 
               echo "<br>";
        ?>
                
   				<br>
                
              <div id="crea-blog" align="center">
              	  <br>
                  <button><a  href="crea_nuovo_b/nuovo_b.php"><h3>CREA NUOVO BLOG</h3></a></button>
              </div>
             </div>
         	</div>
            
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>
