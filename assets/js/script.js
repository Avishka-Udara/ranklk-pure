// Function to open the popup
function openPopup(curr) {
    if (curr == 'deriv') {
        document.getElementById("popup-skrill").classList.remove("visible");
        document.getElementById("popup-usdt").classList.remove("visible");
        document.getElementById("popup-payoneer").classList.remove("visible");
        document.getElementById("popup-deriv").classList.add("visible");
    }
    else if (curr == 'skrill') {
        document.getElementById("popup-deriv").classList.remove("visible");
        document.getElementById("popup-usdt").classList.remove("visible");
        document.getElementById("popup-payoneer").classList.remove("visible");
        document.getElementById("popup-skrill").classList.add("visible");
    }
    else if (curr == 'usdt') {
        document.getElementById("popup-deriv").classList.remove("visible");
        document.getElementById("popup-skrill").classList.remove("visible");
        document.getElementById("popup-payoneer").classList.remove("visible");
        document.getElementById("popup-usdt").classList.add("visible");
    }
    else if (curr == 'payoneer') {
        document.getElementById("popup-deriv").classList.remove("visible");
        document.getElementById("popup-skrill").classList.remove("visible");
        document.getElementById("popup-usdt").classList.remove("visible");
        document.getElementById("popup-payoneer").classList.add("visible");
    }
    // Add the "visible" class to show the popup
    
}

// Function to close the popup
function closePopup() {
    // Remove the "visible" class to hide the popup
    document.getElementById("popup-deriv").classList.remove("visible");
    document.getElementById("popup-skrill").classList.remove("visible");
    document.getElementById("popup-usdt").classList.remove("visible");
    document.getElementById("popup-payoneer").classList.remove("visible");
}
