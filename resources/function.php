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
            $products = <<<STRINGA_PDT

            <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
            <img class="card-img-top" src="../resources/{$row['image']}" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="prodotto.php?id={$row['id_products']}">{$row['name_products']}</a>
                </h4>
                <h5>€{$row['price']}</h5>
                <p class="card-text">{$row['describe']}</p>
              </div>
              <div class="card-footer text-center">
             <a href="carrello.php?add={$row['id_products']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
             <a href="prodotto.php?id={$row['id_products']}" class="btn btn-success btn-small">Dettagli</a>
              </div>
            </div>
          </div>
        STRINGA_PDT;
        echo $products;
        }
    }

?>