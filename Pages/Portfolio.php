<?php require_once(__DIR__.'/Repeat_Elements.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav id='portfolioNav'>
        <ul class='d-flex justify-content-start align-items-center'>
            <li class='me-5 rounded p-2 ps-3 pe-3 <?php echo isset($_GET["Type"]) && $_GET["Type"] === "All Websites"? "active" : "" ?>'>All Websites</li>
            <li class='me-5 rounded p-2 ps-3 pe-3 <?php echo isset($_GET["Type"]) && $_GET["Type"] === "Frontend Website" ? "active" : "" ?>'>Frontend Website</li>
            <li class='me-5 rounded p-2 ps-3 pe-3 <?php echo isset($_GET["Type"]) && $_GET["Type"] === "Backend Website"? "active" : "" ?>'>Backend Website</li>
            <li class='me-5 rounded p-2 ps-3 pe-3 <?php echo isset($_GET["Type"]) && $_GET["Type"] === "Full Stack Website"? "active" : "" ?>'>Full Stack Website</li>
        </ul>
    </nav>
    <section id='Portfolio' class='ms-5 me-4 mt-5 d-flex flex-wrap justify-content-start align-items-start h-100' style='gap:30px'>
        <?php
            foreach($Portfolioes as $Portfolio){
                if(isset($_GET["Type"]) && $_GET["Type"] === "Frontend Website" && str_contains($Portfolio[4],$_GET["Type"])){
                    echo protfolio_fun($Portfolio);
                }else if(isset($_GET["Type"]) && $_GET["Type"] === "Backend Website" && str_contains($Portfolio[4],$_GET["Type"])){
                    echo protfolio_fun($Portfolio);
                }else if(isset($_GET["Type"]) && $_GET["Type"] === "Full Stack Website" && str_contains($Portfolio[4],$_GET["Type"])){
                    echo protfolio_fun($Portfolio);
                }else if(isset($_GET["Type"]) && $_GET["Type"] === "All Websites"){
                    echo protfolio_fun($Portfolio);
                }
            }
        ?>
    </section>
</body>
</html>