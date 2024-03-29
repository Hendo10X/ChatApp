<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkChat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>LinkChat</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">CodeName</label>
                        <input type="text" name="fname" placeholder="Enter your Username" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Enter your Mail" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter your Username" required>
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image" placeholder="Enter your Username" required>
                       
                    </div>
                    <div class="field input button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Already Signed up? <a href=""> Login now</a></div>
        </section>
    </div>
    <script src="./Javascript/main.js"></script>
    <script src="./Javascript/signup.js"></script>
</body>
</html>