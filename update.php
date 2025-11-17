<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication = $_POST['publication'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $pages = $_POST['pages'];

    mysqli_query($koneksi, "UPDATE book 
        SET author='$author', 
            publication='$publication', 
            genre='$genre', 
            language='$language', 
            pages='$pages' 
        WHERE title='$title'");

    header("Location: show.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="data.css" rel='stylesheet'>
</head>
<body>
    <div class="update">
        <br/>
        <a href="show.php" class="button">← BACK</a>
        <h2>BOOK RECOMMENDATION</h2>
        <hr/>
        <h3>EDIT BOOK DATA</h3>

        <?php
        // --- Display current data for editing ---
        $title = $_GET['id'];
        $project = mysqli_query($koneksi, "SELECT * FROM book WHERE title='$title'");

        // check if found
        if (mysqli_num_rows($project) > 0) {
            while ($d = mysqli_fetch_array($project)) {
        ?>
                <form method="post">
                    <label>Title</label><br>
                    <input type="text" name="title" value="<?php echo $d['title']; ?>" readonly><br><br>

                    <label>Author</label><br>
                    <input type="text" name="author" value="<?php echo $d['author']; ?>" required><br><br>

                    <label>Year of Publication</label><br>
                    <input type="date" name="publication" value="<?php echo $d['publication']; ?>" required><br><br>

                    <label>Genre</label><br>
                    <input type="text" name="genre" value="<?php echo $d['genre']; ?>" required><br><br>

                    <label>Language</label><br>
                    <input type="text" name="language" value="<?php echo $d['language']; ?>" required><br><br>

                    <label>Pages</label><br>
                    <input type="number" name="pages" value="<?php echo $d['pages']; ?>" required><br><br>

                    <button type="submit" name="submit">SAVE</button>
                </form>
        <?php
            }
        } else {
            echo "<p>❌ Book not found!</p>";
        }
        ?>
    </div>
</body>
</html>
