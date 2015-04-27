<?php
if($_POST["message"]) {
    mail("rebecca_dagenais@live.ca", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>