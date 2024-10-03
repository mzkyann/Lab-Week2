<?php 
include 'variables.php';
$umur = $ryan->get_age();
echo "<br>";
if ($umur > 18) {
  echo "Anda Sudah Dewasa";
} else{
    echo "Anda Masih Bocah";
}
?>