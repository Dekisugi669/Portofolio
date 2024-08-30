<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Graphic Designer Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Me</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.html">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="container">
        <h2>Get in Touch</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Send Message</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Nomor telepon WhatsApp tujuan (format internasional tanpa tanda + atau spasi)
            $phone_number = '6281322789164'; // Ganti dengan nomor WhatsApp tujuan

            // Membuat pesan yang akan dikirim
            $whatsapp_message = "Hello, my name is $name. %0AEmail: $email %0A%0A$message";

            // Membuat URL WhatsApp
            $whatsapp_url = "https://wa.me/$phone_number?text=" . urlencode($whatsapp_message);

            // Redirect ke WhatsApp
            echo "<script>window.location.href='$whatsapp_url';</script>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Diki. All rights reserved.</p>
    </footer>
</body>
</html>
