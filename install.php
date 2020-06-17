<?php

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"PHPEasyGit_Fast-Installer.php\"");


echo '
<?php
copy("'.'https://' . $_SERVER['HTTP_HOST'] . "/PHPEasyGitInstaller/installer.php".'", __FILE__);
header("Refresh:0");
?>
';

?>
