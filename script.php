<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>


<?php
shell_exec("test.sh");
header('Location: http://captainlebyadkin.github.io/page?success=true');
?>
