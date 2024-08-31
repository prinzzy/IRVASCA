// Countdown Timer Script
const endDate = new Date("2024-09-28T00:00:00").getTime();
const countdown = setInterval(function () {
    const now = new Date().getTime();
    const distance = endDate - now;
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

    if (distance < 0) {
        clearInterval(countdown);
        document.querySelector(".coming-soon-text").innerText = "We're Live!";
    }
}, 1000);

$(document).ready(function () {
    const toastContainer = $("#toast-container");
    const successMessage = $("#successToast").length
        ? $("#successToast").find(".toast-body").text()
        : null;
    const infoMessage = $("#infoToast").length
        ? $("#infoToast").find(".toast-body").text()
        : null;

    if (successMessage) {
        toastContainer.css("opacity", 1); // Show the container
        $("#successToast").toast("show");
    }

    if (infoMessage) {
        toastContainer.css("opacity", 1); // Show the container
        $("#infoToast").toast("show");
    }
});
