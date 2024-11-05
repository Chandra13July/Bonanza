<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Cafe Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body style="margin-left:260px;" class="bg-gray-100">
    <main class="flex-1 p-6">
        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-500 rounded-full text-white">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-700">Total Orders</h2>
                        <p class="text-gray-500">1,234</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="p-3 bg-green-500 rounded-full text-white">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-700">Revenue</h2>
                        <p class="text-gray-500">$12,345</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-500 rounded-full text-white">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-700">New Customers</h2>
                        <p class="text-gray-500">123</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="p-3 bg-red-500 rounded-full text-white">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-700">Growth</h2>
                        <p class="text-gray-500">12%</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Orders Table -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Orders</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200">Order ID</th>
                        <th class="py-2 px-4 border-b border-gray-200">Customer</th>
                        <th class="py-2 px-4 border-b border-gray-200">Date</th>
                        <th class="py-2 px-4 border-b border-gray-200">Amount</th>
                        <th class="py-2 px-4 border-b border-gray-200">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">#1234</td>
                        <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                        <td class="py-2 px-4 border-b border-gray-200">2023-10-01</td>
                        <td class="py-2 px-4 border-b border-gray-200">$45.00</td>
                        <td class="py-2 px-4 border-b border-gray-200"><span class="text-green-500">Completed</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">#1235</td>
                        <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                        <td class="py-2 px-4 border-b border-gray-200">2023-10-02</td>
                        <td class="py-2 px-4 border-b border-gray-200">$30.00</td>
                        <td class="py-2 px-4 border-b border-gray-200"><span class="text-yellow-500">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">#1236</td>
                        <td class="py-2 px-4 border-b border-gray-200">Alice Johnson</td>
                        <td class="py-2 px-4 border-b border-gray-200">2023-10-03</td>
                        <td class="py-2 px-4 border-b border-gray-200">$25.00</td>
                        <td class="py-2 px-4 border-b border-gray-200"><span class="text-red-500">Cancelled</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">#1237</td>
                        <td class="py-2 px-4 border-b border-gray-200">Bob Brown</td>
                        <td class="py-2 px-4 border-b border-gray-200">2023-10-04</td>
                        <td class="py-2 px-4 border-b border-gray-200">$50.00</td>
                        <td class="py-2 px-4 border-b border-gray-200"><span class="text-green-500">Completed</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">#1238</td>
                        <td class="py-2 px-4 border-b border-gray-200">Charlie Davis</td>
                        <td class="py-2 px-4 border-b border-gray-200">2023-10-05</td>
                        <td class="py-2 px-4 border-b border-gray-200">$60.00</td>
                        <td class="py-2 px-4 border-b border-gray-200"><span class="text-green-500">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Sales Chart -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Sales Chart</h2>
            <canvas id="salesChart"></canvas>
        </div>
    </main>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [1200, 1900, 3000, 5000, 2300, 3200, 4500],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>