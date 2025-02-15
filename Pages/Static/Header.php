<!DOCTYPE html>
<html lang="en">
<body>
    <header class='shadow flexColumnStart align-items-center'>
        <div id='viewHideButton' class='shadow w-100 text-center'>
            <i class="fa-solid fa-bars" id='viewMenu' onclick='viewHideMenu()'></i>
            <i class="fa-solid fa-xmark hide" id='closeMenu' onclick='viewHideMenu()'></i>
        </div>
        <div class='position-relative ps-2 pe-2 h-100 w-100' id='list'>
            <div class='text-center'><span id='activeList'><?= isset($_GET['Page']) ? $_GET['Page'] : 'Home' ?></span></div>
            <nav class='hide'>
                <ul class='m-0 p-0 flexColumnStart' style='--gap:10px'>
                    <li>Home</li>
                    <li class='w-100'>
                        <a class='d-flex justify-content-between align-items-center' onclick="viewHidePortfolioList()"><span>Portfolio</span><i class="fa-solid fa-chevron-right ms-5 fa-chevron"></i></a>
                        <ul class='m-0 p-0 mt-3 hide' id='portfolioList'>
                            <li>All Websites</li>
                            <li>Frontend Website</li>
                            <li>Backend Website</li>
                            <li>Full Stack Website</li>
                        </ul>
                    </li>
                    <li>History</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
        <div id='LangTranslate' class='flexColumnCenter shadow w-100 p-3'>
            <div class='rounded-pill'><span class='fw-bolder'>AR</span></div>
            <div class='rounded-pill activeLanguagePage'><span class='fw-bolder'>EN</span></div>
        </div>
    </header>
</body>
</html>