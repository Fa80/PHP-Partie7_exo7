<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie7_Exo7</title>
</head>
<body>
  <?php
  /*Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier.
   Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier..*/
  ?>
  <?php
  if (empty($_GET['nom'])){
    ?>
    <form  action="index.php" method="get" enctype="multipart/form-data">
      <!--action = "index.php" nous permet de rediriger la page vers index.php. La methode GET nous permet de l'afficher sur la barre de recherche.  -->
      <p><label for="civilite">Civilité :</label>
        <select class="" name="civilite">
          <option value="monsieur">Monsieur</option>
          <option value="madame">Madame</option>
        </select>  </p>
        <p><label for="nom">Nom :</label>
          <input type="text" name="nom" value=""></p>
          <p><label for="prenom">Prénom :</label>
            <input type="text" name="prenom" value=""></p>
            <button type="submit" name="button">Submit</button>
            <input type="file" name="envoyer" value="">
          </form>
          <?php
        }else{
          $info = new SplFileInfo($_GET['envoyer']);//SplFileInfo permet de récuperer les informations d'un fichier.
          $extension = $info -> getExtension(); //-> permet d'appliquer une fonction à une variable.
          $baseName = $info -> getBasename(".$extension");// getBasename renvoie le nom de fichier modifié selon les paramettres mis dans les parentheses.
          echo 'Bonjour ' . $_GET['civilite'] . ' ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '. Vous avez envoyer un fichier avec l\'extension ' . ' ' .  $extension . ' et votre fichier s\'appelle ' . $baseName;
        }
        ?>
      </body>
      </html>
