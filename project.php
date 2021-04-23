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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC-csYzlppZjonmkr_cqlD81Bfz8M3vuM&callback=initMap" type="text/javascript"></script>
    <script>
        // Initialize and add the map
        function initMap() {
            var pro = '<?php echo $queries['action'];?>'; 
            if(pro === 'pro0'){
                var uluru = {lat: 19.0149, lng: 72.8631};    
            }else if(pro === 'pro1'){
                var uluru = {lat: 19.0330, lng: 73.0297};
            }else if(pro === 'pro2'){
                var uluru = {lat: 18.9986, lng: 72.8174};
            }
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <title>AR</title>

    <link rel='stylesheet' href='css/main.css'>
    <link rel='stylesheet' href='css/animate.css'>
    <link rel='stylesheet' href='css/project/main.css'>
    <script src='js/main.js'></script>

    <style>
        #header,#footer{
            height:50%;
        }
        #hrow{
            top:70%;
        }
        body{
            /* background: rgba(138, 98, 47, 0.459); */
            background: white;
        }
    </style>
    <script>
        function parallax(){
            var scrollsep = window.scrollTop;
            document.getElementById('parallax-bg').style.backgroundPosition='center '+(scrollsep*0.25)+'px';
        }

        window.addEventListener("DOMContentLoaded", function(event) {
            var pro = '<?php echo $queries['action'];?>'; 
            var acc = document.getElementsByClassName("accordion");
            var reviews = <?php echo(json_encode($reviews));?>;
            var i;

            if(pro === 'pro0'){
                document.getElementById('parallax-bg').style.backgroundImage = "url('./img/project/pro0.jpg')";
            }else if(pro === 'pro1'){
                document.getElementById('parallax-bg').style.backgroundImage = "url('./img/project/pro1.jpg')";
            }else if(pro === 'pro2'){
                document.getElementById('parallax-bg').style.backgroundImage = "url('./img/project/pro2.jpg')";
            }

            for(i=0; i < reviews.length; i=i+2){
                document.getElementById('review-con').innerHTML = document.getElementById('review-con').innerHTML+'<button class="accordion">'+reviews[i]+'</button><div class="panel"><p>'+reviews[i+1]+'</p></div>';
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

            window.addEventListener('scroll',(event)=>{
                parallax();
            });
        });
    </script>
</head>
<body>
    
    <?php include 'asset/header.php';?>

    <?php
        if($queries['action'] === 'pro0'){
            include 'asset/pro/pro0.php';
        }elseif($queries['action'] === 'pro1'){
            include 'asset/pro/pro1.php';
        }elseif($queries['action'] === 'pro2'){
            include 'asset/pro/pro2.php';
        }
    ?>

    <?php include 'asset/footer.php';?>

</body>
</html>
