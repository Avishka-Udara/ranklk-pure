var animationContainer = document.getElementById("logo-animation-container");
var animationData = 'assets/data.json'; // The path to the animation json
var animationOptions = {
    container: animationContainer,
    renderer: 'svg', // Required
    loop: true,
    autoplay: true,
    path: animationData
    
};
console.log("CREATE BY AVISHKA UDARA");
// Initialize the animation
var animation = lottie.loadAnimation(animationOptions);


function closePopup() {
    // Remove the "visible" class to hide all popups
    const popups = document.querySelectorAll(".popup");
    popups.forEach((popup) => {
        popup.classList.remove("visible");
        // Set the z-index of the popup to a negative value when closing
        popup.style.zIndex = -1;
    });
}

function showPopup(popupId) {
    // Hide all popups first to ensure only one is visible at a time
    closePopup();

    // Show the specific popup by adding the "visible" class
    const popupToShow = document.getElementById(popupId);
    if (popupToShow) {
        popupToShow.classList.add("visible");
        // Set the z-index of the popup to a higher value when showing
        popupToShow.style.zIndex = 9999;
    }
}