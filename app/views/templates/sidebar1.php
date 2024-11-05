<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Sidebar Menu HTML and CSS | CodingNepal
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex">
    <aside class="fixed top-0 left-0 h-full w-64 bg-gray-900 text-white flex flex-col p-6 transition-all duration-400 no-scrollbar">
        <div class="flex items-center mb-6">
            <img alt="Logo of Cafe Bonanza" class="w-10 h-10 rounded-full" height="42" src="https://storage.googleapis.com/a1aa/image/EyaQ0mdbMeyVbKVoWaOFO3oge9dDqXM98KOTSqTsgfQ3hobnA.jpg" width="42" />
            <h2 class="ml-4 text-xl font-semibold">Cafe Bonanza</h2>
        </div>
            <h4 class="text-gray-400 mb-2">Order</h4>

            <li class="mb-4">
                <a class="flex items-center p-3 rounded hover:bg-white hover:text-gray-900 transition" href="#">
                    <i class="fas fa-phone-alt mr-4"></i>
                    Order
                </a>
            </li>
            <h4 class="text-gray-400 mb-2">Account</h4>
            <li class="mb-4">
                <a class="flex items-center p-3 rounded hover:bg-white hover:text-gray-900 transition" href="#">
                    <i class="fas fa-user-circle mr-4"></i>
                    Profile
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center p-3 rounded hover:bg-white hover:text-gray-900 transition" href="#" onclick="openLogoutModal()">
                    <i class="fas fa-sign-out-alt mr-4"></i>
                    Logout
                </a>
            </li>
        </ul>
    </aside>

    <!-- Logout Confirmation Modal -->
    <div id="logout-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-lg font-semibold mb-4">Logout Confirmation</h2>
            <p>Are you sure you want to logout?</p>
            <div class="flex justify-end mt-6">
                <button class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md mr-2" onclick="closeLogoutModal()">Cancel</button>
                <button class="bg-red-600 text-white px-4 py-2 rounded-md" onclick="confirmLogout()">Logout</button>
            </div>
        </div>
    </div>

    <script>
        function openLogoutModal() {
            document.getElementById('logout-modal').classList.remove('hidden');
        }

        function closeLogoutModal() {
            document.getElementById('logout-modal').classList.add('hidden');
        }

        function confirmLogout() {
            // Implement your logout logic here
            window.location.href = '<?= BASEURL; ?>/auth/logout1'; // Replace with your logout URL
        }
    </script>
</body>

</html>
