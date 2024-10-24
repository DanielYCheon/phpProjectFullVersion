<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="script.js"></script>
    <script scr="script.js"></script>
    <script
      src="https://kit.fontawesome.com/f1837ae9a2.js"
      crossorigin="anonymous"
    ></script>
    <link href="index.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="nav-bar">
      <div class="nav-logo"><b>FIND MY PROFESSOR</b></div>
      <div class="nav-links-container">
        <a class="nav-link" href="#topSection" id="topLink">Home</a>
        <a class="nav-link" href="#priceSection" id="priceLink">Register</a>
        <a class="nav-link" href="#aboutSection" id="aboutLink">About Us</a>

        <a class="nav-link" href="#servicesSection" id="servicesLink"
          >Services</a
        >

        <a class="nav-link" href="#contactSection" id="contactLink">Contact</a>

         <?php if ($is_logged_in): ?>
                <a class="nav-link" href="profile.php" id="accountLink">Account</a>
                <a class="nav-link" href="log_out.php" id="logoutLink">Logout</a>
            <?php else: ?>
                <a class="nav-link" href="sign_in.php" id="signInLink">Sign in</a>
            <?php endif; ?>
            
            
            
      </div>
    </div>
    
    <div class="rela-block top-section grad-back" id="topSection">
      <div class="abs-cent-text top-text">
        <h1 class="big-text">Find My Professor</h1>

        <p class="top-small-text">
          <b>PROVIDING MEANINGFUL SUBSTITUTE TEACHERS FOR SCHOOLS</b>
        </p>

        <br />
        <br />

        <input
          type="Find your sub"
          value="Sign up to be a Sub here!"
          onclick="location.href='signup.html'"
        />
      </div>
    </div>

    <div class="rela-block welcome-section">
      <div class="abs-cent-text welcome-text">
        <h1 class="big-text">Welcome</h1>
        

        <p>
          We at <b>Find my Professor</b> focus on finding highly qualified
          teachers as substitutes for the full-time teachers to provide
          continuity in learning when schools deal with last minute
          cancellations from their tenured teachers. Many schools suffer with
          teacher shortages and often need to compress classes which might lead
          to students being neglected or students not being able to be taught
          properly. With <b>Find my Professor</b> our goal is to reduce the gap
          in learning by providing qualified substitute teachers to continue the
          curriculum.
        </p>
        <div class="has-lines black">Explore</div>
      </div>
    </div>
    <div class="rela-block our-plans-section" id="priceSection">
      <h2 class="half-big-text has-border">What are you Looking for</h2>
      <p>We take care of both our teachers and our institutions!.</p>

      <div class="rela-block plans-container">
        <div class="plan">
          <h2 class="rela-block half-big-text">Substitute Sign Up</h2>

          <ul class="rela-block">
            <li>Quick Job placement</li>
            <li>Good schools</li>
            <li>Exceptional pay</li>
            <li>Build your career</li>
            <li>Increase your rank</li>
          </ul>
          <div class="has-lines black">
            <button class="rela-block" onclick="location.href='form.html'">
              <span
                style="
                  font-family: 'Montserrat';
                  font-size: 30px;
                  line-height: 40px;
                "
                >Sign up
              </span>
            </button>
          </div>
        </div>

        <div class="plan">
          <h2 class="rela-block half-big-text">School Sign up</h2>

          <ul class="rela-block">
            <li>Find substitues quick</li>
            <li>Database has hundreds of subs</li>
            <li>Substitutre for any type of grade or class</li>
            <li>Certified Substitutes</li>
            <li>Make sure there are no gaps in our class</li>
          </ul>
          <div class="has-lines black">
            <button class="rela-block" onclick="location.href='search.html'">
              <span
                style="
                  font-family: 'Montserrat';
                  font-size: 30px;
                  line-height: 40px;
                "
                >Sign up</span
              >
            </button>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="rela-block about-us-section" id="aboutSection">
        <h1 class="half-big-text has-border">About Us</h1>
        <p>
          We are a group of college students who have seen every stage of the
          school system and have been on the other end of having teacher
          shortages or even unqualified teachers. We have been through so many
          days in school where a 10 minute youtube video would explain a subject
          better than a teacher could in 1 hour. This could be because the
          teacher just isnt good at teaching, or because of the amount of
          students that the teacher has to deal with. Due to this issue we have
          decided that this is something that we are passionate about and would
          like to help our students of the future to get a good education, while
          also helping teachers find jobs quicker.
        </p>

        <div class="rela-block about-us-quad-container"></div>
      </div>
    </section>
    <div class="rela-block services-section" id="servicesSection">
      <div class="rela-block service-row">
        <div class="floated left service-row-half grey-back">
          <div class="abs-cent-text">
            <h2 class="half-big-text has-border">Services</h2>
          </div>
        </div>
        <div class="floated right service-row-half">
          <div class="abs-cent-text">
            <h2 class="small-header">Correct fit for the job</h2>

            <p>
              We want to make sure that the teacher that you need for the day is
              exactly what your institution needs that day.
            </p>
          </div>
        </div>
      </div>
      <div class="rela-block service-row">
        <div class="floated right service-row-half black-back">
          <div class="abs-cent-text wordpress"></div>
        </div>
        <div class="floated left service-row-half">
          <div class="abs-cent-text">
            <h2 class="small-header">Same day booking</h2>

            <p>
              We all understand that teachers are humans too and have
              emergencies as well, so if you are ever in a predicament where you
              need a last second sub we will be there to help.
            </p>
          </div>
        </div>
      </div>
      <div class="rela-block service-row">
        <div class="floated left service-row-half black-back">
          <div class="abs-cent-text weird-one">&lt/&gt</div>
        </div>
        <div class="floated right service-row-half">
          <div class="abs-cent-text">
            <h2 class="small-header">Qualified</h2>

            <p>
              All of our teachers in our databse have been checked for their
              background, qualifications, and their ratings. So we can guarantee
              you
            </p>
          </div>
        </div>
      </div>
      <div class="rela-block service-row">
        <div class="floated right service-row-half black-back">
          <div class="abs-cent-text star"></div>
        </div>
        <div class="floated left service-row-half">
          <div class="abs-cent-text">
            <h2 class="small-header">Training for Professors</h2>

            <p>
              For people who want to be a subsititue we offer resources and road
              maps for you to become one, and if you get trained through us you
              can go straight into our database and would be recommended to
              institutions.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--
