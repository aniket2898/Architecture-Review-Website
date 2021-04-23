<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Serif&display=swap" rel="stylesheet">
    <title>AR</title>

    <link rel='stylesheet' href='./css/main.css'>
    <link rel='stylesheet' href='./css/review.css'>
    <link rel='stylesheet' href='./css/animate.css'>
    <script src='./js/main.js'></script>

    <style>
        #header,#footer{
            height:50%;
        }
        #hrow{
            top:70%;
        }
    </style>
    <script>
        window.addEventListener("DOMContentLoaded", function(event) {
            var total = (document.getElementById('full-con').clientHeight-(document.getElementById('center_div').clientHeight))/2;
            if(total > 0){
                document.getElementById('center_div').style.marginTop = total+'px';
            }
            open_ani();
            footer_redirect();
        });
    </script>
</head>
<body>
    
    <?php include 'asset/header.php';?>

    <div id='main-con'>
        <div id='full-con'>
            <div id='center_div'>
                <div id='quote-con' style="margin:10px 0 40px 0;font-size:22px;font-align:center;font-family:'Noto Sans'">
                    <b><i>"</i></b> Review really matter for others while making an decision  <b><i>"</i></b>
                </div>
                <div id='form-con'>
                    <form method='POST' action="./asset/insert.php" >
                        <input type="text" placeholder='NAME' name='name' required><br>
                        <select id='forname-select' name='forname'>
                            <option value='deg0'>JON</option>
                            <option value='deg1'>AUDREY</option>
                            <option value='deg2'>RON</option>
                            <option value='pro0'>WADALA APTS</option>
                            <option value='pro1'>NAVI MUMBAI APTS</option>
                            <option value='pro2'>WORLI CLASSIC</option>
                        </select>
                        <input type="text" placeholder='REVIEW' name='review' required><br>
                        <input type="submit" value='SUBMIT'><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'asset/footer.php';?>

</body>
</html>