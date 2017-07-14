<?php
    include_once("header.php"); 
    $showActivites = $bdd->prepare("SELECT * FROM activites WHERE etat <> ?  ORDER BY ID_activites DESC LIMIT 0, 10");
    $showActivites->execute(array("hide"));
    echo'<div id="content">';

    while($data = $showActivites->fetch()){  
        echo'
                <div class="item">
                    <div class="itemImages">
                        <img src="admin/img/uploads/'.$data['photo'].'"/>
                    </div>
                    <div class="itemText">
                        <div class="itemTitre">
                            '.$data['titre'].'
                        </div>
                        <div class="itemDesc">
                            '.$data['description'].'

                            Barack Obama s\'exprimera lors d\'une réunion au profit d\'un nouveau comité démocrate, le National Democratic Redistricting Committee,
                            dirigé par son ancien ministre.
                           
                        </div>
                   
                        <table id="tableOptions">
                            <tr>	
                                <td class="edit" name="'.$data['ID_activites'].' "> Lire la suite </td>
                            </tr>
                        </table>
                    </div>
                </div>	  
        ';
    }	
echo'</div>';
include_once("footer.php");
?>
