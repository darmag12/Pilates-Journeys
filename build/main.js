"use strict";
(function () {
    //  Assign variables to dom elements
    const openNav = document.querySelector("[data-openNav]");
    const closeNav = document.querySelector("[data-closeNav]");
    const navContainer = document.querySelector("[data-navContainer]");
    const navItemsContainer = document.querySelector("[data-navItemsContainer]");
    let map;

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

    // Initialize Google Maps
    // Initialize and add the map
async function initMap() {
  // The location of Uluru
  const position = { lat: 32.736423619825, lng: -117.16049728303148 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 18,
    center: position,
    mapId: "578717aaf820052d",
  });

  // create marker
  const priceTag = document.createElement("div");

  priceTag.className = "price-tag";
  priceTag.textContent = "Pilates Journeys";

  // The marker, positioned at Pilates Journeys
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    content: priceTag,
    title: "Pilates Journeys",
  });
}

initMap();


    // function initMap() {
    // map = new google.maps.Map(document.getElementById("map"), {
    //     center: { lat: 32.736423619825, lng: -117.16049728303148 },
    //     zoom: 14,
    // });

    // const marker = new google.maps.marker.AdvancedMarkerElement({
    //     map,
    //     position: {lat: 32.736423619825, lng: -117.16049728303148},
    //   });
    // }
    // window.initMap = initMap;
    
})()