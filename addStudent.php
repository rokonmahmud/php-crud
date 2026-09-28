
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    include_once('dbconfig.php');
    $con->query("INSERT INTO students (id, name, email, phone) VALUE (NULL, '$name', '$email', '$phone')");

    if ($con->affected_rows) {
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student | University</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="index.php"><span class="brand-mark">U</span><span>University</span></a>
            <span class="header-note">Student registry</span>
        </header>
        <main class="page-content">
            <div class="page-heading">
                <div>
                    <p class="eyebrow">New record</p>
                    <h1>Add student</h1>
                </div>
            </div>
            <section class="form-frame" aria-label="Student details">
                <form class="student-form" action="" method="post">
                    <div class="form-field full-width">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" placeholder="Full name" autocomplete="name" required>
                    </div>
                    <div class="form-field full-width">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="name@example.com" autocomplete="email" required>
                    </div>
                    <div class="form-field full-width">
                        <label for="phone">Phone</label>
                        <input id="phone" type="tel" name="phone" placeholder="Phone number" autocomplete="tel" required>
                    </div>
                    <div class="form-actions">
                        <button class="submit-button" type="submit">Save student <span aria-hidden="true">&#8594;</span></button>
                        <a class="text-link" href="index.php">Cancel</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>