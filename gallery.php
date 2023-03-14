<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Gallery</title>
</head>

<body>

    <div id="heading">
        <h1>Gallery</h1>
    </div>

    <div class="row">

        <div class="col-5" id="row1">
            <img src="./images/1.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/2.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/3.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/4.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/5.jpg" alt="" onclick="imageSlider(this)">
        </div>
    </div>

    <div class="row">
        <div class="col-5" id="row1">
            <img src="./images/5.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/3.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/2.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/1.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/4.jpg" alt="" onclick="imageSlider(this)">
        </div>
    </div>



    <div class="row">
        <div class="col-5" id="row1">
            <img src="./images/5.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/4.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/3.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/2.jpg" alt="" onclick="imageSlider(this)">
        </div>
        <div class="col-5">
            <img src="./images/1.jpg" alt="" onclick="imageSlider(this)">
        </div>
    </div>

    <div id="light_box">
        <button onclick="closeBox()">X</button>
        <img src="./images/2.jpg" alt="">
    </div>

    <script>
        function imageSlider(obj) {

            image_change = document.querySelector("#light_box > img");
            image_change.src = obj.src;
            rows = document.querySelectorAll(".row");
            for (a = 0; a < rows.length; a++) {
                rows[a].style.display = "none";
            }
            document.querySelector("#light_box").style.display = "block";
        }

        function closeBox() {
            // image_change = document.querySelector("#light_box > img");
            // image_change.src = obj.src;
            rows = document.querySelectorAll(".row");
            for (a = 0; a < rows.length; a++) {
                rows[a].style.display = "block";
            }
            document.querySelector("#light_box").style.display = "none";
        }
    </script>

</body>

</html>