<?php
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);

    include 'config.php';
?>
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
    <link rel='stylesheet' href='./css/author.css'>
    <link rel='stylesheet' href='./css/animate.css'>
    <script src='./js/main.js'></script>

    <style>
        #header,#footer{
            height:50%;
        }
        #hrow{
            top:70%;
        }
        body{
            background: white;
        }
    </style>
    <script>
        function linkclick(id){
            var redirect_url = ['project.php?action=pro0','project.php?action=pro1','project.php?action=pro2'];
            close_ani();
            setTimeout(function(){
                window.location.href=redirect_url[id];
            },1000);
        }
        window.addEventListener("DOMContentLoaded", function(event) { 
            var acc = document.getElementsByClassName("accordion");
            var reviews = <?php echo(json_encode($reviews));?>;

            for(i=0; i < reviews.length; i=i+2){
                document.getElementById('auth-review').innerHTML = document.getElementById('auth-review').innerHTML+'<button class="accordion">'+reviews[i]+'</button><div class="panel"><p>'+reviews[i+1]+'</p></div>';
            }

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
            }
            
            open_ani();
            footer_redirect();
        });
    </script>
</head>
<body>
    
    <?php include 'asset/header.php';?>

    <?php
        if($queries['action'] === 'deg0'){
            include 'asset/deg/deg0.php';
        }elseif($queries['action'] === 'deg1'){
            include 'asset/deg/deg1.php';
        }elseif($queries['action'] === 'deg2'){
            include 'asset/deg/deg2.php';
        }
    ?>
    
    <?php include 'asset/footer.php';?>

</body>
</html>