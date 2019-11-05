<?php
echo "je suis la";
echo "<pre>";
print_r($_POST);
for($i=0;$i<$_POST['nbreInput'];$i++){
	echo $_POST['input'.$i]."<br/>";
}
echo "le valeur est ".$_POST['pays'];
?>
