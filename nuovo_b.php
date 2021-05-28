<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>SIGMA | CREA NUOVO</title>

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
        padding-top:5%;
      }
      
      #content{
        width:40%;
      }
      
      #content a{
        color: black;
      }

	  #grid{
      	float:left;
      }

        .container {
          padding: 16px;
        }

        input[type=text], [type=radio], [type=checkbox], input[type=number], input[type=date], input[type=email], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }

        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }

        .createbtn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }

        .createbtn:hover {
          opacity:1;
        }

        a {
          color: dodgerblue;
        }

        .signin {
          background-color: #f1f1f1;
          text-align: center;
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
          <a href="#default" class="logo">
            <div id="header">
              <h1>SIGMA s.r.l.</h1>
              <h3>IL TUO BLOG A PORTATA DI CLICK</h3>
            </div> 
          </a>
          
          <div class="header-right">
            <a class="active">Crea Blog</a>
            <a href="../dashboard.php"> Torna alla Dashboard</a>
          </div>
        </div>
        
        <br>
        
          <div align="center">
            <div id="content" align="left">
              <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div class="container">
                  <h4>Compila il form qu&igrave; sotto per aprire un blog!</h4>

                  <hr>
                 
                  <label for="tipo"><b>Tipo di blog*</b></label>
                  <br>
                  <p align="center">Personale<br><input type="radio" value="Personale" name="tipo_blog" id="tipo_blog" required></p>
                  <p align="center">Aziendale<br><input type="radio" value="Aziendale" name="tipo_blog" id="tipo_blog" required></p>
                  
                  <label for="dominio"><b>Dominio*</b></label>
                  <input type="text" placeholder="Dominio" name="dominio" id="dominio" required>
                  
                  <label for="temi_disp"><b>Temi Disponibili*</b></label>
                  		<div>
                          <div>
                            <p align="center">Sportivo +130&euro;</p>
                            <input type="radio" value="sportivo" name="tipo_tema" id="tipo_tema">
						  </div>
                          
                          <div>
                          <p align="center">Business +200&euro;</p>
                          <input type="radio" value="business" name="tipo_tema" id="tipo_tema">
						  </div>
                          
                          <div>
                          <p align="center">Semplice +0&euro;</p>
                          <input type="radio" value="semplice" name="tipo_tema" id="tipo_tema">
						  </div>
                          
                          <div>
                          <p align="center">Elegante +175&euro;</p>
                          <input type="radio" value="elegante" name="tipo_tema" id="tipo_tema">
                  		  </div>
                        </div>
                  <hr>
                  
                  <button type="submit" class="createbtn">Crea Blog</button>
                </div>

              </form>
              <br><br><br><br>
            </div>
          </div>
        
        <?php
        
                session_start();

                $tipo_blog = $_POST["tipo_blog"];
                $dominio = $_POST["dominio"];
                $tipo_tema = $_POST["tipo_tema"];
                $codice_ut = $_SESSION["ID"];

                $ris_conn = mysql_connect("localhost","root","");

                $select_db = mysql_select_db("my_mari");

                $tema = "SELECT * FROM temi WHERE Nome='$tipo_tema'";
                $richiesta_IDTema = mysql_query($tema);
                
                if(!$richiesta_IDTema){

                    echo "<h1>Impossibile recuperare il valore ".mysql_error()."<h1>";

                }else{

                  while($rec = mysql_fetch_array($richiesta_IDTema)){
						
                        $IDtema = $rec["ID"];
                        
                          }

                  $query = "INSERT INTO blog(Dominio,TipoBlog,TemaUsato,CodiceUtente,IDTema) VALUES( '$dominio.bloggher.it','$tipo_blog','$tipo_tema',$codice_ut,$IDtema )";
                  $tab = mysql_query($query);

                  if(!$tab){
                  	  echo mysql_error();
                      echo "<h1>Nome Dominio non disponibile</h1>";
                  }else{

                      header("Location: ../dashboard.php");

                    }
               }
         ?>
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>
