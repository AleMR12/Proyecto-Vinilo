/*Script para que aparezca el menu de navegacion*/
function showSidebar() {
    const Sidebar = document.querySelector('.Sidebar')
    Sidebar.style.display = 'flex'
}

/*Script para cerrar el menu de navegacion*/
function closeSidebar() {
    const Sidebar = document.querySelector('.Sidebar')
    Sidebar.style.display = 'none'
}