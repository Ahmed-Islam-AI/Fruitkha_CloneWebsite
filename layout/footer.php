<footer>
        <div class="footer">
            <div class="content">
                <div class="elements">
                    <h1>About</h1>
                    <ul class="ft-content">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum et reiciendis delectus
                            tempore itaque sed laudantium minus accusamus quas omnis nihil quibusdam velit dolor, quae
                            fugiat, error, laborum vero nulla!</p>
                    </ul>
                </div>
                <div class="elements">
                    <h1>Get into Touch</h1>
                    <div class="ft-content">
                        <a href="#">34/8, East Hukupara, Gifirtok, Sadan.</a>
                        <a href="#">support@fruityAdventure.com</a>
                        <a href="#">fruityAdventure@gmail.com</a>
                        <br>
                        <a href="#">+00 111 222 3333</a>
                    </div>
                </div>
                <div class="elements">
                    <h1>My Accounts</h1>
                    <ul class="ft-content">
                        <li><a href="">Sign in</a></li>
                        <li><a href="">View Cart</a></li>
                        <li><a href="">My Wishlist</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Support</a></li>
                    </ul>
                </div>
                <div class="elements">
                    <h1>Subscribe</h1>
                    <div class="ft-content">
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <div class="subcribeDiv">
                            <input type="email" name="" id="" placeholder="Email">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="braker">
            <div class="ft-end">
                <p>Copyrights &copy; 2023 - Ahmed Islam, All Rights Reserved.</p>
                <div class="ft-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- text changing javascript -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".mov",{
        strings: ["Fresh Fruits.","Milky Fruits.","Juicy Fruits."] ,
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
    
        })
    </script>


    <!-- header javascript -->
    <script>
        // get the navbar element
        const navbar = document.getElementById("navbar");

        // get the height of the navbar
        const navbarHeight = navbar.offsetHeight;

        // add an event listener for the scroll event
        window.addEventListener("scroll", () => {
            // get the current scroll position
            const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

            // if the scroll position is greater than the navbar height, add the scrolled class
            if (scrollPosition > navbarHeight) {
                navbar.classList.add("navbar-scrolled");
            } else {
                navbar.classList.remove("navbar-scrolled");
            }
        });

    </script>



    <!-- carousel java script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#myCarousel").owlCarousel({
                items: 4,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                nav: true,
                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
            });
        });

    </script>

    <!-- checkout dropdown script -->


<script>
         document.addEventListener('DOMContentLoaded', function() {
  var trigger = document.querySelector('.dropdown-trigger');
  var content = document.querySelector('.dropdown-content');

  trigger.addEventListener('click', function() {
    if (content.style.display === 'none') {
      content.style.display = 'block';
    } else {
      content.style.display = 'none';
    }
  });
});

</script>




</body>
</html>