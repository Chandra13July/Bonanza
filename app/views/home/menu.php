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
            font-family: 'Alexandria', sans-serif; /* Apply Alexandria font to body */
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
    <div class="flex justify-center mb-8 space-x-2 px-4 sm:px-6 lg:px-8"> <!-- Padding on sides -->
        <button class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-check mr-1"></i> All Menus
        </button>
        <button class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-utensils mr-1"></i> Food
        </button>
        <button class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-cookie-bite mr-1"></i> Snack
        </button>
        <button class="bg-black text-white rounded-full px-4 py-1 text-xs sm:px-6 sm:py-2 sm:text-sm font-medium hover:bg-gray-800">
            <i class="fas fa-glass-martini-alt mr-1"></i> Drinks
        </button>
    </div>

    <!-- Menu Grid with padding -->
    <div class="px-4 sm:px-6 lg:px-8"> <!-- Added padding here -->
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">

            <!-- Ayam Geprek -->
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <img src="<?= BASEURL; ?>/img/menu/ayamgeprek.png" alt="Ayam Geprek" class="w-full h-48 rounded-md object-cover mb-4">
                <div class="flex justify-between items-center">
                    <h5 class="text-lg font-semibold text-left">AYAM GEPREK</h5>
                    <button class="text-gray-600 hover:text-red-500 text-lg"><i class="fas fa-heart"></i></button>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left">Spicy fried chicken topped with sambal sauce, perfect for spice lovers.</p>
                <div class="text-lg font-bold mt-2 text-left">Rp 15.000</div>
                <div class="mt-4 text-center">
                    <button class="bg-black text-white rounded-full px-4 py-2 text-sm font-medium hover:bg-gray-800 w-full">ADD TO CART</button>
                </div>
            </div>

            <!-- Lalapan Ayam -->
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <img src="<?= BASEURL; ?>/img/menu/lalapanayam.png" alt="Lalapan Ayam" class="w-full h-48 rounded-md object-cover mb-4">
                <div class="flex justify-between items-center">
                    <h5 class="text-lg font-semibold text-left">LALAPAN AYAM</h5>
                    <button class="text-gray-600 hover:text-red-500 text-lg"><i class="fas fa-heart"></i></button>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left">Grilled chicken served with fresh vegetables and sambal.</p>
                <div class="text-lg font-bold mt-2 text-left">Rp 18.000</div>
                <div class="mt-4 text-center">
                    <button class="bg-black text-white rounded-full px-4 py-2 text-sm font-medium hover:bg-gray-800 w-full">ADD TO CART</button>
                </div>
            </div>

            <!-- Coffee -->
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <img src="<?= BASEURL; ?>/img/menu/coffe.png" alt="Coffee" class="w-full h-48 rounded-md object-cover mb-4">
                <div class="flex justify-between items-center">
                    <h5 class="text-lg font-semibold text-left">COFFEE</h5>
                    <button class="text-gray-600 hover:text-red-500 text-lg"><i class="fas fa-heart"></i></button>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left">Great way to start a day, with hot and nice coffee.</p>
                <div class="text-lg font-bold mt-2 text-left">Rp 12.000</div>
                <div class="mt-4 text-center">
                    <button class="bg-black text-white rounded-full px-4 py-2 text-sm font-medium hover:bg-gray-800 w-full">ADD TO CART</button>
                </div>
            </div>

            <!-- Es Jeruk -->
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <img src="<?= BASEURL; ?>/img/menu/jeruk.png" alt="Es Jeruk" class="w-full h-48 rounded-md object-cover mb-4">
                <div class="flex justify-between items-center">
                    <h5 class="text-lg font-semibold text-left">ES JERUK</h5>
                    <button class="text-gray-600 hover:text-red-500 text-lg"><i class="fas fa-heart"></i></button>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left">Refreshing orange juice served chilled.</p>
                <div class="text-lg font-bold mt-2 text-left">Rp 10.000</div>
                <div class="mt-4 text-center">
                    <button class="bg-black text-white rounded-full px-4 py-2 text-sm font-medium hover:bg-gray-800 w-full">ADD TO CART</button>
                </div>
            </div>

            <!-- Matcha Tea -->
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <img src="<?= BASEURL; ?>/img/menu/matcha.png" alt="Matcha Tea" class="w-full h-48 rounded-md object-cover mb-4">
                <div class="flex justify-between items-center">
                    <h5 class="text-lg font-semibold text-left">MATCHA TEA</h5>
                    <button class="text-gray-600 hover:text-red-500 text-lg"><i class="fas fa-heart"></i></button>
                </div>
                <p class="text-sm text-gray-600 mt-2 line-clamp-2 text-left">Green tea made with high-quality matcha powder, a healthy choice.</p>
                <div class="text-lg font-bold mt-2 text-left">Rp 20.000</div>
                <div class="mt-4 text-center">
                    <button class="bg-black text-white rounded-full px-4 py-2 text-sm font-medium hover:bg-gray-800 w-full">ADD TO CART</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
