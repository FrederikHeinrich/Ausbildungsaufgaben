<?php
session_start();
session_destroy();
header("Location: localhost/?page=schule&thema=form");
exit();
?>