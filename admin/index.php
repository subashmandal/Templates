<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dashboard.js" defer></script>
    <title>Wooble Admin Dashboard</title>
</head>
<body>
<div class="container">
    <header>
        <h1>Wooble Admin Dashboard</h1>
    </header>
    <main>
        <section class="user-acquisition">
            <h2>User Acquisition</h2>
            <div>
                <div class="buttons-container"><button onclick="updateUserAcquisitionChart('daily')">Daily</button>
                <button onclick="updateUserAcquisitionChart('weekly')">Weekly</button>
                <button onclick="updateUserAcquisitionChart('monthly')">Monthly</button>
                <button onclick="updateUserAcquisitionChart('yearly')">Yearly</button>
                </div>
            </div>
            <div>
                <canvas id="user-acquisition-chart"></canvas>
            </div>
        </section>
        <section class="user-engagement">
            <h2>User Engagement</h2>
            <div>
                <button onclick="updateUserEngagementChart('daily')">Daily</button>
                <button onclick="updateUserEngagementChart('weekly')">Weekly</button>
                <button onclick="updateUserEngagementChart('monthly')">Monthly</button>
                <button onclick="updateUserEngagementChart('yearly')">Yearly</button>
            </div>
            <div>
                <canvas id="user-engagement-chart"></canvas>
            </div>
        </section>
        <section class="user-retention">
            <h2>User Retention</h2>
            <div>
                <button onclick="updateUserRetentionChart('daily')">Daily</button>
                <button onclick="updateUserRetentionChart('weekly')">Weekly</button>
                <button onclick="updateUserRetentionChart('monthly')">Monthly</button>
                <button onclick="updateUserRetentionChart('yearly')">Yearly</button>
            </div>
            <div>
                <canvas id="user-retention-chart"></canvas>
            </div>
        </section>
        <section class="financial-metrics">
            <h2>Financial Metrics</h2>
            <div>
                <button onclick="updateFinancialMetricsChart('daily')">Daily</button>
                <button onclick="updateFinancialMetricsChart('weekly')">Weekly</button>
                <button onclick="updateFinancialMetricsChart('monthly')">Monthly</button>
                <button onclick="updateFinancialMetricsChart('yearly')">Yearly</button>
            </div>
            <div>
                <canvas id="financial-metrics-chart"></canvas>
            </div>
        </section>
        <section class="platform-performance">
            <h2>Platform Performance</h2>
            <div>
                <button onclick="updatePlatformPerformanceChart('daily')">Daily</button>
                <button onclick="updatePlatformPerformanceChart('weekly')">Weekly</button>
                <button onclick="updatePlatformPerformanceChart('monthly')">Monthly</button>
                <button onclick="updatePlatformPerformanceChart('yearly')">Yearly</button>
            </div>
            <div>
                <canvas id="platform-performance-chart"></canvas>
            </div>
        </section>
        <section class="customer-support">
            <h2>Customer Support</h2>
            <div>
                <button onclick="updateCustomerSupportChart('daily')">Daily</button>
                <button onclick="updateCustomerSupportChart('weekly')">Weekly</button>
                <button onclick="updateCustomerSupportChart('monthly')">Monthly</button>
                <button onclick="updateCustomerSupportChart('yearly')">Yearly</button>
            </div>
            <div>
                <canvas id="customer-support-chart"></canvas>
            </div>
        </section>
    </main>
</div>
</body>
</html>
