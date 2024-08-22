"use strict";
(function () {
    //  Assign variables to dom elements
    const openNav = document.querySelector("[data-openNav]");
    const closeNav = document.querySelector("[data-closeNav]");
    const navContainer = document.querySelector("[data-navContainer]");
    const navItemsContainer = document.querySelector("[data-navItemsContainer]");

    // set nav container width to 100%
    function openNavigation() {
        navContainer.style.width = "100%";
        navItemsContainer.style.opacity = "1";
    }

    // set nav container width back to 0%
    function closeNavigation() {
        navContainer.style.width = "0%";
        navItemsContainer.style.opacity = "0";
    }

    // Attatched eventlisteners
    openNav.addEventListener("click", openNavigation);
    closeNav.addEventListener("click", closeNavigation);
    
})()