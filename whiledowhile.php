<?php include "header.php" ?>
    <h1>While Loop</h1>
    <?php
      $grade = 0;
      #Infinite Loop
      //while($grade < 10) {
      //    echo "<p>I am less then ten</p>";
      //}
      while ($grade <10) {
          echo '<p>I am less than 10</p>';
          $grade++;
      }
      echo 'Exit Loop';
    ?>

    <h1>Do-While Loop</h1>
    <?php
    $grade = 0;
    do{
        echo "<p>I am do while loop</p>";
        $grade++;
    }while($grade < 10);

    echo 'Exit Loop';
    ?>
    
</body>
</html>