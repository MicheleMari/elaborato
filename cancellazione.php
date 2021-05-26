<html>
    <head>

        <title>SIGMA | ELIMINA ACCOUNT</title>

    </head>

    <body>
<?php
			session_start();
            $ris_conn = mysql_connect("localhost", "root", ""); //1-connessione server(n.server,n.utente,pass)

            if ( !$ris_conn)
                echo "Impossibile connettersi al server"; // errore di connessione server
            else{

                $ris_db = mysql_select_db("my_mari"); //2-selezione del DB

                if ( !$ris_db)
                    echo "Impossibile agganciare il DB"; // errore su DB
                else{
					
                    $ID = $_SESSION['ID'];
                    
                    $comando1 = "DELETE FROM utenti WHERE ID='$ID' ";  // comando sql (ins. record nella tabella utenti)

                    $canc = mysql_query($comando1);

                    if (!$canc)
                        echo "Impossibile eseguire la query"; // errore comando sql
                    else{
                    
                    		header("Location: ../../login/login.html");

                            mysql_free_result($canc); // pulizia $ins
                            }
                        }
                        mysql_close($ris_conn); // chiusura connessione server
                }
    
?>
        <!-- PHP -->
    </body>
</html>
