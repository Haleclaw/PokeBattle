<?php

class pokemonBattle{

    // this function let the pokemons fight and return the result //
    function pokemonFight($pikachu, $charmeleon)
    {
        // display hitpoints//
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();
        echo "<br>";

        // Pikachu attacks // 
        echo $pikachu->getName() . '  attack with ' . $pikachu->getAttacks()->getAttackName();
        $updatedHitpoints = $charmeleon->getHitpoints() - $pikachu->getAttacks()->getAttackStats();
        $charmeleon->setHitpoints($updatedHitpoints);


        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();


        // charmeleon attacks //
        echo "<br>";
        echo $charmeleon->getName() . '  attack with ' . $charmeleon->getAttacks()->getAttackName2();
        $updatedHitpoints = $pikachu->getHitpoints() - $charmeleon->getAttacks()->getAttackStats2();
        $pikachu->setHitpoints($updatedHitpoints);

        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();

        // Pikachu attacks // 
        echo '<br>';
        echo $pikachu->getName() . '  attack with ' . $pikachu->getAttacks()->getAttackName2();
        $updatedHitpoints = $charmeleon->getHitpoints() - $pikachu->getAttacks()->getAttackStats2();
        $charmeleon->setHitpoints($updatedHitpoints);

        // display hitpoints//
        echo "<br>";
        echo $pikachu->getName() . ' HP: '  . $pikachu->getHitpoints() . ' VS ' . $charmeleon->getName() . ' HP: ' . $charmeleon->getHitpoints();
    }
}
