


<?php






function Estimate_table($dataname,$component){

    include 'database.php';

    $column1="id";
    $column2="nom";
    $column3="service";
    $column4="date de début";
    $column5="date de fin";
    $column6="vos actions";
    $tabletitle="La liste de vos devis";
    $actions="<img id='see' class='white-image pictos' src='./src/icon/eye.png'/> <img  id='delete' class='white-image pictos' src='./src/icon/delete.png'/> <img id='print' class='white-image pictos' src='./src/icon/print.png'/> ";

    $query="SELECT ".$dataname." FROM ".$component;

    $request = $database->prepare($query);

    $request->execute();

    echo "<table>
    <thead>
        <tr>
            <th>".$tabletitle."</th>
        </tr>


        <tr id='columns'>

       <td>".$column1."</td>
       <td>".$column2."</td>
       <td>".$column3."</td>
       <td>".$column4."</td>
       <td>".$column5."</td>
       <td>".$column6."</td>


        </tr>




    </thead>
    <tbody>";
        
    while ($data = $request->fetch()){







            echo " <tr class='values'>";


            for($i=0; $i<5;$i++){


                echo "<td>".$data[$i]."</td>";
            }
          

            echo "<td>".$actions."</td>";
        
        
           echo "</tr>";
        
        
        ;





    }

    echo "</tbody></table>";
  

    
}


/*
function selectdatawhere($dataname,$component,$where){

    $query="SELECT ".$dataname." FROM ".$component."WHERE".;

    $request = $database->prepare($query);

    $request->execute();

    while($data = $request->fetch()){


        return $fetch;

        
    }

    
}
*/

?>