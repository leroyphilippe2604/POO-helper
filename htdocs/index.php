<?php
    require_once "form.php";

    $form = new form($_POST);

    echo $form->create("post");
    echo $form->input('text', 'user');
    echo $form->select("genre", ["male", "female","Unicorn"]);
    echo $form->textarea(10, "Dis nous bonjour");
    echo $form->checkInput("radio", "genre", ["male", "female", "unicorn"]);
    echo $form->checkInput("checkbox", "genre", ["male", "female", "unicorn"]);
    echo $form->submit();
?>