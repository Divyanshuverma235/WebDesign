<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling Form</title>
</head>
<body style="font-family: Arial, sans-serif; max-width: 400px; margin: 0 auto; padding: 20px;">

    <h2 style="text-align: center;">Selling Form</h2>

    <form action="sellingdatainsert.php" method="POST" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <label for="fullname" style="margin-bottom: 10px; display: block;">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="email" style="margin-bottom: 10px; display: block;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="coursename" style="margin-bottom: 10px; display: block;">Course Name:</label>
        <select id="coursename" name="coursename" required style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            <option value="">Select a Course</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <!-- Add more courses here -->
        </select>

        <label for="courseprice" style="margin-bottom: 10px; display: block;">Course Price:</label>
        <input type="text" id="courseprice" name="courseprice" required style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <input type="submit"name="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
    </form>

</body>
</html>
