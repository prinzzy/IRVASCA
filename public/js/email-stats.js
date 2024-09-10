document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("emailChart").getContext("2d");

    // Fetch email data from a global variable
    const emailCounts = window.emailCounts || {};

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: Object.keys(emailCounts),
            datasets: [
                {
                    label: "Number of Emails by Domain",
                    data: Object.values(emailCounts),
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
