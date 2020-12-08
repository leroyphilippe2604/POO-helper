<?php
    require_once "form.php";
    require_once "html.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
<h2> etape 1 </h2>
<?php

$form = new form($_POST);

echo $form->create("post");
echo $form->input('text', 'user');
echo $form->select("genre", ["male", "female","Unicorn"]);
echo $form->textarea(10, "Dis nous bonjour");
echo $form->checkInput("radio", "genre", ["male", "female", "unicorn"]);
echo $form->checkInput("checkbox", "genre", ["male", "female", "unicorn"]);
echo $form->submit();
?>

<br>

<h2> etape 2 </h2>
<?php

$html = new html();

echo $html->css("assets/css/style.css");
echo $html->meta("viewport", "width=device-width, initial-scale=1.0");
echo $html->img('img/img.jpg', "image");
echo $html->link("http://www.facebook.com", "facebook");
echo $html->js('assets/js/script.js');
?>

</body>
</html>
