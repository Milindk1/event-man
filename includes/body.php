<body>
  <?php
  include "header.php";

  ?>
  <!-- END nav -->

  <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
        data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong>
            your favourite event</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Fest starts in</p>
          <div id="countdown"></div>

          <div>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>

          </div>

          <div class="browse d-md-flex col-md-12">
            <div class="row">
              <?php
              $type_query = "SELECT * FROM event_type";
              $run_query = mysqli_query($con, $type_query);

              if (mysqli_num_rows($run_query) > 0) {
                $i = 0;
                while ($row = mysqli_fetch_array($run_query)) {

                  $type_id = $row["type_id"];
                  $type_title = $row["type_title"];
                  $tag_id = $i++;
                  echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                }

              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section services-section bg-light">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon"><span class="flaticon-guarantee"></span></div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Day 1</h3>
              <p>Hackathon, Mini games, Tech Exhibition</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon"><span class="flaticon-like"></span></div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Day 2</h3>
              <p>Entrepreneurship Summit, Esports, Bot designing </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon"><span class="flaticon-detective"></span></div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Day 3</h3>
              <p>Ethical Hacking Workshop, Guest Lecture, Discovering AI</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon"><span class="flaticon-support"></span></div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">Day 4</h3>
              <p>Recycle Tech Workshop, Tech-art competition, Closing Ceremony</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=" ftco-destination">
    <div class="container">
      <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <h2 class="mb-4"><strong>Glimpses</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="single-slider owl-carousel ftco-animate">
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/main.jpeg);">

                </a>

              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/edu.jpeg);">

                </a>

              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/carousel2.jpeg);">

                </a>

              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/c3.jpeg);">

                </a>

              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/c4.jpeg);">

                </a>

              </div>
            </div>
            <div class="item">
              <div class="destination">
                <a href="#" class="img d-flex justify-content-center align-items-center"
                  style="background-image: url(images/bot.jpeg);">

                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=" bg-light" id="events">
    <div class="container" id="0">
      <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
          <h2 class="mb-4"><strong>Book Your</strong> favourite event</h2>
        </div>
      </div>
      <div class="row" id="technical">
        <div class="col-md-12 ftco-animate">
          <div id="accordion">
            <div class="row">
              <div class="col-md-12">
                <div id="get_events"></div>
                <?php
                $event_query = "SELECT * FROM event_type";
                $run_query1 = mysqli_query($con, $event_query);

                if (mysqli_num_rows($run_query1) > 0) {

                  while ($row = mysqli_fetch_array($run_query1)) {

                    $type_id = $row["type_id"];
                    $type_title = $row["type_title"];
                    echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                    $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                    $run_query2 = mysqli_query($con, $type_query);
                    if (mysqli_num_rows($run_query2) > 0) {

                      while ($row = mysqli_fetch_array($run_query2)) {
                        $newtype_id = $row['type_id'];
                        $event_id = $row['event_id'];
                        $event_title = $row['event_title'];
                        $type_title = $row['type_title'];
                        $event_price = $row['event_price'];
                        $img_link = $row['img_link'];

                        if ($newtype_id == $type_id) {

                          echo "    
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price<span>Rs</span>
                                       </p>
                                       <p>Far far away, behind the word mountains, far from the countries</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i></span> 
                                         <span class='ml-auto'><a href='register.php?event_id=$event_id'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                        }

                      }
                    }

                    echo "  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";


                  }


                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>









  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-md-5 heading-section ftco-animate">
          <span class="subheading">About us</span>
          <h2 class="mb-4 pb-3"><strong>What</strong>Is TechTatva 2K23?</h2>
          <p>MIT Manipal's national-level annual technical fest, TechTatva, is a platform for young, innovative minds
            across the country to present themselves. With the theme 'Encircling Creations Where the Elements Collide,'
            TechTatva'23 explores how we have sustained the resources provided by the four elements of nature, bringing
            about some positive change in our society.</p>
          <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 heading-section ftco-animate">
          <span class="subheading">Testimony</span>
          <h2 class="mb-4 pb-3"><strong>Our</strong> Faculty</h2>
          <div class="row ftco-animate">
            <div class="col-md-12">
              <div class="carousel-testimony owl-carousel">
                <div class="item">
                  <div class="testimony-wrap d-flex">
                    <div class="user-img mb-5"
                      style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2013/07/Dr.Balakrishna-R.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">

                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text ml-md-4">
                      <p class="mb-5">Vinayak M is an Assistant Professor - Senior Scale in the Department of
                        Information and Communication Technology(MIT MANIPAL), with a current academic role that includes teaching
                        and research. He holds an MCA and an MTech in Networking, and has expertise and experience of over 10 years in the areas of
                        Database Management Systems, Image Processing, and Network Security.</p>
                      <p class="name">Dr. Vinayak M</p>
                      <span class="position">Assistant Professor - Senior Scale</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap d-flex">
                    <div class="user-img mb-5"
                      style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2014/01/Dr.-Usha-S.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text ml-md-4">
                      <p class="mb-5">Tojo Thomas is an Assistant Professor - Senior Scale in the Department of Data
                        Science and Computer Applications(MIT MANIPAL). He holds an MCS in Computer Science and has over 8 years of
                        experience in teaching and research. Currently, he serves as a coordinator for placement and
                        student development programs, as well as the Department Head for the Computer Vision Research
                        Group.</p>
                      <p class="name">Dr. Tojo Thomas</p>
                      <span class="position">Assistant Professor - Senior Scale</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Set the target date and time
    var target_date = new Date("2023-06-01 00:00:00").getTime();

    // Update the countdown every second
    var x = setInterval(function () {

      // Get the current date and time
      var current_date = new Date().getTime();

      // Calculate the difference between the target and current timestamps
      var difference = target_date - current_date;

      // Calculate the remaining days, hours, minutes, and seconds
      var days = Math.floor(difference / (1000 * 60 * 60 * 24));
      var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((difference % (1000 * 60)) / 1000);

      // Display the countdown timer in the "countdown" div element
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

      // If the countdown is finished, display a message
      if (difference < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Fest has started!";
      }
    }, 1000);
  </script>