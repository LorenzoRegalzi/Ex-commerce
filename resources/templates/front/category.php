
<?php 

//creata la tabella nel database la andaimo a recuperare 
$query = 'SELECT*FROM categories';                      

$showcategories = mysqli_query($connection,$query);

//controlli in caso di fallimento 
if(!$showcategories){
    die('Richiesta fallita'.mysqli_error($connection));
}

//ciclo che ci permette di visualizzare le nostre categorie

while($row = mysqli_fetch_array($showcategories)){
    echo  "<a href='#' '>{$row['name_cat']}</a>";
}

?>

