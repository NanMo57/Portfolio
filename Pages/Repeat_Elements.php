<?php
    $Performance_Metrics = [
        ['2+', 'Years Experience'],
        ['8', 'Completed Projects'],
        ['5', 'Happy Customers'],
        ['4+', 'Certifications Earned']
    ];
    $Services = [
        ['Web Application Development','A comprehensive service that includes creating user-friendly interfaces (Frontend) and robust, secure server-side functionality (Backend) to deliver seamless, fully functional web applications tailored to your needs.'],
        ['Cross-platform Solutions','Build seamless applications that run smoothly across multiple platforms, including web, mobile (iOS and Android), and desktop, ensuring a consistent user experience with reduced development time and cost.'],
        ['Real-time Applications','Build applications that provide instant updates and seamless communication, such as live chat, notifications, real-time tracking, and collaborative tools, ensuring users receive information without delays.'],
        ['Maintenance & Support','Maintenance & Support ensures your application or website stays updated, secure, and performs optimally. This service includes fixing bugs, updating features, enhancing performance, and providing ongoing technical assistance to ensure smooth operation and user satisfaction.'],
        ['Website Optimization',"Enhancing your website's speed, performance, and user experience while improving SEO rankings to ensure faster load times, better accessibility, and higher search engine visibility for your audience."],
        ['Integration Database Management','Integration Database Management refers to the process of combining and managing data from multiple sources into a unified system. It involves the use of various tools and services to ensure seamless access, maintenance, and synchronization of data across different platforms.'],
        ['E-commerce Solutions','E-commerce solutions refer to the services and tools provided to businesses and users to enable online buying and selling. such as build Online Store Setup, Payment Gateway Integration , Management , Delivery Integration , Customer Support Tools, SEO & Marketing'],
        ['API Development & Integration','API Development & Integration services involve creating custom APIs (Application Programming Interfaces) that allow different software systems to communicate with each other. These services enable businesses to integrate third-party applications, data sources, or services into their systems seamlessly.'],
        ['Deployment & Hosting','Deployment and hosting refer to services provided to ensure that a web application or website is made accessible to users on the internet. Together, deployment and hosting ensure that your application is up and running, performing well, and accessible by users across the internet.']
    ];
    $Recommendation = [
     
    ];
    
    $Portfolioes = [
        ['https://res.cloudinary.com/dz7qsbzlz/image/upload/v1734982489/jagmiumxnlvomet8hf8g.png','Cozy Nest Design Home','https://nanmo57.github.io/Cozy-Nest-Design-Home/','https://github.com/NanMo57/Cozy-Nest-Design-Home.git','Frontend Website Category'],
        ['https://res.cloudinary.com/dz7qsbzlz/image/upload/v1735435555/zhuk2uqv0ramnodefz40.png','Weather Forecast','https://nanmo57.github.io/Weather-Forecast-App/','https://github.com/NanMo57/Weather-Forecast-App.git','Frontend Website Category'],
        ['https://res.cloudinary.com/dz7qsbzlz/image/upload/v1737139093/ofnlncx2ixswmi5dltnk.png','Guess The Word','https://nanmo57.github.io/Guess-The-Word-Game/','https://github.com/NanMo57/Guess-The-Word-Game.git','Frontend Website Category'],
        ['https://res.cloudinary.com/dz7qsbzlz/image/upload/v1739399268/xo3rgpl7mmot0p8w6ftz.png','Skyline - School System','https://nanmo57.github.io/Skyline-School-System/','https://github.com/NanMo57/Skyline-School-System.git','Frontend Website Category'],
        ['https://res.cloudinary.com/dz7qsbzlz/image/upload/v1739569282/c0oy4lqiant0tuz7slbo.png','NOUVIL','https://nanmo57.github.io/NOUVIL/','https://github.com/NanMo57/NOUVIL.git','Frontend Website Category'],
    ];

    $Courses = [
        [
            "name"=>'Frontend Developer',
            "institution"=>'Datos Solution Company',
            "period"=>['4/2023','5/2023'],
            "description"=>'The training covered fundamental concepts of frontend development, including jQuery, AJAX, and Bootstrap.',
            "certificate"=>''
        ],
        [
            "name"=>'Frontend Developer',
            "institution"=>'Education For Employe (efe)',
            "period"=>['3/2023','4/2023'],
            "description"=>'The training focused on the fundamentals of frontend development, covering HTML, CSS, and JavaScript.',
            "certificate"=>''
        ],
        [
            "name"=>'Full Stack Developer',
            "institution"=>'Clever Mind POP',
            "period"=>['4/2023','present'],
            "description"=>'The training cover frontend languages, including HTML, CSS, JavaScript, and jQuery, as well as backend technologies such as PHP and MySQL, along with additional features and functionalities.',
            "certificate"=>''
        ],
        [
            "name"=>'Adobe Photoshop',
            "institution"=>'ABC Academy',
            "period"=>['10/2022','11/2022'],
            "description"=>'The training focused on Adobe Photoshop, covering its essential tools and features.',
            "certificate"=>''
        ],
        [
            "name"=>'ICDL',
            "institution"=>'ABC Academy',
            "period"=>['10/2022','11/2022'],
            "description"=>'The training focused on ICDL, covering its essential tools and features.',
            "certificate"=>''
        ]
    ];

    $Works = [
        [
            "name"=>'Project Governance ',
            "institution"=>'Water Authority Of Jordan',
            "period"=>['8/2024','1/2025'],
            "description"=>'',
            "certificate"=>''
        ],
        [
            "name"=>'Web Developer & Gamming Designer',
            "institution"=>'Tamra Games',
            "period"=>['1/2024','5/2024'],
            "description"=>'',
            "certificate"=>''
        ]
    ];

    


    function RepeatElement($element, $data) {
        if ($element === 'Performance_Metrics') {
                return "<div class='fs-5'><b class='fs-2 me-2'>".$data[0]."</b>".$data[1]."</div>";
        }else if($element === 'Services'){
            return "<div class='card shadow'>
                        <div class='card-body'>
                            <h5 class='card-title mb-4'>".$data[0]."</h5>
                            <p style='color:var(--light_gray)'>".$data[1]."</p>
                            <a href='./?Page=Contact' class='btn' style='color:var(--orange);font-size:13px'>ORDER NOW <span class='ms-3' style='color:var(--orange)'>></span></a>
                        </div>
                    </div>";
        }else if($element === 'Recommendations'){
            return "<div class='position-relative swiper-slide'>
                        <img src='".$data[0]."' alt='recomended_Img' class='rounded-pill border border-2 border-light position-absolute end-0 me-3'/>
                        <div class='card shadow p-3 pt-4 pb-4 d-flex flex-column align-items-start justify-content-start' style='gap:20px'>
                            <div>
                                <h5 class='card-title mb-0 fw-3'>".$data[1]."</h5>
                                <p class='m-0 mt-2 ps-2 p-0' style='color:var(--light_gray)'>".$data[2]."</p>
                            </div>
                            <p>".$data[3]."</p>
                            <div class='rate rounded p-2 ps-3 pe-3 d-flex justify-content-start align-items-center' style='gap:8px'>".
                                str_repeat("<i class='fa-solid fa-star lightStar'></i>", $data[4]) . 
                                str_repeat("<i class='fa-solid fa-star'></i>", 5 - $data[4]) .
                            "</div>
                        </div>
                    </div>";
        }
    }


    function history_fun($block,$key,$total_blocks){
        return "<div class='block d-flex justify-content-between alig-items-start'>
            <div class='card align-items-start p-2 pt-4'>
                <div class='d-flex justify-content-between align-items-center w-100 mb-3'>
                    <div class='title'>
                        <h5 class='name mb-1'>".$block["name"]."</h5>
                        <p class='mb-0 institution'>".$block["institution"]."</p>
                    </div>
                    <div class='period'><span class='from'>".$block["period"][0]."</span><span class='ms-1 me-1'>-</span><span class='from'>".$block["period"][1]."</span></div>
                </div>".
                ($block["description"]?"<p class='description mb-0 pt-2 pb-2'>".$block["description"]."</p>":"") .
                ($block['certificate']?"<button type='button' class='btn btn-md ps-0'><span>certificate</span><b><i class='fa-solid fa-angle-right ms-3'></i></b></button>":"")
            ."</div>
            <div class='pointer d-flex flex-column align-items-center pb-0'>
                <div class='circle'><span></span></div>
                <hr class='m-0' style='height:".($key<$total_blocks - 1 ? 'calc(100% + 20px)' : 'calc(100% - 20px)')."' />
            </div>
        </div>";
   }

   function protfolio_fun($Portfolio){
    return "<div class='card shadow'>
        <img src='".$Portfolio[0]."' alt='portfolio' class='card-img-top'/>
        <div class='card-body p-0 shadow'>
            <h5 class='card-title fw-bolder ps-2 pe-2'>".$Portfolio[1]."</h5>
            <div class='w-100 p-2 justify-content-center align-items-center shadow'>
                <div class='d-flex justify-content-start align-items-center' style='gap:30px'>
                    <div class='d-flex justify-content-start align-items-center w-100' style='gap:30px'>
                        <a class='fa-solid fa-laptop-code p-2 border rounded text-center fs-4 shadow' target='_blank' href='".$Portfolio[2]."'></a>
                        <a class='fa-brands fa-github p-2 border rounded text-center fs-3 shadow' target='_blank' href='".$Portfolio[3]."'></a>
                    </div>
                    <i class='fa-solid fa-circle-info p-2 border rounded text-center fs-3 shadow' href=''></i>
                </div>
            </div>
            <span class='card-footer w-100 d-block border-0'>$Portfolio[4]</span>
        </div>
    </div>";
   }
?>
