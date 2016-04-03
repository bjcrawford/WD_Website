/**
 * Calls the neccessary functions for page initialization. Called
 * from the close of every page.
 */
function initPage() {
    initCurrentPage();
}

/**
 * Determines the current page and takes the appropriate actions
 * for that page's initialization.
 */
function initCurrentPage() {
    
    if (document.getElementById("page").className.indexOf("index") > -1) {
        document.title = "Home | WckdDev";
        document.getElementById("nav-home").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("mirror-home") > -1) {
        document.title = "Mirror Home | WckdDev";
        document.getElementById("nav-mirror-dropdown").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("mirror-help") > -1) {
        document.title = "Mirror Help | WckdDev";
        document.getElementById("nav-mirror-dropdown").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("mirror-changes") > -1) {
        document.title = "Mirror Changes | WckdDev";
        document.getElementById("nav-mirror-dropdown").className = "active";
    }
    else if (document.getElementById("page").className.indexOf("about") > -1) {
        document.title = "About Us | WckdDev";
        document.getElementById("nav-about").className = "active";
    }
}