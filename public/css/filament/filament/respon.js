// Smooth scroll to the About section
function scrollToAbout() {
    const aboutSection = document.getElementById("about");
    aboutSection.scrollIntoView({ behavior: "smooth" });
}
function scrollToContact() {
    const contactSection = document.getElementById("contact");
    contactSection.scrollIntoView({ behavior: "smooth" });
}

// Menambahkan event scroll untuk navbar
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');

    // Cek apakah sudah discroll lebih dari 50px
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled'); // Menambahkan class scrolled
    } else {
        navbar.classList.remove('scrolled'); // Menghapus class scrolled
    }
});


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

