<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="index.css">
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
    </header>

    <section class="hero">
        <h1>Welcome to The Digital Library 📚</h1>
        <p>Discover, learn, and share your favorite books with our community of readers.</p>
        <a href="login.php">Get Started</a>
        <a href="about.php">About us</a>
    </section>

    <h2>What can you do here?</h2>

    <section class="cards">
        <div class="card">
            <h3>📖 Browse Books</h3>
            <p>Explore our collection of books recommended by students and teachers.</p>
        </div>

        <div class="card">
            <h3>✏️ Recommend</h3>
            <p>Have a favorite book? Add your own recommendation for others to see!</p>
        </div>

        <div class="card">
            <h3>💬 Join the Library</h3>
            <p>Create an account to log in and start sharing your favorite reads.</p>
        </div>
    </section>

    <section class="mission">
        <h2>Our Mission</h2>
        <p>We aim to make reading fun and easy for students. You can browse recommended books, add your own favorites, and inspire others to read more!</p>
        <div class="mission-icons">
            <div>📚 <br>Learn</div>
            <div>💡 <br>Discover</div>
            <div>❤️ <br>Share</div>
        </div>
    </section>

    <section class="genres">
        <h2>Explore by Genre</h2>

        <div class="genre-grid">
            <a href="about.php" class="genre-card">📖 Fantasy</a>
            <a href="about.php" class="genre-card">💘 Romance</a>
            <a href="about.php" class="genre-card">🔍 Mystery</a>
            <a href="about.php" class="genre-card">🔪 Thriller</a>
        </div>
    </section>

    <section class="how-it-works">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
            <h3><a href="register.php">1️⃣ Register</h3>
            <p>Create your free account and join our library community.</p>
            </div>
            <div class="step">
            <h3><a href="about.php">2️⃣ Browse</h3>
            <p>Explore books recommended by other students.</p>
            </div>
            <div class="step">
            <h3><a href="login.php">3️⃣ Recommend</h3>
            <p>Share your favorite books and inspire others to read!</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to explore?</h2>
        <p>Start discovering new books and sharing your recommendations today!</p>
        <a href="login.php" class="cta-btn">Login</a>
        <a href="register.php" class="cta-btn secondary">Register</a>
    </section>

    <footer>
        © <?php echo date("Y"); ?> School Digital Library | Made with ❤️ by Shann
    </footer>

</body>
</html>