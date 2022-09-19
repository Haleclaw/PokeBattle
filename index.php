<?php

    require 'pokemon.php';
    require 'Pikachu.php';
    require 'Charmeleon.php';
    require 'header.php';

    $pikachu = new pikachu();
    $charmeleon = new charmeleon();
?>


<html>
    <body>
        <div class='card d-flex flex-wrap align-content-center list-group-item-success' style='margin-left: 150px; margin-right: 150px;'>
            <div class="card-body">
                <h1 class='card-title'> Pokebattle </h1>

                <div class="d-flex justify-content-between">
                    <p class="btn btn-warning"> <?php echo $pikachu->name ?></p>
                    <p>  VS  </p>
                    <p class="btn btn-danger"> <?php echo $charmeleon->name ?></p>

                </div>

                <div class='text-center'>
                    <button type="button" class="btn-lg btn-success "> Start battle </button>
                </div> 
            </div>
        </div>
        
    </body>
</html>