function toggleMenu() {
    console.log("toggleMenu function called");
    let subMenu = document.getElementById("subMenu");
    if (subMenu) {
        subMenu.classList.toggle('active');
    } else {
        console.error("Element with ID 'subMenu' not found.");
    }
};

const sidebar_hamburgerhamburger = document.querySelector("#toggle-btn");

sidebar_hamburger.addEventListener("click", function() {
    console.log("Toggle button pressed");
    const sidebar = document.querySelector("#sidebar");
    if (sidebar) {
        sidebar.classList.toggle("collapsed");
        console.log("Sidebar toggled, current classes:", sidebar.className);
    } else {
        console.error("Sidebar not found");
    }
});
