<?php
  include_once 'includes/survey.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-7 mx-auto mt-3 bg-secondary text-white p-3 rounded">
                <h2>¿Cuál es tu lenguaje de programación favorito?</h2>
                <form action="#" method="post">
                <?php

                  $showResults = false;

                  $survey = new Survey();
                  if ( isset( $_POST['lenguaje'] ) ) {
                    $survey->setOptionSelected( $_POST['lenguaje'] );
                    $survey->vote();

                    $showResults = true;
                  }

                  // echo $survey->getTotalVotes();

                  if ( $showResults ) {
                    $lenguajes = $survey->showResults();

                    echo '<h2>' . $survey->getTotalVotes() . '</h2>';

                    foreach ($lenguajes as $lenguaje ) {
                      $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);
                      
                    }
                  }


                  ?>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lenguaje" id="c" value="c" checked>
                        <label class="form-check-label" for="c">
                          C
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="lenguaje" id="c++" value="c++">
                        <label class="form-check-label" for="c++">
                          C++
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="lenguaje" id="java" value="java">
                        <label class="form-check-label" for="java">
                          Java
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="lenguaje" id="swift" value="swift">
                        <label class="form-check-label" for="swift">
                          Swift
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="lenguaje" id="python" value="python">
                        <label class="form-check-label" for="python">
                          Python
                        </label>
                      </div>

                      <button type="submit" class="btn btn-primary">Votar</button>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>