<?php

    function query($sql){
        global $connection;                      //per essere richiamata ovunque ci serva
        return mysqli_query($connection,$sql);
    }

    function confirmation($result){
        //controlli in caso di fallimento 
        global $connection;
        if(!$result){
        die('Richiesta fallita'.mysqli_error($connection));
        }
    }


    function fetch_array($result){
        return mysqli_fetch_array($result);
    }

    function mostraProdotti(){
      $showproducts = query('SELECT*FROM products');
        
        confirmation($showproducts);

        while($row = fetch_array($showproducts)){
            // echo $row['name_products'];
            
        }
    }

?>