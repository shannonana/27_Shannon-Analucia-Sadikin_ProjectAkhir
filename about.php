<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo">Library</div>
                <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="login.php" class="login-btn">Login</a>
                </nav>
        </div>
    </header>\

    <section class="about-intro">
    <h1>About My Library</h1>
    <p>I love reading and sharing books! Here are some of my favorite picks from different genres that inspire me every day.</p>
  </section>

  <!-- FANTASY -->
  <section class="genre-section">
    <h2>Fantasy</h2>
    <div class="book-list">
      <div class="book-card">
        <img src="fantasy1.jpg" alt="Fantasy Book 1">
        <div class="book-info">
          <h3 class="book-title">Title: Shatter Me</h3>
          <p>Author: Tahereh Mafi</p>
          <p>Year of Publication: 2011</p>
          <p>Pages:321</p>
        </div>
      </div>

      <div class="book-card">
        <img src="fantasy2.jpg" alt="Fantasy Book 2">
        <div class="book-info">
          <h3 class="book-title">Title: Unravel Me</h3>
          <p>Author: Tahereh Mafi</p>
          <p>Year of Publication: 2013</p>
          <p>Pages: 365</p>
        </div>
      </div>

      <div class="book-card">
        <img src="fantasy3.jpg" alt="Fantasy Book 3">
        <div class="book-info">
          <h3 class="book-title">Title: Ignite Me</h3>
          <p>Author: Tahereh Mafi</p>
          <p>Year of Publication: 2014</p>
          <p>Pages: 342</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ROMANCE -->
  <section class="genre-section">
    <h2>Romance</h2>
    <div class="book-list">
      <div class="book-card">
        <img src="romance1.jpg" alt="Romance Book 1">
        <div class="book-info">
          <h3 class="book-title">Title: Yours in Amsterdam</h3>
          <p>Author:</p>
          <p>Year of Publication: 2016</p>
          <p>Pages:344</p>
        </div>
      </div>

      <div class="book-card">
        <img src="romance2.jpg" alt="Romance Book 2">
        <div class="book-info">
          <h3 class="book-title">Title: Nothing Like The Movies</h3>
          <p>Author: Lynn Painter</p>
          <p>Year of Publication: 2017</p>
          <p>Pages: 401</p>
        </div>
      </div>

      <div class="book-card">
        <img src="romance3.jpg" alt="Romance Book 3">
        <div class="book-info">
          <h3 class="book-title">Title: Twisted Love</h3>
          <p>Author: Ana Huang</p>
          <p>Year of Publication: 2015</p>
          <p>Pages:387</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MYSTERY -->
  <section class="genre-section">
    <h2>Mystery</h2>
    <div class="book-list">
      <div class="book-card">
        <img src="mystery1.jpg" alt="Mystery Book 1">
        <div class="book-info">
          <h3 class="book-title">Title: The Hawthrone Legacy</h3>
          <p>Author: Jennifer Lynn Barnes</p>
          <p>Year of Publication: 2019</p>
          <p>Pages: 414</p>
        </div>
      </div>

      <div class="book-card">
        <img src="mystery2.jpg" alt="Mystery Book 2">
        <div class="book-info">
          <h3 class="book-title">Title: One of us is Lying</h3>
          <p>Author: Karen McManus</p>
          <p>Year of Publication:2012</p>
          <p>Pages:299</p>
        </div>
      </div>
      
      <div class="book-card">
        <img src="mystery3.jpg" alt="Mystery Book 3">
        <div class="book-info">
          <h3 class="book-title">Title: Kill Creature</h3>
          <p>Author: Rachel ressek</p>
          <p>Year of Publication: 2015</p>
          <p>Pages: 387</p>
        </div>
      </div>
    </div>
  </section>

  <!-- THRILLER -->
  <section class="genre-section">
    <h2>Thriller</h2>
    <div class="book-list">
      <div class="book-card">
        <img src="thriller1.jpg" alt="Thriller Book 1">
        <div class="book-info">
          <h3 class="book-title">Title: A Good Girls Guide to Murder</h3>
          <p>Author: Holly Jackson</p>
          <p>Year of Publication: 2013</p>
          <p>Pages: 344</p>
        </div>
      </div>

      <div class="book-card">
        <img src="thriller2.jpg" alt="Thriller Book 2">
        <div class="book-info">
          <h3 class="book-title">Title: Good Girl, Bad Blood</h3>
          <p>Author: Holly Jackson</p>
          <p>Year of Publication: 2015</p>
          <p>Pages: 384</p>
        </div>
      </div>

      <div class="book-card">
        <img src="thriller3.jpg" alt="Thriller Book 3">
        <div class="book-info">
          <h3 class="book-title">Title:</h3>
          <p>Author: Holly Jackson</p>
          <p>Year of Publication: 2017</p>
          <p>Pages: 437</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
      © <?php echo date("Y"); ?> School Digital Library | Made with ❤️ by Shann
  </footer>

</body>
</html>