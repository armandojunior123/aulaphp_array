<?php
   include "header.php";
   include "dados.php";
   //recuperar o id por GET
   $id = $_GET["id"] ?? null;
   //verificar se o id esta em branco
   if ( empty ($id)) {
       echo "<script>alert('serie nao encontrada');
       history.back();</script>";
   }

   $nome = $series[$id]["nome"];
   $imagem = $series[$id]["imagem"];
   $sinopse = $series[$id]["sinopse"];
   
?>
<main>
  <div class="grid-2">
      <div class="coluna">
        <img src="imagens/<?=$imagem?>">
      </div>
  </div>
</main>
<?php include "footer.php"; ?>