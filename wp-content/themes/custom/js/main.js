const menuIcon = document.getElementById("menu-icon");
const sliderMenu = document.getElementById("sliderMenu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");


// Drops down search box
searchIcon.addEventListener("click", () => {
  if (searchBox.style.top && searchBox.style.top === "72px") {
    searchBox.style.top = "24px";
    searchBox.style.pointerEvents = "none";
  } else {
    searchBox.style.top = "72px";
    searchBox.style.pointerEvents = "auto";
  }
});

// Drops down menu
menuIcon.addEventListener("click", () => {
  if (sliderMenu.style.opacity === "1") {
    sliderMenu.style.opacity = "0";
    sliderMenu.style.pointerEvents = "none";
  } else {
    sliderMenu.style.opacity = "1";
    sliderMenu.style.pointerEvents = "auto";
  }
});
