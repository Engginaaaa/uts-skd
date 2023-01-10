
<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

?> <script>
alert("Keluar berhasil")
window.location="../index.php"
</script> <?php

exit;

?>