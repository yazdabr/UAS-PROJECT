<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/tampilan.css') }}">
     <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    
body {
    background-image: url('assets/star.jpg');
}
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">Project UAS</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="home-section">
        <div class="home-content">
            <!-- Teks Sebelah Kiri -->
             
            <div class="home-text">
                
                <h1>Hi There!
                    <i class="fas fa-hand icon-one"></i></h1>
            <h2><SPan>WELCOME</SPan> TO OUR PAGE</h2>
            <p>
                <span>Project</span> <!-- Teks "Project" -->
                <span id="dynamic-text">Laravel 11</span> <!-- Animasi teks -->
            </p>
            </div>
            
            <!-- Foto Bulat di Tengah -->
            <div class="home-photo">
                <img src="assets/coding.png" alt="Logo atau Foto" class="photo">
            </div>
        </div>
    </section>
    



    <!-- About Section -->
    <section id="about" class="about-section">
        <p></p>
        <div class="icon-container">
            <i class="fas fa-address-card icon-two"></i>
        </div>
        <h2>About Us</h2>
        <div class="team">
            <!-- Person 1 -->
            <div class="person">
                <img src="assets/yazid.jpg" alt="Person 1">
                <h3>Yazid Abrar</h3>
                <p>Front End / Back End</p>
                <hr>
                <p><span class="label">Birthdate:</span> <span class="info">09/03/05</span></p>
                <p><span class="label">Email:</span> <span class="info">yazdabr@gmail.com</span></p>
                <p><span class="label">Phone:</span> <span class="info">0813-9111-1916</span></p>
                <p><span class="label">Instagram:</span> <span class="info">yazid.abr</span></p>
            </div>
            <!-- Person 2 -->
            <div class="person">
                <img src="https://via.placeholder.com/150" alt="Person 2">
                <h3>Rida Mardiana Novita</h3>
                <p>UI/UX Designer</p>
                <hr>
                <p><span class="label">Birthdate:</span> <span class="info">06/03/05</span></p>
                <p><span class="label">Email:</span> <span class="info">ridamn@gmail.com</span></p>
                <p><span class="label">Phone:</span> <span class="info">0815-4914-0739</span></p>
                <p><span class="label">Instagram:</span> <span class="info">ridaamardiana</span></p>
            </div>
        </div>
        <p></p><p></p>
        <a href="/admin">
            <button type="button">DASHBOARD</button>
        </a>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>Email: yazdabr@gmail.com</p>
        <p>Phone: +62 813 9111 1916</p>
    </section>

    <!-- JavaScript -->
    <script src="respon.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
    
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>
    <script>
                document.addEventListener("DOMContentLoaded", function () {
            var textElement = document.getElementById("dynamic-text");
            var texts = ["Laravel 11", "Filament"]; // Teks yang akan diganti
            var currentIndex = 0;
            var text = texts[currentIndex];
            var index = 0;
            var typingSpeed = 150; // Kecepatan mengetik (ms)
            var deletingSpeed = 50; // Kecepatan penghapusan teks (ms)
            var pauseTime = 1500; // Waktu berhenti antara teks (ms)

            // Fungsi untuk mengetik teks
            function typeText() {
                textElement.textContent = text.slice(0, index);
                index++;
                if (index <= text.length) {
                    setTimeout(typeText, typingSpeed);
                } else {
                    setTimeout(deleteText, pauseTime); // Berhenti sejenak setelah teks selesai
                }
            }

            // Fungsi untuk menghapus teks
            function deleteText() {
                if (index > 0) {
                    textElement.textContent = text.slice(0, index - 1);
                    index--;
                    setTimeout(deleteText, deletingSpeed);
                } else {
                    // Ganti teks dan mulai animasi lagi
                    currentIndex = (currentIndex + 1) % texts.length;
                    text = texts[currentIndex];
                    setTimeout(typeText, pauseTime); // Mulai mengetik teks baru
                }
            }

            // Mulai animasi ketikan
            typeText();
        });
    </script>
    <script>
            window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');

        // Cek apakah sudah discroll lebih dari 50px
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled'); // Menambahkan class scrolled
        } else {
            navbar.classList.remove('scrolled'); // Menghapus class scrolled
        }
    });
    </script>
</body>
</html>
