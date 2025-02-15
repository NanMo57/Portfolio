Array.from(document.querySelector('#portfolioNav ul').children).forEach((list,index) => {
        list.onclick = ()=>{
            Array.from(document.querySelector('#portfolioNav ul').children).forEach((list,index) => {
                list.classList.remove('active')
            })
            list.classList.add('active')
            window.location.href = window.location.href.replace(window.location.href.split('&')[1],`Type=${list.textContent}`)
        }
});