
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Autorisation</title>
    <link
        href="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstra[.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOul0xtbfIcaT9wjKHr8RbDVddVNyTfAAsrekwKmP1"
         crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
         }
         #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
         }
         #password {
              margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8"
                <h3>Autorithation</h3>
                <div class="alert alert-danger <?=!$error ? 'visually-hidden' : ''?>">
                    Error <?=$error?>
                </div>
                <label for="username" class="visually-hidden">Name User</label>
                <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Name User" required="" autofocuse="">
                <label for="password" class="visually-hidden">Password</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="password User" required="" autofocuse="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Sigin in</button>
                <div><a href="/">Back</a></div>
            </form>
        </div>
    </div>
</body>
