<?php

    // all requires //

    require 'pokemon.php';
    require 'pokemonBattle.php';
    require 'Pikachu.php';
    require 'Charmeleon.php';
    require 'header.php';

    // pokemon class // 
    $pikachu = new pikachu();
    $charmeleon = new charmeleon();
    $pokemonBattle = new pokemonBattle();

    // status page // 

    $status = $_GET['status'];
?>


<html>
    <body>
        <div class='card d-flex flex-wrap align-content-center list-group-item-success' style='margin-left: 150px; margin-right: 150px;'>
            <div class="card-body">
                <h1 class='card-title'> Pokebattle </h1>

                <div class='d-flex justify-content-between'>
                    <img id='icon' src="img/pikachu.png" alt="pikachu">
                    <img id='icon' src="img/charmeleon.png" alt="charmeleon">
                </div>

                <div class="d-flex justify-content-between">
                    
                    <p class="btn btn-warning"> <?php echo $pikachu->getname() ?></p>
                    <p>  VS  </p>
                    <p class="btn btn-danger"> <?php echo $charmeleon->getname() ?></p>
                </div>

                    <div class='card-body'>

                        <?php 
                            // if button is true then it shows the battle // 

                            if ($status == 'battle') {
                                $pokemonBattle->pokemonFight($pikachu,$charmeleon);
                            }

                            else{
                                echo ''; 
                            }
                        ?>

                        <?php 
                            // if button is true then it shows the living pokemons // 

                            if ($status == 'battle') {
                                echo '<h3> aantal levende pokemons: </h3>';
                                echo '<br>';
                                $pikachu->getPopulation($pikachu,$charmeleon);

                            }

                            else{
                                echo ''; 
                            }
                        ?>
                     </div>

                <div class='text-center'>
                    <button type="button" class="btn-lg btn-success" onclick = 'location.href ="index.php?status=battle"'> Start battle </button>
                </div> 
            </div>
        </div>
        
    </body>
</html>