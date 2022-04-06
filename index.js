// toggle-button navbar
const navbar = document.getElementsByClassName("nav-tabs")[0]
const navToggle = document.getElementsByClassName("toggle-button")[0]

navToggle.addEventListener("click", function() {
    navbar.classList.toggle("active")
})

navToggle.addEventListener("click", function() {
    navToggle.classList.toggle("selected")
})
