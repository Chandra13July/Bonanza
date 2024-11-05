<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Order Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div style="margin-left:260px;" class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">
            Your Order
        </h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600">
                            Product
                        </th>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600">
                            Quantity
                        </th>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600">
                            Price
                        </th>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex items-center">
                                <img alt="Image of Product 1" class="w-10 h-10 rounded mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/I1HOoDipRGavFpxUHfqyof0QPGWln8IdYb4VfscMwmeuOX3OB.jpg" width="50"/>
                                <span class="text-gray-800">
                                    Product 1
                                </span>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            2
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $10.00
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $20.00
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex items-center">
                                <img alt="Image of Product 2" class="w-10 h-10 rounded mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/Hn8fx8UBMjWBKqfdTUcBizMex4nhcA0W6rhdqKb0cdnanrbnA.jpg" width="50"/>
                                <span class="text-gray-800">
                                    Product 2
                                </span>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            1
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $15.00
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $15.00
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <div class="flex items-center">
                                <img alt="Image of Product 3" class="w-10 h-10 rounded mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/5vYdyCKQWFIMKRatCVZIYmEpVejMlHiZO5nptwH2KtQ1562JA.jpg" width="50"/>
                                <span class="text-gray-800">
                                    Product 3
                                </span>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            3
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $7.00
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            $21.00
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-6 flex justify-end">
            <div class="w-full sm:w-1/2 lg:w-1/3">
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">
                            Subtotal
                        </span>
                        <span class="text-gray-800">
                            $56.00
                        </span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">
                            Tax
                        </span>
                        <span class="text-gray-800">
                            $5.60
                        </span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-600">
                            Shipping
                        </span>
                        <span class="text-gray-800">
                            $10.00
                        </span>
                    </div>
                    <div class="flex justify-between items-center font-semibold text-gray-800">
                        <span>
                            Total
                        </span>
                        <span>
                            $71.60
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex justify-end">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700">
                Proceed to Checkout
            </button>
        </div>
    </div>
</body>
</html>