<div class="rela-block portfolio-section" id="portfolioSection">
    <div class="rela-block portfolio-top grad-back">
        <h1 class="half-big-text has-border">Portfolio</h1>
</div>

<div class="rela-block portfolio-second">
    <div class="has-lines white">Show All</div>
    <div class="has-lines white">Design</div>
    <div class="has-lines white">Graphics</div>
    <div class="has-lines white">Motion</div>
    <div class="has-lines white">Video</div>
</div>
<div class="rela-block portfolio-collage">
    <div class="floated left collage-column">
        <div class="floated left collage-image third one"></div>
        <div class="floated left collage-image third two"></div>
        <div class="floated left collage-image third three"></div>
    </div>
    <div class="floated left collage-column">
        <div class="floated left collage-image third four"></div>
        <div class="floated left collage-image two-thirds five"></div>
    </div>
    <div class="floated left collage-column">
        <div class="floated left collage-image two-thirds six"></div>
        <div class="floated left collage-image third seven"></div>
    </div>
</div>
<div class="rela-block portfolio-bottom">
    <div class="floated left quarter-div">
        <div class="abs-cent-text">
            <h1 class="big-text">8679</h1>
            <p>Happy Clients</p>
        </div>
    </div>
    <div class="floated left quarter-div">
        <div class="abs-cent-text">
            <h1 class="big-text">340 K+</h1>
            <p>Facebook Likes</p>
        </div>
    </div>
    <div class="floated left quarter-div">
        <div class="abs-cent-text">
            <h1 class="big-text">100</h1>
            <p>Awards</p>
        </div>
    </div>
    <div class="floated left quarter-div">
        <div class="abs-cent-text">
            <h1 class="big-text">3456</h1>
            <p>Retweets</p>
        </div>
    </div>
</div>
</div>
-->

    <div class="rela-block contact-section" id="contactSection">
      <h2 class="half-big-text has-border">Contact</h2>

      <div class="rela-block contact-form-container">
        <div class="contact-half contact-left">
          <h2 class="small-header">Don't hesitate to contact us.</h2>
          <p>
            If you have any questions please feel free to contact us through our
            phone number or email address..
          </p>
          <div class="rela-block left-quad-container">
            <div class="contact-quad">
              42069 Bongo Road <br />Northridge<br />CA 91305
            </div>
            <div class="contact-quad">121-232-4545<br />567-345-1234</div>
            <div class="contact-quad">gmail@hotmail.com<br />fmp.com</div>
            <div class="contact-quad">
              M-F: 8 AM - 3 PM<br />Sa: 8AM - 12PM<br />Su: Closed
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rela-block footer-section">
      <h2 class="small-header top-link">
        <button onclick="toTop()">Back to Top</button>
      </h2>
      <div class="rela-block social-buttons-container">
        <div class="social-button facebook-button"></div>
        <div class="social-button twitter-button"></div>
        <div class="social-button instagram-button"></div>
        <div class="social-button behance-button"></div>
      </div>
      <p>
        Classic deluxe custom designer luxury prestige high-quality premium
        select gourmet pocket pencil sharpener.<br />Yours for the asking, no
        purchase necessary. It's our way of saying thank you.
      </p>
    </div>
  </body>
</html>
