<?php
function getRecipes(){
    try{
        $database = new PDO ('mysql:host=localhost;
        dbname=partage_de_recettes;
        charset=utf8',
        'root',
        '');
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die($e->getMessage());
    }
     
       $sqlQuery='SELECT * FROM  recipes';
       $sqlStatement =$database->query($sqlQuery);
        $recipes=[];
       while($row=$sqlStatement->fetch()){
            $recipe=[
                'nom'=>$row['title']
            ];
            $recipes[]=$recipe;
       }

       return $recipes;
}


    



 