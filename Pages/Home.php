<?php require_once(__DIR__ . '/Repeat_Elements.php');?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div id='WelcomeBlock' class='position-relative'>
        <div class='shadow w-100 position-relative'><img src='https://miller.bslthemes.com/arter-demo/img/bg.jpg' alt='' class='position-relative'/></div>
        <div class='info position-absolute w-100 h-100 top-0 ps-5 pe-2 d-flex justify-content-between align-items-center'>
            <div class='flexColumnCenter align-items-start w-75 h-100' style='gap:20px'>
                <h2 class='fw-bolder'>Discover My Amazing <br/>Web Development Space!</h2>
                <p><<span style='color:var(--orange)'>code</span>> <span class='writingTextIntro' style='word-spacing: 5px;'></span> <<span style='color:var(--orange)'>code</span>/></p>
                <button class='btn text-uppercase p-2 ps-3 pe-3  letter' style='background-color:var(--orange) !important;letter-spacing: 2px;'>Explore Now</button>
            </div>
            <div><img src='https://res.cloudinary.com/dz7qsbzlz/image/upload/v1734808371/nysy9irtdzk4nla1uozh.png' alt='profile_img' class='position-relative'/></div>
        </div>
    </div>

    <div id='Performance_Metrics' class='d-flex justify-content-between align-items-center p-3 pt-5'>
        <?php
            for($index=0 ; $index<count($Performance_Metrics) ; $index++){
                echo RepeatElement('Performance_Metrics',$Performance_Metrics[$index]);
            }
        ?>
    </div>

    <div id='Services' class='mt-5'>
        <h3 class='mb-5'>My Services</h3>
        <div class='d-flex justify-content-between align-items-start flex-wrap' style='gap:30px'>
            <?php
                for($index=0 ; $index<count($Services) ; $index++){
                    echo RepeatElement('Services',$Services[$index]);
                }
            ?>
        </div>
    </div>

    <!-- <div id='Recommendations' class='mt-5 w-100 position-relative'>
        <h3 class='mb-4'>Recommendations</h3>
        <div class='swiper mySwiper'>
            <div class='swiper-wrapper'>
                <?php
                    for($index=0 ; $index<count($Recommendation) ; $index++){
                        echo RepeatElement('Recommendations',$Recommendation[$index]);
                    }
                ?>
            </div>
            <div class='d-flex justify-content-between align-items-center p-3'>
                <div class="swiper-pagination position-relative w-50 d-flex justify-content-start align-items-center top-0 bottom-auto"></div>
                
                <div class='d-flex justify-content-end align-items-center w-50'>
                    <i class="fa-solid swiper-button-prev  position-relative text-secondary start-auto end-0 m-0 w-auto h-auto top-0 me-4"></i>
                    <i class="fa-solid swiper-button-next  position-relative text-secondary start-0 end-auto m-0 w-auto h-auto top-0"></i>
                </div>
            </div>
        </div>
    </div> -->
</body>
</html>