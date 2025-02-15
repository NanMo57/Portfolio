<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nancy Al-Oqdeh Portfolio</title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class='d-flex justify-content-end align-items-center'>
        <?php 
            require_once('./Pages/Static/Personal_Info_section.php');

            require_once('./Pages/Static/Content.php');

            require_once('./Pages/Static/Header.php');
        ?>
    </div>

    <script type='module' src='./script/Home.js'></script>
    <script src='./script/Header.js'></script>
    <script src='./script/Portfolio.js'></script>
    <script src='./script/Contact.js'></script>

</body>
</html>