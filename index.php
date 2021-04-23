<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.jpg" />
    <title>AR</title>

    <link rel='stylesheet' href='./css/main.css'>
    <link rel='stylesheet' href='./css/index.css'>
    <link rel='stylesheet' href='./css/animate.css'>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Noto+Serif&display=swap" rel="stylesheet">
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
            open_ani();
            footer_redirect();
        });
    </script>
</head>
<body>
    
    <?php include 'asset/header.php';?>

    <div class='wrap'>
        <div id="arrow-left" class='arrow'></div>    
            <div class="slider">
                <div class="slide slide1">
                    <div class="slide-content">
                        <span>BEAUTIFUL</span>
                    </div>
                </div>

                <div class="slide slide2">
                    <div class="slide-content">
                        <span> ELEGANT</span>
                    </div>
                </div>

                <div class="slide slide3">
                    <div class="slide-content">
                        <span>DESIGN</span>
                    </div>
                </div>
            </div>
        <div id="arrow-right" class='arrow'></div>
    </div>

    <?php include 'asset/footer.php';?>

    <script>
        let sliderImages = document.querySelectorAll(".slide"),
            arrowLeft = document.querySelector('#arrow-left'),
            arrowRight = document.querySelector('#arrow-right'),
            current = 0;

        // Clear all Images
        function reset(){
            for(let i=0; i < sliderImages.length; i++){
                sliderImages[i].style.display = 'none';
            }
        }

        function startSlide(){
            reset();
            sliderImages[0].style.display = 'block';
        }

        // Show prev
        function slideLeft(){
            reset();
            sliderImages[current - 1].style.display = 'block';
            current--;
        }

        // Show next
        function slideRight(){
            reset();
            sliderImages[current + 1].style.display = 'block';
            current++;
        }

        // Left arrow click
        arrowLeft.addEventListener('click',function(){
            if(current === 0){
                current = sliderImages.length;
            }
            slideLeft();
        });

        // Right arrow click
        arrowRight.addEventListener('click',function(){
            if(current === sliderImages.length - 1){
                current = -1;
            }
            slideRight();
        });

        startSlide();
    </script>
</body>
</html>