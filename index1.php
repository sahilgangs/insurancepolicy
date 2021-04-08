<html>
<head>
    <title> Query</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
    <body>
    <div class="login-box">
    <!--<img src="logo.png" class="avatar"> -->
      <!--  <h1>Feedback Form</h1>
        <h4>We would love to hear your thoughts,concerns or problems with
                    anything, so we can improve! </h4>-->
            <form action="feedback.php" method="post" >
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email">
            <p>Subject</p>
            <input type="text" name="subject" placeholder="Enter Subject">
            <p>Message</p>
            <textarea name="message"  id="messageField" placeholder="Enter your Query"></textarea>
            <input type="submit" name="submit" value="Submit">
              
            </form>
        
        
        </div>
    
    </body>
</html>