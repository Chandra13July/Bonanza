<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today Special Menu</title>  
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Alexandria', sans-serif;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .card {
            max-width: 300px; /* Set max width for the cards */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Menu Header -->
    <div class="text-center my-12">
        <h1 class="text-4xl font-bold mb-2">TODAY SPECIAL MENU</h1>
        <p class="text-lg text-gray-600">Let's order some nice dishes and drinks</p>
    </div>

    <!-- Menu Buttons with responsive adjustments -->
    <div class="flex justify-center mb-8 space-x-2 px-4 sm:px-6 lg:px-8">
        <a href="<?= BASEURL; ?>/home/menu" class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-check mr-1"></i> All Menus
        </a>
        <a href="<?= BASEURL; ?>/home/menu/1" class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-utensils mr-1"></i> Food
        </a>
        <a href="<?= BASEURL; ?>/home/menu/2" class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-glass-martini-alt mr-1"></i> Drinks
        </a>
        <a href="<?= BASEURL; ?>/home/menu/3" class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-cookie-bite mr-1"></i> Snacks
        </a>
    </div>

    <!-- Menu Grid with padding -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">

            <?php foreach ($data['MenuItems'] as $item): ?>
                <div class="card bg-white rounded-lg shadow-md p-4 text-center cursor-pointer" onclick="openModal('<?= htmlspecialchars($item['MenuName']); ?>', <?= $item['Price']; ?>)">
                    <img src="<?= BASEURL; ?>/<?= htmlspecialchars($item['ImageUrl']); ?>" alt="<?= htmlspecialchars($item['MenuName']); ?>" class="w-full h-48 rounded-md object-cover mb-4">
                    <h5 class="text-lg font-semibold text-left"><?= htmlspecialchars($item['MenuName']); ?></h5>
                    <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left"><?= htmlspecialchars($item['Description']); ?></p>
                    <div class="text-lg font-bold mt-2 text-left">Rp <?= number_format($item['Price'], 0, ',', '.'); ?></div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Modal -->
    <div id="orderModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
            <h2 class="text-lg font-bold mb-2" id="modalTitle">Order</h2>
            <p class="mb-4" id="modalPrice"></p>
            <div class="flex justify-between">
                <button class="bg-gray-300 text-gray-800 rounded px-4 py-2" onclick="closeModal()">Cancel</button>
                <button class="bg-blue-500 text-white rounded px-4 py-2">Confirm Order</button>
            </div>
        </div>
    </div>

    <script>
        function openModal(menuName, price) {
            document.getElementById('modalTitle').innerText = `Order ${menuName}`;
            document.getElementById('modalPrice').innerText = `Price: Rp ${price.toLocaleString('id-ID')}`;
            document.getElementById('orderModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('orderModal').classList.add('hidden');
        }
    </script>
</body>
</html>
