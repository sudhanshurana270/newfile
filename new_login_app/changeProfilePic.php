<?php
$userc = new DB_con();
//$new = $userc->dispimg($query);
// print_r($new);
if (isset($_POST['submit']) && isset($_FILES['img'])) {
  $img = $_FILES["img"]["name"];
  $folder = "uploads/";
  $f1 = $folder . date("dmyis") . basename($_FILES['img']['name']);
  move_uploaded_file($_FILES['img']['tmp_name'], $f1);
  $userc->updateimg($img, $uname);
  $added = $userc->dispimg($query);
  echo "new image";
  echo "<img  src='uploads/" . $added['image'] . "' >";
}
?>