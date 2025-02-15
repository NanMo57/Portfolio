<?php require_once(__DIR__ .'/Repeat_Elements.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nancy Al-Oqdeh Portfolio </title>
</head>
<body>
    <div id='History' class='d-flex justify-content-evenly align-items-start'>
        <div>
            <h3 class='mb-4'>Education</h3>
            <div id='Education' class='d-flex flex-column gap-4'>
                <?php 
                    $total_Courses = count($Courses);

                    foreach($Courses as $key=>$Course){
                        echo history_fun($Course,$key,$total_Courses);
                    }
                ?>
            </div>
        </div>

        <div>
            <h3 class='mb-4'>Work History</h3>
            <div id='Work' class='d-flex flex-column gap-4'>
                <?php 
                    $total_Works = count($Works);

                    foreach($Works as $key=>$Work){
                        echo history_fun($Work,$key,$total_Works);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>