<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          foreach ($students as $hero){
            echo $hero.'</br>';
          }

        ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <?php
       $days=
       ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30", "31"];
       ?>
       <label for="day">Day</label>
       <select name="day">

         <?php
          foreach ($days as $day){
            echo '<option value="'.$day.'">'.$day.'</option>';
          }
         ?>
       </select>

       <label for="month">Month</label>
       <select  name="month">
       <?php
        $months= ["1","2","3","4","5","6","7","8","9","10","11","12"];
        foreach ($months as $month){
          echo '<option value="'.$month.'">'.$month.'</option>';
        }
       ?>
       </select>
       <label for="year">Year</label>
       <select  name="year">
         <?php
          $years= ["1990", "1991", "1992", "1993", "1994", "1995", "1996", "1997", "1998", "1999", "2000"];
          foreach ($years as $year){
            echo '<option value="'.$year.'">'.$year.' </option>';
          }
         ?>
       </select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php
     if ($_GET['sexe']==='fille'){
        echo '<p> Je suis une fille </p>';
      };
     ?>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <?php
     if ($_GET['sexe']==='garçon'){
     echo '<p>Je suis un garçon</p>';
   };
     ?>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->

     <?php
    if (!isset($_GET['sexe']) || (empty($_GET['sexe'])) || ($_GET['sexe']!=='fille') && ($_GET['sexe']!=='garçon')){
    echo '<p>je suis indéfini </p>';
  };

  ?>



  </body>
</html>
