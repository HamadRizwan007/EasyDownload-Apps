<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google reCAPTCHA v3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeTYg8jAAAAAAis81PLIW0dQQ3WA5IfZmF_HbJC"></script>
    <script>
        grecaptcha.ready(() => {
            grecaptcha.execute('6LeTYg8jAAAAAAis81PLIW0dQQ3WA5IfZmF_HbJC', { action: 'contact' }).then(token => {
              document.querySelector('#recaptchaResponse').value = token;
            });
        });
    </script>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half">
                    <form method="POST">
                        <h1 class="title">
                            reCAPTCHA v3
                        </h1>

                        <div class="field">
                            <label for="name" class="label">Name</label>
                            <div class="control">
                                <input type="text" name="name" id="name" class="input" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" id="email" class="input" placeholder="Email Address" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="message" class="label">Message</label>
                            <div class="control">
                                <textarea name="message" id="message" class="textarea" placeholder="Message" required></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Send Message</button>
                            </div>
                        </div>

                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['recaptcha_response'])) {
    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LeTYg8jAAAAACZg6j2WqP5qr-zPqKTQCzys4a2L';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        echo "done";
    } else {
        // Not verified - show form error
    }
} ?>


</html>