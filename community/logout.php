<?php
session_start();
session_destroy();


echo "

<script language=javascript>
alert ('Anda telah log keluar!');document.location='index.php';
</script>
";

?>