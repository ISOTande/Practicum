// toggle-button navbar
const navbar = document.getElementsByClassName("nav-tabs")[0]
const navToggle = document.getElementsByClassName("toggle-button")[0]

navToggle.addEventListener("click", function() {
    navbar.classList.toggle("active")
    navToggle.classList.toggle("selected")
})



// SearchBar
const searchIcon = document.getElementsByClassName("searchIcon")[0]
const searchBar = document.getElementsByClassName("searchBar")[0]

searchIcon.addEventListener("click", function() {
    searchBar.classList.toggle("active")
})
