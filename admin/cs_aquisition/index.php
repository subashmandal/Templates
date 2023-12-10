<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Acquisition</title>
    <link rel="stylesheet" href="customer-acquisition.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="customer-acquisition.js" defer></script>
    <style>
        .chart-container {
            width: 80%; /* Set a fixed width for the chart container */
            margin: 0 auto; /* Center the chart container on the page */
        }
    </style>
</head>
<body>
<div class="customer-acquisition-container">
    <h1>Customer Acquisition</h1>
    <div class="timeframe-controls">
        <button id="daily-btn">Daily</button>
        <button id="weekly-btn">Weekly</button>
        <button id="monthly-btn">Monthly</button>
        <button id="yearly-btn">Yearly</button>
    </div>
    <canvas id="customer-acquisition-chart"></canvas>
</div>

<section class="theme-usage chart-container">
    <h2>Theme Usage</h2>
    <div class="chart-container">
        <canvas id="theme-usage-chart"></canvas>
    </div>
</section>



</body>
</html>
