<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <h1>Register Here</h1>
    <form action="./register.php" method="post" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="profile_pic">Profile Picture</label>
        <input type="file" id="profile_pic" name="profile_pic"><br><br>

        <label for="bio">Biography</label>
        <textarea id="bio" name="bio"></textarea><br><br>

        <label for="website">Your Website</label>
        <input type="url" id="website" name="website"><br><br>

        <label for="company">Registering as a Company</label>
        <input type="checkbox" id="company" name="company" onclick="toggleCompanyForm()"><br><br>

        <div id="companyForm" style="display:none;">
            <label for="company_name">Company Name</label>
            <input type="text" id="company_name" name="company_name"><br><br>

            <label for="company_address">Company Address</label>
            <input type="text" id="company_address" name="company_address"><br><br>
        </div>

        <input type="hidden" name="created_at">
        <input type="hidden" name="updated_at">

        <button type="submit" name="submit" method="post">Register</button>
    </form>

    <script>
        function toggleCompanyForm() {
            var companyForm = document.getElementById("companyForm");
            if (document.getElementById("company").checked) {
                companyForm.style.display = "block";
            } else {
                companyForm.style.display = "none";
            }
        }
    </script>
</body>
</html>
