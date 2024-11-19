<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>help</title>.
    <link rel="stylesheet" href="css/help.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="contact-area" id="contact-area">
        <h1>Contact us</h1>
        <p>if you have any questions or need help with anything, please contact us </p>
        <form action="contact.php" method="post">
            <input type="text" name="name" id="name" placeholder="name">
            <input type="email" name="email" id="email" placeholder="email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea>
            <button type="submit">send</button>
        </form>
    </div>
    <div class="faq-area" id="faq-area">
        <h1>FAQ</h1>
        <div class="faq">
            <h2 onclick="toggleAnswer(this)">Q: How do I know if my order has been placed successfully?</h2>
            <p class="answer">A: You will receive an email confirmation containing the Order Number and details of your purchase.</p>
        </div>
        <div class="faq">
            <h2 onclick="toggleAnswer(this)">Q: Can I change my order after I have placed it?</h2>
            <p class="answer">A: Unfortunately, we are unable to make changes to your order once it has been placed. However, you may be able to cancel your order and place a new one.</p>
        </div>
        <div class="faq">
            <h2 onclick="toggleAnswer(this)">Q: How can I track my order?</h2>
            <p class="answer">A: You will receive an email with a tracking number once your order has been shipped. You can use this tracking number to track your order on the carrier's website.</p>
        </div>
        <div class="faq">
            <h2 onclick="toggleAnswer(this)">Q: What is your return policy?</h2>
            <p class="answer">A: Our return policy can be found <a href="#">here</a>.</p>
        </div>
    </div>
    @include('layouts.footer')

    <script>
        function toggleAnswer(element) {
            var answer = element.nextElementSibling;
            if (answer.style.maxHeight){
                answer.style.maxHeight = null;
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        }
    </script>
</body>
</html>
