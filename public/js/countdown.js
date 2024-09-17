// Countdown Timer Script for Indonesian Time (WIB, UTC+7)
const endDate = new Date("2024-10-10T00:00:00+07:00").getTime(); // Set end date to 10 October 2024 at 00:00 WIB
const countdown = setInterval(function () {
    const now = new Date().getTime(); // Get current time in UTC
    const distance = endDate - now; // Calculate the difference

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update the countdown display
    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

    // If the countdown is over, stop the timer and show a message
    if (distance < 0) {
        clearInterval(countdown);
        document.querySelector(".coming-soon-text").innerText = "We're Live!";
    }
}, 1000); // Update every second

// jQuery for toast messages
$(document).ready(function () {
    const toastContainer = $("#toast-container");
    const successMessage = $("#successToast").length
        ? $("#successToast").find(".toast-body").text()
        : null;
    const infoMessage = $("#infoToast").length
        ? $("#infoToast").find(".toast-body").text()
        : null;

    // Show success or info toasts if messages exist
    if (successMessage) {
        toastContainer.css("opacity", 1); // Show the container
        $("#successToast").toast("show");
    }

    if (infoMessage) {
        toastContainer.css("opacity", 1); // Show the container
        $("#infoToast").toast("show");
    }
});
