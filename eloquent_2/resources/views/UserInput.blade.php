<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="insert" method="post">
            @csrf
            <label>Enter Your Name:</label><br>
            <input type="text" name="name" placeholder="Enter Your name"><br>
            <label>Enter Your Email:</label><br>
            <input type="text" name="email" placeholder="Enter Your Email"><br>
            <label>Enter Your Address:</label><br>
            <input type="text" name="address" placeholder="Enter Your Address"><br>
            <label>Enter Your Company Name:</label><br>
            <input type="text" name="departmentname" placeholder="Enter Your company Name"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>