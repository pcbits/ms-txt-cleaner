<?php
$output = '';
if ($_POST['action'] == 'Convert') {
    $output = str_replace(' ',' ',$_POST['txt']);
    $output = str_replace('‘','\'',$output);
    $output = str_replace('’','\'',$output);
}
?>
<form method="POST">
<textarea cols="80" rows="20" name="txt"><?=$_POST['txt']?></textarea><br>
<input type="submit" name="action" value="Convert"/>
</form>
<br>
<pre>
<?=$output?>
</pre>

