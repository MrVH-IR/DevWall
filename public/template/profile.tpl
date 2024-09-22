<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="style/profile.css">
    <script src="./js/profile.js"></script>
    <link rel="icon" href="./style/DevWall.png" type="image/x-icon">

</head>
<body>
    <header>
        <div class="banner">
            <div class="site-info">
                <img src="./style/DevWall.png" alt="Site Icon" />
                <span>DevWall</span>
            </div>
            <div class="welcome">
                <h1>Welcome <?php echo $user_name; ?></h1>
            </div>
            <div class="time" id="updateTime">

                <script>
                    updateTime();
                </script>
            </div>
            <div class="dark-mode">
                <img id="darkModeImage" src="./style/Dark-Mode.png" onclick="DarkMode()" alt="Dark Mode" />
            </div>
            <div class="user-profile">
                <img src="<?php echo $user_profile_img_src; ?>" alt="User Profile" onclick="toggleUserMenu()" />
            </div>
        </div>
        <nav>
            <div class="menu">
                <a href="./panel.php">Panel</a>
                <a href="./comments.php">Comments</a>
                <a href="./articles.php">Articles</a>
                <a href="./posts/posts.php">Posts</a>
                <a href="./messages.php">Messages</a>
                <a href="./logout.php">Exit</a>
            </div>
        </nav>
    </header>
    <section>
        <h2>My Knowledge</h2>
        <div class="languages">
            <img src="./style/lan/js.ico" alt="Language 1">
            <img src="./style/lan/CSS.ico" alt="Language 2">
            <img src="./style/lan/HTML.ico" alt="Language 3">
            <img src="./style/lan/Php.ico" alt="Language 4">
            <img src="./style/lan/Python.ico" alt="Language 5">
            <img src="./style/lan/MySQL.ico" alt="Language 6">
            <!-- Add more languages as needed -->
        </div>
    </section>
    <section>
        <h2>My Posts</h2>
        <div class="user-posts">
            <div class="row">
                <div class="post">
                    <img src="post1.jpg" alt="Post 1">
                    <h3>عنوان پست 1</h3>
                    <p>تعداد کامنت ها: 10</p>
                </div>
                <div class="post">
                    <img src="post2.jpg" alt="Post 2">
                    <h3>عنوان پست 2</h3>
                    <p>تعداد کامنت ها: 5</p>
                </div>
                <div class="post">
                    <img src="post3.jpg" alt="Post 3">
                    <h3>عنوان پست 3</h3>
                    <p>تعداد کامنت ها: 8</p>
                </div>
                <!-- Add more posts as needed -->
            </div>
        </div>
    </section>
</body>
</html>
