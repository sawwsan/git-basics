<head>
    <title>SignUp Page</title>
    <link rel="stylesheet" href="css/signupform.css" />
</head>
<body>
    <div id="formbox">
        <form action="save.php" method="POST" >
            <div class="row" >
                <label class="minirow" >FirstName</label>
                <input class="minirow" type="text" name="fname" />
            </div>
            <div class="row">
                <label class="minirow">LastName</label>
                <input class="minirow" type="text" name="lname" />
            </div>
            <div class="row">
                <label class="minirow">Email</label>
                <input class="minirow" type="email" name="mail" />
            </div>
            <div class="row">
                <label class="minirow">Password</label>
                <input class="minirow" type="password" name="pass" />
            </div>
            <div class="row">
                <label>Gender</label>
                <select name="sex">
                    <option value="1" >Male</option>
                    <option value="2" >Female</option>
                </select>   
            </div>
            <div>
                <button class="btn">SignUp</button>
            </div>
        </form>
</div>
</body>