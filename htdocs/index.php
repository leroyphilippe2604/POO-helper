<?php
    require_once "form.php";
    require_once "html.php";
    require_once "validator.php";
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
echo $form->checkInput("radio", "genre", ["male", "female", "Canard"]);
echo $form->checkInput("checkbox", "genre", ["male", "female", "Unicorn"]);
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

<h2> etape 3 </h2>
<?php

$validate = new validator();

echo $validate->bool("false");
/* echo $validate->string("string"); */
echo $validate->int(45);
echo $validate->float(45.4);
echo $validate->email("blabla@outlook.com");
?>

</body>
</html>
