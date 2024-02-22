const agente = document.querySelectorAll('.agente')
const listItems = document.querySelectorAll('nav ul li')

listItems.forEach((item, idx) => {
    item.addEventListener('click', () => {
        hideAllContents()
        hideAllItems()

        item.classList.add('active')
        agente[idx].classList.add('show')
    })
})

function hideAllContents() {
    agente.forEach(content => content.classList.remove('show'))
}


function hideAllItems() {
    listItems.forEach(item => item.classList.remove('active'))
}