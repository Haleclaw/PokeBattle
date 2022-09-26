<?php

    // this function let the pokemons fight and return the result //
    function pokemonFight($pikachu,$charmeleon){
        // display hitpoints//
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints ;
        echo "<br>";
        
        // Pikachu attacks // 
        echo $pikachu->name . '  attack with ' .$pikachu->Attacks->attackName;
        $charmeleon->hitpoints = $charmeleon->hitpoints - $pikachu->Attacks->attackStats;
        

        // display hitpoints//
        echo "<br>";   
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints ;
         

        // charmeleon attacks //
        echo "<br>"; 
        echo $charmeleon->name . '  attack with ' .$charmeleon->Attacks->attackName2;
        $pikachu->hitpoints = $pikachu->hitpoints - $charmeleon->Attacks->attackStats2;

        // display hitpoints//
        echo "<br>";   
        echo $pikachu->name . ' HP: '  . $pikachu->hitpoints . ' VS ' . $charmeleon->name . ' HP: ' . $charmeleon->hitpoints ;

    }


?>