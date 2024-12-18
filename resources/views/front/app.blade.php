<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link CSS -->
     <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
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
                <img src="image/coding.png" alt="Logo atau Foto" class="photo">
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
                <img src="image/yazid.jpg" alt="Person 1">
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
                <p><span class="label">Phone:</span> <span class="info">0813-9111-1916</span></p>
                <p><span class="label">Instagram:</span> <span class="info">ridaamardiana</span></p>
            </div>
        </div>
        <p></p><p></p>
        <button>DASHBOARD</button>
        
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
</body>
</html>
