<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        background-color: rgb(16, 16, 16);
    }

    .header {
        padding: 24px;
        display: flex;
        justify-content: left;
    }

    .back {
        display: flex;
        width: 12%;
        gap: 6px;
        cursor: pointer;
        align-items: center;
    }

    .back .material-symbols-outlined {
        color: gray;
    }

    .back p {
        color: white;
    }


    .header label {
        color: gray;
        margin-left: 4px;
        justify-content: center;
        text-align: center;
    }

    .iconig {
        display: flex;
        justify-content: center;
        width: 74%;
    }

    .iconig img {
        width: 58px;
        height: 58px;
    }

    .main {
        margin-top: 130px;
        justify-items: center;
    }

    .main h2 {
        color: white;
        align-content: center;
        text-align: center;
        font-weight: 600;
    }

    .profilig {
        width: 380px;
        height: 90px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: start;
        margin-top: 30px;
        outline: rgb(68, 68, 68) 1px solid;
        cursor: pointer;
    }

    .profilig img {
        width: 54px;
        height: 54px;
        border-radius: 40px;
        margin-left: 18px;
        margin-right: 10px;
    }

    .profilig h4 {
        margin: 0px
    }

    .profilig:hover {
        background-color: rgb(68, 68, 68);
    }

    .profilig .material-symbols-outlined {
        height: 46px;
        width: 46px;
        align-content: center;
        color: white;
    }

    .username {
        color: white;
        margin-right: auto
    }

    .footer {
        color: rgb(104, 104, 104);
        text-align: center;
        margin-top: 60px;
        cursor: pointer;
    }

    .footer span:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="header">
        <div class="back">
            <span class="material-symbols-outlined">
                arrow_back_ios_new
            </span>
            <p>Back to Threads</p>
        </div>
        <div class="iconig">
            <img src="Image/iconIg.png" alt="Icon Ig">
        </div>
    </div>
    <div class="main">
        <h2>Continue to Threads</h2>
        <div class="profilig">
            <img src="Image/bernardPp.jpg" alt="Pp">
            <div class="username">
                <h4>hiyrr_f</h4>
                <span>Mahir Fadha</span>
            </div>
            <span class="material-symbols-outlined">
                arrow_forward_ios
            </span>
        </div>
    </div>
    <div class="footer">
        <span>Login to another Instagram account</span>
    </div>
    </div>
    <script>
        var btnBack = document.querySelector(".back")
        btnBack.onclick = function() {
            window.location.href = "index.php"
        }
    </script>
</body>

</html>