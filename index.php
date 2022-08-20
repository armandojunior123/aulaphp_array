<?php
       include "header.php";
       include "dados.php";

      // echo "<pre>";
      //print_r( $series);
      // echo "</pre>";
?>

<main>
    <h1>Serie em destaque:</h1>
    <div class="grid">
        <?php
           $i = 0;
           shuffle($serie);
           foreach ( $series as $serie) {

             $i++;
             if ( $i > 4 ) break;  }
           
               $id = $serie["id"];
               $nome = $serie["nome"];
               $imagem = $serie["imagem"];
             
               echo "<div class='coluna'>
                    <img src='imagens/{$imagem}'>
                    <p><strong>{$nome}</strong></p>
                    <p>
                        <a href='serie.php?id={$id}'>
                          detalhes
                        </a>
                    </p>
                </div>";

           }
        ?>
    </div>
</main>

<?php include "footer.php"; ?>

