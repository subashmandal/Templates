document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("customer-acquisition-chart").getContext("2d");
    const chartData = {
        labels: [
            "Entered Email",
            "Entered Name",
            "Entered Profession",
            "Entered Custom Domain",
            "Uploaded DP",
            "Chose Theme",
            "Into the Builder",
        ],
        datasets: [
            {
                label: "Number of Users",
                data: [], // The data array will be updated dynamically
                backgroundColor: "rgba(75, 192, 192, 0.5)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1,
            },
        ],
    };

    const chartOptions = {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    };

    const customerAcquisitionChart = new Chart(ctx, {
        type: "bar",
        data: chartData,
        options: chartOptions,
    });

    function getDataByTimeframe(timeframe) {
        // Replace the following data with your actual data
        const data = {
            daily: [100, 90, 80, 70, 60, 50, 40],
            weekly: [500, 450, 400, 350, 300, 250, 200],
            monthly: [2000, 1800, 1600, 1400, 1200, 1000, 800],
            yearly: [24000, 21600, 19200, 16800, 14400, 12000, 9600],
        };

        return data[timeframe];
    }

    function updateChartTimeframe(timeframe) {
        const newData = getDataByTimeframe(timeframe);
        console.log("Timeframe:", timeframe); // Debug log
        console.log("New data:", newData); // Debug log
        chartData.datasets[0].data = newData;
        customerAcquisitionChart.update();

        // Calculate and display Conversion Rate
        const conversionRate = calculateConversionRate(newData);
        console.log(`Conversion Rate: ${conversionRate.toFixed(2)}%`);
    }

    // Attach event listeners to the buttons
    const dailyBtn = document.getElementById("daily-btn");
    const weeklyBtn = document.getElementById("weekly-btn");
    const monthlyBtn = document.getElementById("monthly-btn");
    const yearlyBtn = document.getElementById("yearly-btn");

    dailyBtn.addEventListener("click", function () {
        updateChartTimeframe("daily");
    });

    weeklyBtn.addEventListener("click", function () {
        updateChartTimeframe("weekly");
    });

    monthlyBtn.addEventListener("click", function () {
        updateChartTimeframe("monthly");
    });

    yearlyBtn.addEventListener("click", function () {
        updateChartTimeframe("yearly");
    });

    // Set the initial chart data and time frame
    updateChartTimeframe("daily");
});

function calculateConversionRate(data) {
    const totalUsers = data[0];
    const finalStepUsers = data[data.length - 1];
    return (finalStepUsers / totalUsers) * 100;
}

document.addEventListener("DOMContentLoaded", function () {
    const chartData = {
        labels: ["Theme 1", "Theme 2", "Theme 3", "Theme 4", "Theme 5", "Theme 1", "Theme 2", "Theme 3", "Theme 4", "Theme 5"],
        datasets: [
            {
                label: "Theme Usage",
                data: [20, 30, 15, 10, 25, 20, 30, 15, 10, 25],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56",
                    "#33CCCC",
                    "#CC99CC",
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56",
                    "#33CCCC",
                    "#CC99CC"
                ],
                borderWidth: 1,
            },
        ],
    };

    const chartOptions = {
        indexAxis: "x",
        scales: {
            y: {
                beginAtZero: true,
            },
        },
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                displayColors: false,
                callbacks: {
                    label: function (context) {
                        return `Number of Users: ${context.raw}`;
                    },
                },
            },
        },
    };

    const chart = new Chart("theme-usage-chart", {
        type: "bar",
        data: chartData,
        options: chartOptions,
    });

    // Add horizontal scrolling to the chart container
    const chartContainer = document.querySelector(".chart-container");
    chartContainer.style.overflowX = "auto";
    chartContainer.style.whiteSpace = "nowrap";
    chartContainer.style.WebkitOverflowScrolling = "touch";
});
