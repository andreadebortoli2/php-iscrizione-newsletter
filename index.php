<?php

$email = $_GET['email'];
var_dump($email);
if (isset($email)) {
    if (strlen($email) > 0) {
        echo 'email';
        if (str_contains($email, '@') && str_contains($email, '.')) {
            echo ' ok';
            $message = 'Thanks for your subscription!';
        } else {
            echo ' not ok';
            $message = 'Check your email, the format is uncorrect.';
        }
    } else {
        echo 'empty email';
        $message = 'You forgot to write your email in the box.';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>php-iscrizione-newsletter</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <header>
        <!-- place navbar here -->
    </header>

    <main>
        <div class="container">
            <form action="" method="get">
                <h3>Subscribe to our newsletter</h3>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" />
                    <small id="helpId" class="form-text text-muted">Write here your email address</small>
                </div>
                <button type="submit" class="btn btn-primary">
                    Subscribe
                </button>
            </form>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong><?= $message; ?></strong>
            </div>

        </div>


    </main>

    <footer>
        <!-- place footer here -->
    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>