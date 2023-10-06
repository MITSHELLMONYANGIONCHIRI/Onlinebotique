<!DOCTYPE html>
    <html>

        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            <link href="assets/img/trendy logo.png" rel="icon">
            <!-- CSS FILES -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet">

            <link href="icons/bootstrap-icons.css" rel="stylesheet">

            <link href="assets/css/house-hunt-header.css" rel="stylesheet">

            <link href="assets/css/homepage.css" rel="stylesheet">

            <link href="assets/css/belowheader.css" rel="stylesheet">

            <link href="assets/css/footer.css" rel="stylesheet">

        </head>

        <body>
             <?php include 'include/header.php'; ?>

        

            <!-- Footer -->
            <?php include 'include/footer.php'; ?>

            <div class="back-to-top" id="backToTop">
                <i class="fa fa-arrow-up"></i>
            </div>
        </body>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.sticky.js"></script>
            <script>
                const banner = document.getElementById('banner');
                const images = ['assets/img/Kenyan-House-2.webp', 'assets/img/hero.jpg', 'assets/img/maxresdefault.jpg'];
                let currentIndex = 1;

                function changeBackgroundImage() {
                    banner.style.backgroundImage = `url('${images[currentIndex]}')`;
                    currentIndex = (currentIndex + 1) % images.length;
                }

                setInterval(changeBackgroundImage, 5000);

                window.addEventListener('load', () => {
                    banner.style.backgroundImage = `url('${images[0]}')`;
                });
                function scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }

                function toggleBackToTopButton() {
                    const backToTopButton = document.getElementById('backToTop');
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        backToTopButton.style.display = 'block';
                    } else {
                        backToTopButton.style.display = 'none';
                    }
                }

                // Attach the function to the scroll event
                window.addEventListener('scroll', toggleBackToTopButton);
                document.getElementById('backToTop').addEventListener('click', scrollToTop);
            </script>

</html>