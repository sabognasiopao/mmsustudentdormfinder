<html>
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU - Dorm Finder</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StudentStyle.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>

        <link rel="icon" href="/images/mmsu logo.png">
    </head>

    <body>
    <div class="uppernav"> <h3 style="margin-left:20px;color:#0C4B05;">MMSU </h3><h3> - Dorm Finder</h3></div>
    
    <div class="topnav" id="myTopnav">
       <img style="float:left;margin-left:20px;margin-top:5px;" src="/images/mmsu logo.png"  height="4%" width="4%">
       <a style=" text-decoration: none;width:20%;margin:0%;" href="home"><h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4></a>
            <a class="topnavlink" href="contact">CONTACT</a>
            <a class="topnavlink" href="about">ABOUT US</a>
            <a class="topnavlink" href="dorm">LIST OF DORMS</a>

                <div class="menu">
                <img style="float:right;margin-top:15px;" src="/images/user.png"  width="15%" height="40%">
                    <ul><li>
                     <a href="#" style="float:right;margin:10px 0px 0px 0px;">18-020008</a>
                        <ul>
                        <li><a href="profilestudent">Profile</a></li><br>
                        <li><a href="applicationlist">Application List</a></li><br>
                        <li><a href="welcome">Log Out</a></li>
                        </ul>
                    </ul></li>
            </div>
    </div>

<!-- TITLE OF DORMITORY  -->
    <div class="header"> <h1>HOUSING FACILITIES - Details</h1></div>

<!-- SLIDESHOW OF DORMITORY  -->
        <div class="dorm_name">STUDENT RESIDENCE HALL </div><br>
        <div class="dorm_details_con">

        <div id="slideshow" class="imgcontainer">
        <div class="mySlides"> <img src="/images/sample.jpg" style="width:100%;height:100%;"><div class="text">Single Space</div></div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:100%;"><div class="text">Amenities</div> </div>

        <div class="mySlides"><img src="/images/sample.jpg"  style="width:100%;height:100%;"><div class="text">Single Space</div> </div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:100%;"><div class="text">Amenities</div> </div>

        <a class="prev" onclick="plusSlides(-1, slideshow)">❮</a>
        <a class="next" onclick="plusSlides(1, slideshow)">❯</a>
        </div>
           <p class="descriptiondorm"> A dormitory (originated from the Latin word dormitorium, often abbreviated to dorm) is a building primarily providing sleeping and residential 
               quarters for large numbers of people such as boarding school, high school, college or university students. </p>
        </div>

<!-- DETAILS OF DORMITORY  -->
    <div class="dorm_details">    
        <form style="width:80%;">
        
            <label  for="fname">Manager</label>
                <input type="text" id="fname" name="fname" style="width: 25%;" class="readapp" value="Sample Name" readonly="readonly">
            <label for="fname">Contact</label>
                <input type="text" id="fname" name="fname" style="width: 25%;" class="readapp" value="Sample Contact" readonly="readonly"><br>
            <label for="fname">Barangay</label>
                <input type="text" id="fname" name="fname" style="width: 25%;" class="readapp" value="6 Quiling Sur" readonly="readonly">
            <label for="fname">Street</label>
                <input type="text" id="fname" name="fname" style="width: 25%;" class="readapp" value="T. Alonzo St." readonly="readonly"><br>
            <label  for="fname">Nearest Landmark</label>
                <input type="text" id="fname" name="fname" style="width: 25%;" class="readapp" value="CAS" readonly="readonly">
            <label for="quantity" >Available space</label>
                <input type="number" id="quantity" name="quantity" style="width:10%;" class="readapp" min="0" value="10" readonly="readonly"><br>
            
            <div style="display:flex;margin-top:2%;">

            <div>
            <table class="viewdormtable" id="room">
                <tr>
                    <th>Ammenities</th>
                </tr> 
               <tr>
                    <td class="readapp">Aircondition</td>
               </tr>
               
            </table>
            </div>
          
            <div style="margin-left:5%;">
            <table class="viewdormtable" id="room">
                <tr>
                    <th>Room Type</th>
                    <th>Vacancy</th>
                    <th>Price</th>
                </tr> 
               <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">5</td>
                    <td class="readapp">1500</td>

                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">5</td>
                    <td class="readapp">1500</td>

                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">5</td>
                    <td class="readapp">1500</td>

                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">5</td>
                    <td class="readapp">1500</td>

                </tr>
            </table>
            </div>
        
        </div>

            <a href="confirm"><button type="button" class="secondyellowbutton" style="margin-top:5%;width:25%;"> APPLY</button></a>  
        </form>
        </div>

<!-- SCRIPT FOR SLIDESHOW  -->
<script>
var slideshow = document.getElementById("slideshow");
        slideshow.currentSlideIndex = 1;
        showSlides(slideshow.currentSlideIndex, slideshow);

        function plusSlides(n, slideshow) {
        showSlides(slideshow.currentSlideIndex += n, slideshow);
        }

        function currentSlide(n, slideshow) {
        showSlides(slideshow.currentSlideIndex = n, slideshow);
        }

        function showSlides(n, slideshow) {
  
            var i;
            var slides = slideshow.getElementsByClassName("mySlides");
       
            if (n > slides.length) {slideshow.currentSlideIndex = 1}    
            if (n < 1) {slideshow.currentSlideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        slides[slideshow.currentSlideIndex-1].style.display = "block";  
        }
    
        </script>

        </body>
    </head>
</html>