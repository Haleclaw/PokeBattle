<?php

    // all requires //

    require 'pokemon.php';
    require 'Pikachu.php';
    require 'Charmeleon.php';
    require 'header.php';

    // pokemon class // 

    $pikachu = new pikachu();
    $charmeleon = new charmeleon();

    // status page // 

    $status = $_GET['status'];
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

                    <div class='card-body'>
                    <h2 class='card-title'> battle info </h2>

                        <?php 
                            // if button is true then it shows the battle // 

                            if ($status == 'battle') {
                                echo $pikachu->name . ' VS ' . $charmeleon->name ;
                            }

                            else{
                            echo 'Er is nog geen data'; 
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