<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share With Us</title>
    <link rel="stylesheet" href="../Posts/Posts.css">
    <script src="../Posts/Posts.js"></script>
</head>
<body>
    <header>
        <h1>Share With Us</h1>
    </header>
    <section>
        <form action="Posts.php" method="post" enctype="multipart/form-data" class="post-container">
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone :</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="looking_for">Looking For :</label>
            </div>
            <div class="form-group">
                <div class="icons">
                    <img src="../style/Lan/CSS.ico" alt="CSS Icon" title="CSS" onclick="selectIcon('CSS')">
                    <img src="../style/Lan/HTML.ico" alt="HTML Icon" title="HTML" onclick="selectIcon('HTML')">
                    <img src="../style/Lan/JS.ico" alt="JavaScript Icon" title="JavaScript" onclick="selectIcon('JavaScript')">
                    <img src="../style/Lan/MySQL.ico" alt="MySQL Icon" title="MySQL" onclick="selectIcon('MySQL')">
                    <img src="../style/Lan/PHP.ico" alt="PHP Icon" title="PHP" onclick="selectIcon('PHP')">
                    <img src="../style/Lan/Python.ico" alt="Python Icon" title="Python" onclick="selectIcon('Python')">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <button type="submit">Share Now</button>
            </div>
        </form>
    </section>
</body>
</html>
