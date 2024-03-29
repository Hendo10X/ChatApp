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
        <section class="form login">
            <header>LinkChat</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter your Mail">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter your Username">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    
                    <div class="field input button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Not signed up yet?<a href=""> Sign up now</a></div>
        </section>
    </div>
    <script src="./Javascript/main.js"></script>
</body>
</html>