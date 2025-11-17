<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication = $_POST['publication'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $pages = $_POST['pages'];

    mysqli_query($koneksi,"INSERT INTO book (title, author, publication, genre, language, pages) VALUES ('$title', '$author', '$publication','$genre','$language','$pages')");

    header("location:show.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Recoms</title>
    <link rel="stylesheet" href="data.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo">Library</div>
            <nav>
                <a href="data.php">Data</a>
                <a href="show.php">Recoms</a>
                <a href="login.php" class="login-btn">Log out</a>
            </nav>
        </div>
    </header>
    <div class="box">
            <h2>BOOK RECOMMENDATIONS</h2>
            <h3>What book do you like the most?</h3>
            <h4>Let us know ~</h4>

            <form method="post" action="data.php">
                <label>Title</label><br>
                <input type="text" name="title" required><br>

                <label>Author</label><br>
                <input type="text" name="author" required><br>

                <label>Year of Publication</label><br>
                <input type="date" name="publication" required><br>

                <label>Genre</label><br>
                <select name="genre" required>
                    <option value="" disabled selected>-- Select Genre --</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Thriller">Thriller</option>
                </select><br>

                <label>Language</label><br>
                <select name="language" required>
                    <option value="" disabled selected>-- Select Language --</option>
                    <option value="English">English</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Mandarin">Mandarin</option>
                </select><br>

                <label>Pages</label><br>
                <input type="number" name="pages" required><br>

                <button type="submit">SAVE</button>
            </form>
    </div>

    <footer>
        © <?php echo date("Y"); ?> School Digital Library | Made with ❤️ by Shann
    </footer>
</body>
</html>