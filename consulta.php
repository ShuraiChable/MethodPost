<?php
    echo '<link href="estilo.css" type="text/css" rel="stylesheet">';
    $resultado = file_get_contents('https://restcountries.eu/rest/v2/region/Americas?fields=name;capital;flag', true);
    $arreglo = json_decode($resultado, true);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['name'])){
            print "<div class='centro'><table class='table'>
                <thead>
                    <tr>
                        <td><b>NAME</b></td>
                    </tr>
                </thead>
                <tbody>";
            foreach($arreglo as $_post){
                print "<tr>
                        <td>".$_post['name']."</td>
                    </tr>";        
            }
            print "</tbody>
            </table> </div>";
        } 
        if(isset($_POST['capital'])){
            print "<div class='centro'><table class='table'>
                <thead>
                    <tr>
                        <td><b>CAPITAL</b></td>
                    </tr>
                </thead>
                <tbody>";
            foreach($arreglo as $_post){
                print "<tr>
                        <td>".$_post['capital']."</td>
                    </tr>";        
            }
            print "</tbody>
            </table> </div>";
        }
        if(isset($_POST['flag'])){
            print "<div class='centro'><table class='table'>
                <thead>
                    <tr>
                        <td><b>FLAG</b></td>
                    </tr>
                </thead>
                <tbody>";
            foreach($arreglo as $_post){
                print "<tr>
                        <td>".$_post['flag']."</td>
                    </tr>";        
            }
            print "</tbody>
            </table> </div>";
        }
        
    } 
?>