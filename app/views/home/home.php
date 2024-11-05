<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Our Home Bonanza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body class="font-[Alexandria]">

    <!-- Home Section -->
    <section class="py-12 px-4 md:px-0">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <img alt="Interior of a cozy cafe with wooden tables and chairs" class="mx-auto" height="600" src="<?= BASEURL; ?>/img/home/Group 62.png" width="800"/>
            </div>
            <div class="md:w-1/2 text-left md:pl-12 mt-8 md:mt-0">
                <h1 class="text-6xl font-bold">OUR HOME BONANZA</h1>
                <p class="mt-4 text-lg">Bonanza rumah bagi siapapun yg ingin beristirahat datanglah kemari kapan pun anda jika merasa lelah</p>
                <button onclick="scrollToSection()" class="mt-6 px-6 py-2 bg-black text-white font-bold">VIEW MORE</button>
            </div>
        </div>
    </section>
    
    <!-- OUR COFFE POINT OF VIEW Section -->
    <section id="coffee-point-of-view" class="flex items-center justify-center bg-gray-200 h-24 px-4 md:px-0">
        <h2 class="text-xl font-semibold text-center">OUR COFFE POINT OF VIEW</h2>
    </section>

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 px-4 md:px-0">
        <div class="text-left">
            <img alt="Morning coffee" class="mx-auto" height="500" src="<?= BASEURL; ?>/img/home/image (1).png" width="300"/>
            <p class="mt-2 text-sm font-thin text-left" style="width: 300px;">COFFE IN THE MORNING</p>
            <p class="text-left text-xs" style="width: 300px;">2024</p>
        </div>
        <div class="text-left">
            <img alt="Nature-inspired coffee" class="mx-auto" height="500" src="<?= BASEURL; ?>/img/home/image.png" width="300"/>
            <p class="mt-2 text-sm font-thin text-left" style="width: 300px;">COFFE AND THE NATURE</p>
            <p class="text-left text-xs" style="width: 300px;">2024</p>
        </div>
        <!-- Removed extra coffee images to keep only two -->
        <div class="text-left hidden md:block">
            <img alt="Work coffee" class="mx-auto" height="500" src="<?= BASEURL; ?>/img/home/image (2).png" width="300"/>
            <p class="mt-2 text-sm font-thin text-left" style="width: 300px;">COFFE FOR YOUR WORK</p>
            <p class="text-left text-xs" style="width: 300px;">2024</p>
        </div>
        <div class="text-left hidden md:block">
            <img alt="Sweet coffee treat" class="mx-auto" height="500" src="<?= BASEURL; ?>/img/home/image (3).png" width="300"/>
            <p class="mt-2 text-sm font-thin text-left" style="width: 300px;">SWEET COFFE FOR YOUR DAY</p>
            <p class="text-left text-xs" style="width: 300px;">2024</p>
        </div>
    </div>

    <!-- Increased Margin Below What We Give Section -->
    <section class="bg-gray-200 py-12 text-center mt-8 px-4 md:px-0">
        <h2 class="text-4xl font-semibold mb-4">INTERESTED TO OUR COFFE OR THE OTHER DISH?</h2>
        <p class="mb-6">COME LETS ORDER SOME AND MADE YOU DAY WITH IT, WE'LL MAKE SURE YOU ENJOY IT!!</p>
        <button class="px-6 py-2 bg-black text-white font-bold">ORDER NOW</button>
    </section>    

    <section class="py-12 px-4 md:px-0">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-5xl font-semibold mb-4">MORE ABOUT US</h2>
                <p class="mb-4 text-sm">BONANZA CAFÉ ADALAH TEMPAT DI MANA KELEZATAN DAN KEHANGATAN BERPADU, DIRANCANG UNTUK MEMBERI PENGALAMAN YANG TAK TERLUPAKAN BAGI SETIAP PENGUNJUNG. TERINSPIRASI DARI WARISAN KELUARGA, KAMI MENGUBAH BEKAS GUDANG MENJADI KAFE DENGAN SENTUHAN VINTAGE MODERN, MENCIPTAKAN SUASANA UNIK YANG NYAMAN DAN PENUH KARAKTER.</p>
                <p class="mb-4 text-sm">DI BONANZA, KAMI MENGHADIRKAN BERAGAM HIDANGAN YANG DISAJIKAN DENGAN BAHAN BERKUALITAS, MULAI DARI PILIHAN MAKANAN LOKAL HINGGA SAJIAN INTERNASIONAL. KAMI PERCAYA BAHWA SETIAP HIDANGAN HARUS DISAJIKAN DENGAN SEPENUH HATI, SEHINGGA SETIAP KUNJUNGAN KE BONANZA CAFÉ MENJADI MOMEN ISTIMEWA BAGI ANDA DAN ORANG TERCINTA.</p>
                <p class="mb-4 text-sm">RASAKAN SUASANA DAN CITA RASA KHAS BONANZA CAFÉ! KUNJUNGI "ABOUT US" UNTUK MENGENAL LEBIH DEKAT PERJALANAN KAMI DALAM MENYAJIKAN YANG TERBAIK.</p>
                <button class="px-6 py-2 bg-black text-white font-bold">SEE MORE</button>
            </div>
            <div>
                <img alt="Exterior of the Bonanza Cafe building" class="w-full" height="400" src="https://storage.googleapis.com/a1aa/image/57UcfEn6mv2BJaZnTpLIBCSefCP8CjinnE83cVqvDBdZvRbnA.jpg" width="600"/>
            </div>
        </div>
    </section>    

    <section class="py-12 text-center px-4 md:px-0">
        <h2 class="text-4xl font-bold mb-8">GALLERY</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <img alt="Interior of the cafe with modern design" class="w-full" height="400" src="https://storage.googleapis.com/a1aa/image/egw1dIWfRbluY0QIFAqR3dXjCQOGHOKqQxB4IGjNdwWr3otTA.jpg" width="400"/>
            </div>
            <div>
                <img alt="Interior of the cafe with modern design" class="w-full" height="400" src="https://storage.googleapis.com/a1aa/image/egw1dIWfRbluY0QIFAqR3dXjCQOGHOKqQxB4IGjNdwWr3otTA.jpg" width="400"/>
            </div>
            <div>
                <img alt="Interior of the cafe with modern design" class="w-full" height="400" src="https://storage.googleapis.com/a1aa/image/egw1dIWfRbluY0QIFAqR3dXjCQOGHOKqQxB4IGjNdwWr3otTA.jpg" width="400"/>
            </div>
        </div>
        <button class="mt-8 px-6 py-2 bg-black text-white font-bold">SEE MORE</button>
    </section>

    <section class="py-12 bg-gray-100 text-center px-4 md:px-0">
        <h2 class="text-xl font-bold mb-8">SOME REVIEWS OF OUR CUSTOMER</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 shadow-md">
                <i class="fas fa-quote-left text-gray-600"></i>
                <p class="my-4">"The ambiance is amazing, and the coffee is even better!"</p>
                <p class="font-bold">- John Doe</p>
            </div>
            <div class="bg-white p-6 shadow-md">
                <i class="fas fa-quote-left text-gray-600"></i>
                <p class="my-4">"A perfect place to relax and enjoy great food."</p>
                <p class="font-bold">- Jane Smith</p>
            </div>
            <div class="bg-white p-6 shadow-md">
                <i class="fas fa-quote-left text-gray-600"></i>
                <p class="my-4">"The staff is friendly, and the service is top-notch!"</p>
                <p class="font-bold">- Emily Johnson</p>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white text-center py-4">
        <p>&copy; 2024 Bonanza Café. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Smooth Scrolling -->
    <script>
        function scrollToSection() {
            const section = document.getElementById("coffee-point-of-view");
            section.scrollIntoView({ behavior: "smooth" });
        }
    </script>

</body>
</html>
