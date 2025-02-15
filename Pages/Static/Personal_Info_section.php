<!DOCTYPE html>
<html lang="en">
<body>
    <section id='personalInfo' class='shadow'>
        <div id='profileCard' class='flexColumnCenter shadow' style='--gap:8px'>
            <img src='https://res.cloudinary.com/dz7qsbzlz/image/upload/v1734808371/nysy9irtdzk4nla1uozh.png' alt='profile_logo' id='logo' class='rounded-pill border border-2'/>
            <h1 class='mt-2'>Nancy Al-Oqdeh</h1>
            <p class='p-0 m-0'>Full Stack Developer - React JS & PHP</p>
        </div>
        <div id='aboutMe' class='ps-3 pe-3'>
            <div id='personalInformation' class='bottomLine flexColumnStart'>
                <div><label>Address :</label><span>Jordan,Amman - UmUthaina</span></div>
                <div><label>Birthday :</label><span>5/7/1999</span></div>
            </div>
            <div id='academicInformation' class='bottomLine flexColumnStart'>
                <div><label>University :</label><span class='text-center'>University of Jordan</span></div>
                <div><label>Department :</label><span class='text-center'>Computer Information System - CIS</span></div>
                <div><label>Graduated :</label><span class='text-center'>Aug,2022</span></div>
                <div><label>Average :</label><span class='text-center'>Very Good</span></div>
            </div>
            <div id='languages' class='bottomLine flexRowCenter'>
                <div class='language'>
                    <div class='circle' style='--valPercentage:100%'><span class='percentage'>100%</span></div>
                    <label class='lang m-0 mt-3'>Arabic</label>
                </div>
                <div class='language'>
                    <div class='circle' style='--valPercentage:60%'><span class='percentage'>60%</span></div>
                    <label class='lang m-0 mt-3'>English</label>
                </div>
            </div>
            <div id='skills' >
                <div id='skillsWithPercentage' class='bottomLine flexColumnStart pb-4'>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>HTML</label>
                            <span class='percentageSkillVal'>100%</span>
                        </div>
                        <input type='range' value='100' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:100%'/>
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>CSS</label>
                            <span class='percentageSkillVal'>100%</span>
                        </div>
                        <input type='range' value='100' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:100%'/> 
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>JS</label>
                            <span class='percentageSkillVal'>80%</span>
                        </div>
                        <input type='range' value='80' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:80%'/> 
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>SASS</label>
                            <span class='percentageSkillVal'>60%</span>
                        </div>
                        <input type='range' value='60' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:60%'/> 
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>PHP</label>
                            <span class='percentageSkillVal'>60%</span>
                        </div>
                        <input type='range' value='60' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:60%'/> 
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>JSON</label>
                            <span class='percentageSkillVal'>80%</span>
                        </div>
                        <input type='range' value='80' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:80%'/> 
                    </div>
                    <div class='w-100 mb-2'>
                        <div class='d-flex align-items-center justify-content-between'>
                            <label class='skillLang'>MySQL</label>
                            <span class='percentageSkillVal'>60%</span>
                        </div>
                        <input type='range' value='60' min='10' max='100' step='10' name='skillPercentageInput' style='--valRange:60%'/> 
                    </div>
                </div>
                <div id='otherSkills' class='bottomLine flexColumnStart pb-4 pt-4'>
                    <div class='mb-2'><i class="fa-solid fa-check me-2"></i><span class='otherSkill'>Bootstrap 5 , React.js , SASS</span></div>
                    <div class='mb-2'><i class="fa-solid fa-check me-2"></i><span class='otherSkill'>jQuery , AJAX , Formik , React Redux , React Hooks</span></div>
                    <div class='mb-2'><i class="fa-solid fa-check me-2"></i><span class='otherSkill'>Microsoft Office , GitHub , Adobe Photoshop , Unity</span></div>
                </div>
            </div>
            <div id='downloadCV' class='p-0 pb-2'><span class='text-uppercase me-3 fw-bolder'>Download CV</span><i class="fa-solid fa-download"></i></div>
        </div>
        <div id='Social_Link' class='d-flex justify-content-evenly align-items-center'>
            <a href='https://www.linkedin.com/in/nancymo99/' target='_blank'><i class="fa-brands fa-linkedin-in"></i></a>
            <a href='https://github.com/NanMo57' target='_blank'><i class="fa-brands fa-github"></i></a>
            <a href='mailto:aloqdehnancy@gmail.com'><i class="fa-solid fa-envelope"></i></a>
        </div>
    </section>
</body>
</html>