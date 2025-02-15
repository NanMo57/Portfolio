<!DOCTYPE html>
<html lang="en">
<body>
    <section id='Content'>
        <div class='container d-flex flex-column justify-content-between w-100'>
            <?php 
                if(!isset($_GET['Page']) || $_GET['Page'] == 'Home'){
                    require_once('./Pages/Home.php');
                }elseif($_GET['Page'] == 'Portfolio'){
                    require_once('./Pages/Portfolio.php');
                }elseif($_GET['Page'] == 'History'){
                    require_once('./Pages/History.php');
                }elseif($_GET['Page'] == 'Contact'){
                    require_once('./Pages/Contact.php');
                }
            ?>
            <?php require_once('./Pages/Static/Footer.php') ?>
        </div>
    </section>
</body>
</html>