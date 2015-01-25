
<?php 
  require('components/config.php');
  $query = "SELECT * FROM subjects where visible=1 order by position";
  $result = mysqli_query($connect, $query);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

<body>
<ul>
<?php if($editmode) 
{ ?>
<li>
<a href="database_create.php">Lisa mingi uus</a>
</li>
<?php } ?>
  <?php
  while ($subject = mysqli_fetch_assoc($result)) { ?>
    <li> 
<?php echo $subject['menu_name']; ?>
<?php if($editmode) 
{?> <a href="database_update.php?id=<?php echo $subject['id']; ?>">Muuda</a>

<a href="database_delete.php?id=<?php echo $subject['id']; ?>">Kustuta</a>
<?php } ?>

    <?php } ?>
  </ul>
</body>
</html>
<?php mysqli_free_result($result);?>
<?php mysqli_close($connect);?>