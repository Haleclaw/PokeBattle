<?php

    require 'pokemon.php';
    require 'header.php';

    $pokemon =  new pokemon('Piplip', 'water', '100', 'Water splash','gras' );


    $pokemon->displayPokemon();
?>


<html>
    <body>
        <div class='card d-flex flex-wrap align-content-center'>
            <div class="card-body">
                <h1 class='card-title'> Pokebattle </h1>
                <p> selecteer pokemon </p>
                <button type="button" class="btn btn-primary"> start battle </button>
            </div>
        </div>
        
    </body>
</html>