<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="style/index.css">
    <script src="./js/index.js"></script>
    <link rel="icon" href="./style/DevWall.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="banner">
            <div class="time" id="updateTime">
                <script>
                    updateTime();
                </script>
            </div>
            <div class="welcome">
                <h1>Welcome To DevWall</h1>
            </div>
        </div>
        <nav>
            <div class="search-container">
                <input type="text" placeholder="What Are You Looking For !" />
                <div class="site-info">
                    <span>DevWall</span>
                    <img src="./style/DevWall.png" alt="Site Icon" />
                </div>
                <div clas="dark-mode">
                    <img id="darkModeImage" src="./style/dark-mode.png" onclick="DarkMode()" alt="Dark Mode" />
                </div>
                <div class="user-profile">

                    <img src="#" alt="User Profile" onclick="toggleUserMenu()" />
                    <div class="user-menu">
                        <a href="../profile.php">My Profile</a>
                        <a href="../my-posts.php">My Posts</a>
                        <a href="../my-comments.php">My Comments</a>
                        <a href="../my-favorites.php">My Favorites</a>
                        <a href="./logout.php">Logout</a>
                    </div>
                </div>

            </div>
            <div class="links">
                <a href="./index.php">DevWall</a>
                <a href="./articles.php">Articles</a>
                <a href="./discuss.php">Discuss</a>
                <a href="./new-posts.php">New Posts</a>
                <a href="#" class="useful-links">Useful links</a>
                <div class="useful-links-menu">

                    <a href="https://t.me/DevWall">Telegram</a>
                    <a href="./qa.php">QA</a>
                    <a href="./about.php">About Us</a>
                    <a href="./contact.php">Call Us</a>
                    <a href="./collaboration.php">Collaboration</a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <h2>Company Posts</h2>
        <div class="company-posts">
            <div class="row">
                <div class="form">
                    <img src="company1.jpg" alt="Company 1">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="company2.jpg" alt="Company 2">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="company3.jpg" alt="Company 3">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="company4.jpg" alt="Company 4">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="company5.jpg" alt="Company 5">
                    <button>نمایش بیشتر</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2>Developer Posts</h2>
        <div class="developer-posts">
            <div class="row">
                <div class="form">
                    <img src="developer1.jpg" alt="Developer 1">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="developer2.jpg" alt="Developer 2">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="developer3.jpg" alt="Developer 3">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="developer4.jpg" alt="Developer 4">
                    <button>نمایش بیشتر</button>
                </div>
                <div class="form">
                    <img src="developer5.jpg" alt="Developer 5">
                    <button>نمایش بیشتر</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
