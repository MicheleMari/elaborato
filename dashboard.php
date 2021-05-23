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

        #blog_esist {
          float: left;
        }

        #crea-blog {
          float: right;
        }

        #temi {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #temi td, #temi th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #temi tr:nth-child(even){background-color: #f2f2f2;}

        #temi tr:hover {background-color: #ddd;}

        #temi th {
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
          	<h3 align="center">Ciao<?php echo " ".$nome ?></h3>
            <a class="active">Dashboard</a>
            <a href="login/login.html">Informazioni profilo</a>
            <a href="../">Logout</a>
          </div>
        </div>
        
          <div align="center">
            <div class="blog" align="center">
                <div id="blog_esist">
                  <h3>BLOG ESISTENTI</h3>
				<table id="temi">
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Personalizzabile</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Sportivo</td>
                    <td>Si</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Business</td>
                    <td>Si</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Semplice</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Elegante</td>
                    <td>Si</td>
                  </tr>
              </table>
                </div>
   				<br>
              <div id="crea-blog" align="center">
              	  <br><br><br><br><br><br>
                  <button><a  href="crea_nuovo_b/nuovo_b.html"><h3>CREA NUOVO BLOG</h3></a></button>
              </div>
             </div>
         	</div>
            
            
        <div class="footer">
          <p>&copy;Copyright, Michele Raffaele Mari</p>
        </div>
    
  </body>
</html>