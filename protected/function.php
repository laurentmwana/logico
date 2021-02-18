<?php

// fonction qui gere les messages d'echec 
function danger(array $danger = null): void
{
    if(!empty($danger) && isset($danger)){
        echo " 
            <div class='alert alert-danger' >
                <ul >
        ";
        foreach ($danger as  $value) {

           echo "
        
            <li class=' '> {$value}</li>
           ";
        }
        
        echo " 
            </ul>
            <button type='button' class='btn btn-default btn-sm shadow mt-3' data-bs-dismiss='alert' aria-label='Close'>Fermer</button>
        </div>
        ";
    }
}


// fonction qui gere message de succes
// succes quand une valeur est convertit 
function success(array $success = null): void
{

    if(!empty($success) && isset($success)){

        echo " <div class='alert alert-success' >";
        foreach ($success as  $value) {
           echo $value . '</br>';
        }
        echo "
            <button type='button' class='btn btn-default btn-sm shadow mt-3' data-bs-dismiss='alert' aria-label='Close'>Fermer</button>
         </div> ";  
    }
}




