<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Variables with Forms</title>
</head>
<body>

    <h2>Enter Your Information</h2>

    <form action="process.php" method="GET">
        <label for ="name">Name:</label>
        <input type="text" id="name" name="name" required><br></br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br></br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</head>
</html>
