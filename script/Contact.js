document.querySelectorAll('form input, form textarea').forEach(element => {
    element.onclick = (e) => {
        document.querySelectorAll('form input, form textarea').forEach(element => {
            element.previousElementSibling.classList.remove('active-input-group')
        })
        e.target.previousElementSibling.classList.add('active-input-group')
    }

    element.addEventListener('blur',(e)=>{
        e.target.previousElementSibling.classList.remove('active-input-group')
    })
    
});
