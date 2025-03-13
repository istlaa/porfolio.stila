<?php include('header.php'); ?>
    <main>
        <section id="section1" class="section section1 hidden">
    <div id="carouselSection1" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <img src="images/bienvenue.png" class="d-block w-100" alt="...">
    </div>
    <div class="text-block1">
         <h1>Bienvenue sur mon Portfolio</h1>
         <p>Je m'appelle Ilyasse Stila, je suis étudiant en BTS SIO option SLAM au lycée benjamin franklin à Orléans. Ce Portfolio a pour but de vous présenter mes réalisations au cours de ces 2 années d'études. </p>
        
    </div>
</section>

<section id="section2" class="section section2 hidden">
    <div class="text-block2">
        <h1>Réalisations professionnelles</h1>
<p>Découvrez les projets sur lesquels j'ai travaillé lors de mes ateliers pratiques.</p>

        <a href="projects.html" class="section2-button">Voir mes projets</a>

    </div>
    <div id="carouselSection2" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <img src="images/gsb1.png" class="d-block w-100" alt="...">
    </div>
</section>


<section id="section3" class="section section3 hidden">
    <div id="carouselSection3" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <img src="images/stellen.png" class="d-block w-100" alt="...">
    </div>
    <div class="text-block3">
        <h1>Stage SIO1</h1>
<p>Mon expérience professionnelle et les compétences développées lors de mon stage de première année.</p>

        <a href="stage.html" class="section3-button">En savoir plus</a>

    </div>
</section>
<section id="section4" class="section section4 hidden">
    <div class="text-block4">
       <h1>Stage SIO2</h1>
<p>Mon expérience professionnelle et les compétences développées lors de mon stage de seconde annéee.</p>

        <a href="stage2.html" class="section4-button">En savoir plus</a>

    </div>
    <div id="carouselSection4" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
                <img src="images/gt1.jpg" class="d-block w-100" alt="...">
           
            </div>
        </div>
    </div>
</section>
<section id="section5" class="section section5 hidden">
    <div id="carouselSection5" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
                <img src="images/certif.jpg" class="d-block w-100" alt="...">
           
            </div>
    <div class="text-block5">
        
       <h1>Certifications</h1>
<p>Mon parcours de certification et les compétences obtenues.</p>
<a href="pdf/certif.pdf" class="section5-button">Découvrir mes certifications</a>


        
    </div>
</section>

<section id="section4" class="section section4 hidden">
    <div class="text-block4">
       <h1>Veille Technologique</h1>
<p>Articles et recherches sur les dernières tendances technologiques.</p>

        <a href="veille.html" class="section4-button">Lire mes articles</a>

    </div>
    <div id="carouselSection4" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
                <img src="images/veille.jpg" class="d-block w-100" alt="...">
           
            </div>
        </div>
    </div>
</section>
<section id="section5" class="section section5 hidden">
    <div id="carouselSection5" class="carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        
                <img src="images/sauvegarde.jpg" class="d-block w-100" alt="...">
           
            </div>
    <div class="text-block5">
        
       <h1>Sauvegarde</h1>
<p>
    Ce travail réalisé m'a permis de mettre en oeuvrela compétence "Gérer le patrimoine informatique" en démontrant l'importance de la sauvegarde des données pour assurer la sécurité et la continuité des opérations au sein d'une entreprise.

</p>
<a href="pdf/sauvegarde.pdf" class="section5-button">Dossier sauvegarde</a>


        
    </div>
</section>



    </main>
    <footer>
        <div class="footer-sections">
        <div class="footer-section">
            <img src="images/cv.png" alt="Télécharger mon CV" class="responsive-img"/>
            <a href="pdf/CV_Ilyasse_STILA.pdf"><div class="overlay"></div></a>
            <div class="footer-content">
                <div class="footer-text">Télécharger mon CV</div>
               <a href="pdf/CV_Ilyasse_STILA.pdf" download class="discover-button" >Télécharger</a>
            </div>
        </div>
        <div class="footer-section">
            <img src="images/linkedin.png" alt="LinkedIn" class="responsive-img"/>
            <a href="https://linkedin.com/in/ilyasse-stila"><div class="overlay"></div></a>
            <div class="footer-content">
                <div class="footer-text">LinkedIn</div>
                <a href="https://linkedin.com/in/ilyasse-stila" class="discover-button">Voir mon profil</a>
            </div>
        </div>
    </div>
        
    </footer>
    <script>
        
	window.onscroll = function() {
            var header = document.querySelector("header");
            if (window.scrollY > 50) {
                header.classList.add("scrolled-header");
            } else {
                header.classList.remove("scrolled-header");
            }
        };
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loader');
        loader.classList.add('fondu-out');

        // Ajoutez la classe fade-in à toutes les sections une fois la page entièrement chargée
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            section.classList.add('fade-in');
        });
    });
</script>
</body>
</html>

