<?php


if (isset($_POST['input-form-name'])) {
    $name = $_POST['input-form-name'];
    $mailFrom = $_POST['input-form-email'];
    $subject = $_POST['input-form-subject'];
    $message = $_POST['textarea-form-message'];

    $mailTo = "admin@davidpukalik.cz";
    $headers = "From ".$mailFrom." on site davidpukalik.cz";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}

?>