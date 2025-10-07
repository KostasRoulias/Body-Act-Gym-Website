//dropdown menu
function handleAction() {
    var dropdown = document.getElementById("actionDropdown");
    var selectedOption = dropdown.options[dropdown.selectedIndex].value;
    if (selectedOption !== "") {
        window.location.href = selectedOption;
    }
}


//navbar appear - disappear
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");

menuBtn.onclick = () => {
    menu.classList.add("active");
    menuBtn.classList.add("hide");
    body.classList.add("disabledScroll");
}
cancelBtn.onclick = () => {
    menu.classList.remove("active");
    menuBtn.classList.remove("hide");
    body.classList.remove("disabledScroll");
}

window.onscroll = () => {
    window.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}


document.addEventListener("DOMContentLoaded", function() {
    const cancelBtn2 = document.querySelector(".cancel-btn2");
    const cancelBtn3 = document.querySelector(".cancel-btn3");
    const pop = document.getElementById("popupForm");
    const registerForm = document.querySelector(".register");
    const registerBtn = document.getElementById("registBtn");
    const login = document.getElementById("loginBtn");

    login.onclick = (event) =>{
        event.stopPropagation();
        pop.classList.add("active");
        document.addEventListener("click", closeFormOnClickOutside);
    }
    function closeFormOnClickOutside(event) {
        const isClickInsideForm = pop.contains(event.target);

        if (!isClickInsideForm) {
            pop.classList.remove("active");
            // Remove the click event listener after the form is closed
            document.removeEventListener("click", closeFormOnClickOutside);   
        }
    }

    cancelBtn2.onclick = () => {
        pop.classList.remove("active");
    }

    cancelBtn3.onclick = () => {
        registerForm.classList.remove("active2");
    }

    registerBtn.onclick = (event) => {
        event.stopPropagation();
        registerForm.classList.add("active2");
        document.addEventListener("click", closeFormOnClickOutside2);
    }

    function closeFormOnClickOutside2(event) {
        const isClickInsideForm = registerForm.contains(event.target);

        if (!isClickInsideForm) {
            registerForm.classList.remove("active2");
            pop.classList.remove("active");
            // Remove the click event listener after the form is closed
            document.removeEventListener("click", closeFormOnClickOutside2);   
        }
    }
    
});

//appear- dissappear calories-exercises from navbar
document.addEventListener("DOMContentLoaded", function() {
    const exercises = document.getElementById("exercises");
    const calories = document.getElementById("calories");

    if (loggedIn) {
        exercises.classList.remove("exercises");
        calories.classList.remove("calories");
    } else {
        exercises.classList.add("exercises");
        calories.classList.add("calories");
    }
});


//move to top of the page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
}




