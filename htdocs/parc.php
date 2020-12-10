<?php
    require_once "voiture.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parc voiture</title>
</head>
<body>
    <table>
        <tr>
            <th> Reservation </th>
            <th> Marque </th>
            <th> Modele </th>
            <th> Kilometre </th>
            <th> Color </th>
            <th> Poids </th>
            <th> Circulation </th>
            <th> Immatriculation </th>
        </tr>

        <?php
            $voiture1 = new voiture("Audi", "A3" , 10000, "vert", 1300, "2010","BE-4324-ABC" ,"https://www.cars-data.com/webp/audi/audi-a1_3258_1.webp");
            echo $voiture1->display();
            $voiture2 = new voiture("Ford", "Mustang GT 500" , 236000, "gris", 1800, "1967","BE-2077-CPK" ,"https://upload.wikimedia.org/wikipedia/commons/f/f6/1967_Ford_Mustang_Shelby_GT-500_Eleanor.jpg");
            echo $voiture2->display();
            $voiture3 = new voiture("Citroen", "Xantia" , 300000, "rouge", 1300, "2000","FR-8081-SQL" ,"https://i.pinimg.com/originals/98/38/44/9838447884c6b80d830af257a9873666.jpg");
            echo $voiture3->display();
            $voiture4 = new voiture("Delorean", "DMC-12" , 100000000, "metal", 1230, "1982","DE-0UT-TIM" ,"https://www.auto-forever.com/wp-content/uploads/2017/12/DMC-12_1982_1-1030x773.jpg");
            echo $voiture4->display();
            $voiture5 = new voiture("JEEP", "Wrangler YJ" , 100000, "rouge", 1340, "1992","BE-COD-600" ,"https://www.journaldugeek.com/files/2011/05/jurassic-park-jeep-01-540x405.jpg");
            echo $voiture5->display();
            $voiture6 = new voiture("Mitsubishi", "Eclipse" , 424242, "vert", 1250, "1990","BE-111-RIP" ,"https://fr.web.img6.acsta.net/r_1920_1080/newsv7/15/03/30/10/31/3199440.jpg");
            echo $voiture6->display();
            $voiture7 = new voiture("Mach", "5" , 198700, "Blanc", 1000, "2080","DE-555-MAC" ,"https://fr.web.img2.acsta.net/r_1920_1080/newsv7/15/03/29/19/50/1562840.jpg");
            echo $voiture7->display();
            $voiture8 = new voiture("Mazda", "RX-7" , 00000, "jaune", 1300, "1997","BE-F45T-TKD" ,"https://fr.web.img3.acsta.net/r_1920_1080/newsv7/15/03/30/10/36/2768500.jpg");
            echo $voiture8->display();
            $voiture9 = new voiture("Chevrolet", "Camaro" , 55000, "jaune", 1470, "2015","BE-BOT-AUTO" ,"https://fr.web.img6.acsta.net/r_1920_1080/newsv7/15/03/29/20/07/2677710.jpg");
            echo $voiture9->display();
        ?>
    </table>
</body>
</html>