<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <div class="footer">
        <div class="footer-left">
            <img id="logo" src="images/Your-Logo-here.png">
            <ul id="social-links">
                <a><img src="images/instagram-1-svgrepo-com.svg" alt="instagram" href=""></a>
                <a><img src="images/twitter-color-svgrepo-com.svg" alt="twitter" href=""></a>
                <a><img src="images/twitch-svgrepo-com.svg" alt="twitch" href=""></a>
                <a><img src="images/youtube-color-svgrepo-com.svg" alt="youtube" href=""></a>
                <a><img src="images/discord-icon-svgrepo-com.svg" alt="discord" href=""></a>
            </ul>
        </div>
        <div class="footer-middle">
            <ul>
                <a href="help.php#contact-area">contact us</a>
                <a href="help.php#faq-area">faq</a>
                <a>guide</a>
            </ul>
        </div>
        <div class="footer-right">
            <h1>Newsletter</h1>
            <h3>sign up to receive news about PCs and incoming drops</h3>
            <input type="text" placeholder="Email">
            <button>sign up</button>
        </div>
    </div>

    <script>
        //footer functions
        (function() {
            // Use of const
            const socialLinks = document.getElementById('social-links');

            // Event attached to an element
            socialLinks.addEventListener('mouseover', function(event) {
                // Manipulating elements
                event.target.style.transform = 'scale(1.1)';
                // Basic CSS animation
                event.target.style.transition = 'transform 0.5s';
            });

            socialLinks.addEventListener('mouseout', function(event) {
                event.target.style.transform = 'scale(1)';
            });

            // Form validation
            const emailInput = document.querySelector('.footer-right input[type="text"]');
            const signUpButton = document.querySelector('.footer-right button');

            signUpButton.addEventListener('click', function() {
                const email = emailInput.value;
                if (!email.includes('@')) {
                    alert('Please enter a valid email address.');
                    return;
                }

                alert(`You've signed up with the email: ${email}`);

                // Use of LocalStorage
                localStorage.setItem('email', email);
            });





        })();
    </script>
</body>
</html>
