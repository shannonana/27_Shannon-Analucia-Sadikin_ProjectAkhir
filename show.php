<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <link href="data.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet" >
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
    <div class="index">
    <a href="data.php" class="press recom">+ RECOMMEND BOOKS</a>
    <br/>
    <br/>
    <table border="1">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year of Publication</th>
                <th>Genre</th>
                <th>Language</th>
                <th>Pages</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $project = mysqli_query($koneksi,"select * from book");
            while ($d = mysqli_fetch_array($project)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['title']; ?></td>
                    <td><?php echo $d['author']; ?></td>
                    <td><?php echo $d['publication']; ?></td>
                    <td><?php echo $d['genre']; ?></td>
                    <td><?php echo $d['language']; ?></td>
                    <td><?php echo $d['pages']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['title']; ?>">UPDATE</a>
                        <a href="delete.php?id=<?php echo $d['title']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php
        }
        ?>
    </table>
    </div>

    <footer>
        © <?php echo date("Y"); ?> School Digital Library | Made with ❤️ by Shann
    </footer>
</body>
</html>