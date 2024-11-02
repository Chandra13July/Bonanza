<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonanza Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Alexandria', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto px-20 my-5"> <!-- Menambahkan padding lebih banyak -->
    <div class="flex flex-col md:flex-row items-center mb-12"> <!-- Increased margin bottom -->
      <div class="md:w-1/2">
        <img alt="Person making coffee" class="img-fluid rounded" height="400" src="<?= BASEURL; ?>/img/about/Frame 2.png" width="600"/> <!-- Increased size -->
      </div>
      <div class="md:w-1/2">
        <p class="text-gray-500">ABOUT BONANZA</p>
        <h1 class="text-5xl font-bold">HOME</h1>
        <p class="text-gray-700 text-sm">Mari bersama sama mengenali kami dengan apa yg kami mulai dan apa yg kami buat</p> <!-- Reduced font size -->
      </div>
    </div>

    <div class="text-center mb-12"> <!-- Increased margin bottom -->
      <h2 class="text-2xl font-bold">What we Give</h2>
      <p class="text-gray-500">a nice family cafe Bonanza</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-12"> <!-- Increased gap and margin bottom -->
      <div class="bg-white p-4 rounded-lg shadow">
        <i class="fas fa-cogs text-4xl text-gray-500 mb-2"></i>
        <h5 class="text-lg font-bold">SERVICE</h5>
        <p class="text-sm text-gray-600">Kami memastikan setiap pelanggan menerima layanan yang personal dan profesional untuk memenuhi kebutuhan mereka, mulai dari pemesanan hingga dukungan setelah layanan.</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow">
        <i class="fas fa-clock text-4xl text-gray-500 mb-2"></i>
        <h5 class="text-lg font-bold">QUALITY TIME</h5>
        <p class="text-sm text-gray-600">Kami menyediakan ruang yang hangat dan nyaman, cocok untuk bersantai, berbicara, dan menikmati momen berkualitas bersama keluarga atau teman.</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow">
        <i class="fas fa-utensils text-4xl text-gray-500 mb-2"></i>
        <h5 class="text-lg font-bold">NICE DISH</h5>
        <p class="text-sm text-gray-600">Kami menggunakan bahan-bahan pilihan untuk menyajikan hidangan yang lezat, segar, dan berkualitas tinggi.</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow">
        <i class="fas fa-thumbs-up text-4xl text-gray-500 mb-2"></i>
        <h5 class="text-lg font-bold">ENJOYABLE</h5>
        <p class="text-sm text-gray-600">Kami tidak hanya menyajikan makanan, kami menciptakan suasana dan pengalaman bersantap yang menyenangkan, membuat setiap kunjungan menjadi waktu yang dinantikan.</p>
      </div>
    </div>

    <div class="flex mb-12" style="height: 425px;"> <!-- Increased margin bottom -->
      <div class="bg-black text-white flex flex-col justify-center p-6 w-1/2"> <!-- Added padding -->
        <h2 class="text-4xl font-bold">WE WILL DO BEST FOR YOUR REST TIME</h2> <!-- Adjusted font size -->
        <p class="text-sm">Kami akan melakukan yang terbaik untuk menjadikan setiap kunjungan sebagai kesempatan untuk beristirahat dengan nyaman dan tanpa gangguan, memberikan ketenangan yang Anda butuhkan.</p>
      </div>
      <div class="w-1/2">
        <img alt="Highlight image" src="<?= BASEURL; ?>/img/about/footerhome.png" class="w-full h-full object-cover"/>
      </div>
    </div>

    <div class="flex flex-col md:flex-row mb-12"> <!-- Increased margin bottom -->
      <div class="md:w-1/2 flex flex-col justify-center"> <!-- Align text vertically center -->
        <div class="text-left"> <!-- Removed background and shadow -->
          <h2 class="text-2xl font-bold">MORE INFORMATION ABOUT OUR CAFE</h2> <!-- Increased font size -->
          <p class="text-gray-600 mt-2">Butuh inspirasi untuk waktu bersantai Anda? Lihat galeri kami dan temukan atmosfer unik Bonanza serta sajian yang dirancang khusus untuk membuat kunjungan Anda berkesan.</p>
          <button class="bg-gray-800 text-white py-2 px-4 rounded mt-4">View Gallery</button> <!-- Added margin top for spacing -->
        </div>
      </div>
      <div class="md:w-1/2 ml-8"> <!-- Increased margin-left for spacing -->
        <img alt="Cafe seating area" class="img-fluid rounded" src="<?= BASEURL; ?>/img/about/Group 47.png" width="500" height="500"/>
      </div>   
    </div>

    <div class="flex flex-col md:flex-row mb-12"> <!-- Increased margin bottom -->
      <div class="md:w-1/2">
        <img alt="Desserts and drinks" height="500" src="<?= BASEURL; ?>/img/about/Group 51.png" class="rounded-lg"/>
      </div>
      <div class="md:w-1/2 flex flex-col justify-center"> <!-- Align text vertically center -->
        <div class="text-left"> <!-- Removed background and shadow -->
          <h2 class="text-2xl font-bold">WE MAKE GOOD DISH JUST FOR YOU</h2> <!-- Increased font size -->
          <p class="text-gray-600 mt-2">Di Bonanza Café, kami menyajikan hidangan spesial hanya untuk Anda, menciptakan pengalaman yang berkesan di setiap momen bersama kami.</p>
          <button class="bg-gray-800 text-white py-2 px-4 rounded mt-4">View Menu</button> <!-- Added margin top for spacing -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>
