<?php
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
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
    <link rel='stylesheet' href='./css/gallery.css'>
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
            background: rgba(138, 98, 47, 0.459);
        }
    </style>
    <script>
        function linkclick(id){
            close_ani();
            setTimeout(function(){
                window.location.href=window.redirect_url[id];
            },1000);
        }
        window.addEventListener("DOMContentLoaded", function(event) { 
            var page = '<?php echo $queries['action'];?>';
            var imgcon = document.querySelectorAll('.item-pic');
            var namecon = document.querySelectorAll('.item-name');

            if(page === 'project'){
                var imgurl = ['./img/author/pro0.jpg','./img/author/pro1.jpg','./img/author/pro2.jpg'];
                var name = ['Wadala Apartment','Navi Mumbai Apartment','Worli Classic'];
                window.redirect_url = ['project.php?action=pro0','project.php?action=pro1','project.php?action=pro2'];
                for(var i=0; i < imgcon.length ; i++){
                    imgcon[i].id = 'itempicpro'+i;
                    namecon[i].innerHTML = '<a id='+i+' onclick="linkclick(this.id);" href="#"><u>'+name[i]+'</u></a>';
                }
            }else{
                var imgurl = ['./img/author/deg0.jpg','./img/author/deg1.jpg','./img/author/deg2.jpg'];
                var name = ['Jon','Audrey','Ron'];
                window.redirect_url = ['author.php?action=deg0','author.php?action=deg1','author.php?action=deg2'];
                for(var i=0; i < imgcon.length ; i++){
                    imgcon[i].id = 'itempic'+i;
                    namecon[i].innerHTML = '<a id='+i+' onclick="linkclick(this.id);" href="#"><u>'+name[i]+'</u></a>';
                }
            }
            
            if(screen.width < 760){
                // Add pic
                for(var i=0; i < imgcon.length ; i++){
                    imgcon[i].innerHTML = "<img src="+imgurl[i]+">";
                }
            }
            open_ani();
            footer_redirect();
        });
    </script>
</head>
<body>
    
    <?php include 'asset/header.php';?>
    
    <div id='gallery'>
        <div id="wapper">
            <div class="item-con">
                <div class="item-pic"></div>
                <div class="item-name"></div>
            </div>

            <div class="item-con">
                <div class="item-pic"></div>
                <div class="item-name"></div>
            </div>

            <div class="item-con">
                <div class="item-pic"></div>
                <div class="item-name"></div>
            </div>
        </div>
    </div>

    <?php include 'asset/footer.php';?>

</body>
</html>