let userAcquisitionChart, userEngagementChart, userRetentionChart, financialMetricsChart, platformPerformanceChart, customerSupportChart;

document.addEventListener("DOMContentLoaded", function () {
    userAcquisitionChart = createLineChart("user-acquisition-chart", "User Acquisition", getSampleData("yearly"));
    userEngagementChart = createLineChart("user-engagement-chart", "User Engagement", getSampleData("yearly"));
    userRetentionChart = createLineChart("user-retention-chart", "User Retention", getSampleData("yearly"));
    financialMetricsChart = createLineChart("financial-metrics-chart", "Financial Metrics", getSampleData("yearly"));
    platformPerformanceChart = createLineChart("platform-performance-chart", "Platform Performance", getSampleData("yearly"));
    customerSupportChart = createLineChart("customer-support-chart", "Customer Support", getSampleData("yearly"));
});

function updateUserAcquisitionChart(timeframe) {
    updateChart(userAcquisitionChart, "User Acquisition", getSampleData(timeframe));
}

function updateUserEngagementChart(timeframe) {
    updateChart(userEngagementChart, "User Engagement", getSampleData(timeframe));
}

function updateUserRetentionChart(timeframe) {
    updateChart(userRetentionChart, "User Retention", getSampleData(timeframe));
}

function updateFinancialMetricsChart(timeframe) {
    updateChart(financialMetricsChart, "Financial Metrics", getSampleData(timeframe));
}

function updatePlatformPerformanceChart(timeframe) {
    updateChart(platformPerformanceChart, "Platform Performance", getSampleData(timeframe));
}

function updateCustomerSupportChart(timeframe) {
    updateChart(customerSupportChart, "Customer Support", getSampleData(timeframe));
}

function updateChart(chart, label, data) {
    chart.data.labels = data.labels;
    chart.data.datasets[0].label = label;
    chart.data.datasets[0].data = data.data;
    chart.update();
}

function getSampleData(timeframe) {
    // Replace this function with a call to your back-end server to fetch real data
    const data = {
        daily: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            data: [5, 10, 8, 12, 15, 20, 18],
        },
        weekly: {
            labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
            data: [35, 45, 60, 55],
        },
        monthly: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            data: [120, 140, 130, 170, 200, 250, 240, 220, 260, 280, 300, 350],
        },
        yearly: {
            labels: ["2020", "2021", "2022", "2023"],
            data: [1500, 1800, 2100, 2400],
        },
    };
    return data[timeframe];
}

function createLineChart(chartId, label, data) {
    const chartElement = document.getElementById(chartId).getContext("2d");
    return new Chart(chartElement, {
        type: "line",
        data: {
            labels: data.labels,
            datasets: [{
                label: label,
                data: data.data,
                borderColor: "#4bc0c0",
                fill: false,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}