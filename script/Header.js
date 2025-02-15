function viewHideMenu(){
    document.querySelectorAll('#viewHideButton i').forEach(icon => icon.classList.toggle('hide')); 
    Array.from(document.getElementById('list').children).forEach(child => child.classList.toggle('hide'));
}

function viewHidePortfolioList(){
    document.getElementById('portfolioList').classList.toggle('hide');
    document.querySelector('.fa-chevron').classList.toggle('fa-chevron-right')
    document.querySelector('.fa-chevron').classList.toggle('fa-chevron-down')
}

Array.from(document.querySelector('header nav ul').children).forEach((page,index) => {
        let activePage = '';
        let activePortfolio = ''
        page.onclick = ()=>{
            if(index == 1){
                Array.from(page.children[1].children).forEach(optionFilter =>{ 
                    optionFilter.onclick = ()=>{
                        activePage = page.children[0].textContent;
                        activePortfolio = optionFilter.textContent;
                        viewHideMenu()
                        viewHidePortfolioList();
                        window.location.href = `?Page=${activePage}&Type=${activePortfolio}`;
                    }
                });
            }else{
                activePage = page.textContent;
                viewHideMenu();
                window.location.href = `?Page=${activePage}`;
            }
        }

        if(index == 1){
            page.ondblclick = ()=>{
                window.location.href = `?Page=Portfolio&Type=All Websites`;
                viewHideMenu()
                viewHidePortfolioList();
            }
        }
});