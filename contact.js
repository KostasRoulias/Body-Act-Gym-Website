//appear-dissappear the logout button

document.addEventListener("DOMContentLoaded", function(){

        const logout = document.getElementById("logoutBtn");

        if (loggedIn) {
            logout.classList.remove("logoutBtn");
        } else {
            logout.classList.add("logoutBtn");
        }
});