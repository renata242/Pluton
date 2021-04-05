
<!DOCTYPE html>
<html lang="en">
<head>
  <title>M & R</title>
  <style>
    .item {
    display: none;
    position: relative;
    .transition(.60s ease-in-out left);
  }

          body {
          margin: 40px;
        }

        .sidebar {
          grid-area: sidebar;
        }

        .content {
          grid-area: content;
          position: relative;
        }

        .wrapper {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: 400px 400px 320px;
            grid-template-areas:
            "header  header  header"
            "sidebar content content";
            color: #444;
          }

        .box {
          background-color: #A099A7;
          color: white;
          border-radius: 2px;
          padding: 50px;
          font-size: 110%;
        }

        .header{
          grid-area: header;
          background-color: #7C7880;
        }

        .topleft {
          position: absolute;
          top: 0;
          left: 0;
        }

        .topright {
          position: absolute;
          top: 0;
          right: 0;
        }

        .bottomleft {
          position: absolute;
          bottom: 0;
          left: 0;
        }

        .bottomright {
          position: absolute;
          bottom: 0;
          right: 0;
        }
        img{
          width:90%;
        }
      </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F5EAFB;">
<nav class="navbar navbar-default " style="background-color: #CCB6EE; padding:10px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: black">ICON</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php">Home</a></li>
        <li class=""><a href="tracker.php">Tracker</a></li>
        <li class=""><a href="purchase.php">Booking</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Tips list <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="diet.php">Diet</a></li>
            <li class="active"><a href="sport.php">Sport</a></li>
          </ul>
        </li> 
        <li class=""><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li class=""><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
<div class="container">
  <div class="wrapper">
      <div class="box header">
     

        <h1>Fitness Exercises Database</h1>
        <p>Here is a list of fitness and weight training exercises. Details include a step by step instruction, and tips and alternative exercises. Come back soon as more exercises are being added all the time.</p>
        <div class="clearfix"></div>

        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2714899191075238" data-ad-slot="6733860395" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <div class="box sidebar">
        <p>The list has been divided into sections (some exericses are on more than one list):</p>
        <ul>
        <li><a href="#gymexercises">Gym Exercises</a></li>
        <li><a href="#pregnancyexercises">Pregnancy Exercises</a></li>
        <li><a href="#dumbbellexercises">Dumbbell Exercises</a></li>
        <li><a href="#bodyweightexercises">Bodyweight Exercises (no equipment)</a></li>
        <li><a href="#homeexercises">Home Workout</a></li>
        <li><a href="#7minuteexercises">7-Minute Workout</a></li>
        <li><a href="#beachexercises">Exercises for the beach</a></li>
        <li><a href="#superheroexercises">Superhero Workout</a></li>
        </ul>

          <h2> <a name="gymexercises"></a> <img src="https://i.ytimg.com/vi/MPKDjNvKnN8/maxresdefault.jpg" width="500px"> Gym Exercises</h2>
          <ul>
          <li><a href="https://youtu.be/vthMCtgVtFw" target="_blank">Bench press</a></li>
          <li><a href="https://youtu.be/yTWO2th-RIY" target="_blank">Bicep curls</a></li>
          <li><a href="https://youtu.be/ytGaGIn3SjE" target="_blank">Deadlifts</a></li>
          <li><a href="https://youtu.be/U3HlEF_E9fo" target="_blank">Squats</a></li>
          <li><a href="https://youtu.be/ELOCsoDSmrg" target="_blank">Leg curls</a></li>
          <li><a href="https://youtu.be/GvRgijoJ2xY" target="_blank">Leg press</a></li>
          <li><a href="https://youtu.be/OcFCHdQHjVU" target="_blank">Lat pull-downs</a></li>
          <li><a href="https://youtu.be/3XDriUn0udo" target="_blank">Lunges</a></li>
          <li><a href="https://youtu.be/5vVSGITznQk" target="_blank">Power Clean</a></li>
          </ul>
          <h2> <a name="pregnancyexercises"></a> <img src="https://img.buzzfeed.com/buzzfeed-static/static/2020-06/10/0/tmp/b5ed1e9bc273/tmp-name-2-944-1591747924-0_dblbig.jpg" width="500px"> Pregnancy Exercises</h2>
          <ul>
          <li><a href="https://youtu.be/tuTjC6u03Lg" target="_blank">Squat Stretch</a></li>
          <li><a href="https://youtu.be/BkS1-El_WlE" target="_blank">Chest Muscle Exercise</a></li>
          <li><a href="https://youtu.be/U3HlEF_E9fo" target="_blank">Squats</a></li>
          <li><a href="https://youtu.be/YB0egDzsu18" target="_blank">Wall Press</a></li>
          <li><a href="https://youtu.be/l4AA5d5mInQ" target="_blank">Step Ups</a></li>
          <li><a href="https://youtu.be/rvqLVxYqEvo" target="_blank">Side Lunge</a></li>
          <li><a href="https://youtu.be/QE_hU8XX48I" target="_blank">Forward Lunge</a></li>
          <li><a href="https://youtu.be/g7Uhp5tphAs" target="_blank">Forward bend</a></li>
          <li><a href="https://youtu.be/zDe1in6Uq3A" target="_blank">Neck Rotation</a></li>
          <li><a href="https://youtu.be/_oyxCn2iSjU" target="_blank">Hamstring Lift</a></li>
          <li><a href="https://youtu.be/eKR209nWCdE" target="_blank">Inner Thigh Lift</a></li>
          <li><a href="https://youtu.be/66HqsVxkRxY" target="_blank">Outer Thigh Lift</a></li>
          <li><a href="https://youtu.be/_kEPfhQpjg8" target="_blank">Pelvic Thrust</a></li>
          <li><a href="https://youtu.be/HbffYbYHRN4" target="_blank">Dromedary Droop</a></li>
          <li><a href="https://youtu.be/K-CrEi0ymMg" target="_blank">Pelvic Tilt</a></li>
          </ul>
          <h2> <a name="dumbbellexercises"></a> Dumbbell Exercises</h2>
          <h4> <img src="https://m.spletnik.ru/img/2020/10/elizaveta/chloe/116789653_332355201255825_6828954924875630900_n.jpg" width="500px"> Arms</h4>
          <ul>
          <li><a href="https://youtu.be/6SS6K3lAwZ8" target="_blank">Tricep kickback</a></li>
          <li><a href="https://youtu.be/ebqgIOiYGEY" target="_blank">Concentration curl</a></li>
          <li><a href="https://youtu.be/X-iV-cG8cYs" target="_blank">Overhead extension</a></li>
          <li><a href="https://youtu.be/soxrZlIl35U" target="_blank">Incline bicep curls</a></li>
          <li><a href="https://youtu.be/zC3nLlEvin4" target="_blank">Hammer curls</a></li>
          <li><a href="https://youtu.be/pYcpY20QaE8" target="_blank">One-arm row</a></li>
          </ul>
          <h4> <img src="https://i.ytimg.com/vi/I9nG-G4B5Bs/maxresdefault.jpg" width="500px"> Legs</h4>
          <ul>
          <li><a href="https://youtu.be/v_c67Omje48" target="_blank">Dumbbell squats</a></li>
          <li><a href="https://youtu.be/7pwO2gemRyg" target="_blank">Reverse lunges</a></li>
          </ul>
          <h4> <img src="https://m.spletnik.ru/img/2020/10/elizaveta/chloe/52639025_774793236227260_1828840702544187003_n.jpg" width="500px"> Chest</h4>
          <ul>
          <li><a href="https://youtu.be/SHsUIZiNdeY" target="_blank">Dumbbell press</a></li>
          <li><a href="https://youtu.be/eozdVDA78K0" target="_blank">Dumbbell flys</a></li>
          <li><a href="https://youtu.be/0G2_XV7slIg" target="_blank">Incline Dumbbell Press</a></li>
          </ul>
          <h4> <img src="https://media.womensweekly.com.sg/public/2020/12/chloe-ting-interview.png" width="500px">  Shoulders</h4>
          <ul>
          <li><a href="https://youtu.be/cJRVVxmytaM" target="_blank">Shrugs</a></li>
          <li><a href="https://youtu.be/qEwKCR5JCog" target="_blank">Shoulder press</a></li>
          <li><a href="https://youtu.be/-t7fuZ0KhDA" target="_blank">Forward raises</a></li>
          <li><a href="https://youtu.be/q5sNYB1Q6aM" target="_blank">Side raises</a></li>
          <li><a href="https://youtu.be/ttvfGg9d76c" target="_blank">Bent over raises</a></li>
          <li><a href="https://youtu.be/Fq67opsS_hc" target="_blank">Upright row</a></li>
          </ul>
          <h2> <a name="bodyweightexercises"></a> <img src="https://i.pinimg.com/originals/20/d9/6d/20d96db773e87a340b8d52140310784b.jpg" width="500px"> Bodyweight Exercises (no equipment)</h2>
          <ul>
          <li><a href="https://youtu.be/2J2g7XOr2i4" target="_blank">Jumping jacks</a></li>
          <li><a href="https://youtu.be/h6wu4_LOhyU" target="_blank">Star Jumps</a></li>
          <li><a href="https://youtu.be/IODxDxX7oi4" target="_blank">Push-ups</a></li>
          <li><a href="https://youtu.be/1fbU_MkV7NE" target="_blank">Sit-ups</a></li>
          <li><a href="https://youtu.be/CI3o5FYbtOo" target="_blank">Plank</a></li>
          <li><a href="https://youtu.be/9C9sbJfFjJM" target="_blank">Side Bridge</a></li>
          <li><a href="https://youtu.be/3XDriUn0udo" target="_blank">Lunge</a></li>
          <li><a href="https://youtu.be/bEv6CCg2BC8" target="_blank">Squat</a></li>
          <li><a href="https://youtu.be/hV_rDOloxCI" target="_blank">Wall Squat</a></li>
          </ul>
          <h2> <a name="homeexercises"></a> <img src="https://designersfromrussia.ru/wp-content/uploads/2020/11/dumbell-ep3.jpg" width="500px"> Home Workout</h2>
          <ul>
          <li><a href="https://youtu.be/IODxDxX7oi4" target="_blank">Push-ups</a></li>
          <li><a href="https://youtu.be/QOVaHwm-Q6U" target="_blank">Lunges</a></li>
          <li><a href="https://youtu.be/2z8JmcrW-As" target="_blank">Dips</a></li>
          <li><a href="https://youtu.be/Fguzl1SCeE8" target="_blank">Bucket Squats</a></li>
          <li><a href="https://youtu.be/hV_rDOloxCI" target="_blank">Wall Squat</a></li>
          <li><a href="https://youtu.be/UfhT0OSUU0w" target="_blank">Chin ups</a></li>
          <li><a href="https://youtu.be/vT2GjY_Umpw" target="_blank">Bent Over Row</a></li>
          <li><a href="https://youtu.be/dr8ItbfGAVE" target="_blank">Bottle Lateral Raises</a></li>
          <li><a href="https://youtu.be/-WSon5E798w" target="_blank">Sit Ups</a></li>
          <li><a href="https://youtu.be/LaXu2FdxsCo" target="_blank">Step Ups</a></li>
          <li><a href="https://youtu.be/xc8RCfTteu0" target="_blank">Side Bridge</a></li>
          <li><a href="https://youtu.be/USpmiOk61Ek" target="_blank">Straight-Legged Dead Lift</a></li>
          </ul>
          <h2> <a name="7minuteexercises"></a> <img src="https://sun9-48.userapi.com/c6SN4Cryl8Bu1f2mMvAArvu4ScuSt_l2t7i6lg/bya2jTJOTqM.jpg" width="500px"> 7-Minute Workout</h2>
          <ol>
          <li><a href="https://youtu.be/2J2g7XOr2i4" target="_blank">Jumping Jacks</a></li>
          <li><a href="https://youtu.be/-0Q7Lds7B8A" target="_blank">Wall Sit</a></li>
          <li><a href="https://youtu.be/MO10KOoQx5E" target="_blank">Push-up</a></li>
          <li><a href="https://youtu.be/_O1xunCfYEM" target="_blank">Abdominal Crunch</a></li>
          <li><a href="https://youtu.be/aajhW7DD1EA" target="_blank">Step-up onto chair </a></li>
          <li><a href="https://youtu.be/bEv6CCg2BC8" target="_blank">Squat</a></li>
          <li><a href="https://youtu.be/0326dy_-CzM" target="_blank">Triceps Dips</a></li>
          <li><a href="https://youtu.be/CI3o5FYbtOo" target="_blank">Plank</a></li>
          <li><a href="https://youtu.be/D0GwAezTvtg" target="_blank">High knees/running in place</a></li>
          <li><a href="https://youtu.be/3XDriUn0udo" target="_blank">Lunge</a></li>
          <li><a href="https://youtu.be/YU0gWh72a3k" target="_blank">Push-up and rotation</a></li>
          <li><a href="https://youtu.be/K2VljzCC16g" target="_blank">Side Plank </a></li>
          </ol>
          <h2> <a name="beachexercises"></a> <img src="https://miro.medium.com/max/588/1*d7Ps7VtfU1xqPok0Md7tyw.png" width="500px"> Exercises for the Beach </h2>
          <ul>
          <li><a href="https://youtu.be/d4p6Jy6KUO4" target="_blank">Step-Ups</a></li>
          <li><a href="https://youtu.be/jDwoBqPH0jk" target="_blank">Sit-Ups</a></li>
          <li><a href="https://youtu.be/2z8JmcrW-As" target="_blank">Dips</a></li>
          <li><a href="https://youtu.be/3kSA9pm56NI" target="_blank">Bounding - double leg</a></li>
          <li><a href="https://youtu.be/I7ChaipZVM4" target="_blank">Bounding - single leg</a></li>
          <li><a href="https://youtu.be/s1JxkAWJt3I" target="_blank">Hopping</a></li>
          <li><a href="https://youtu.be/HV9ZqCXKUoc" target="_blank">Water Running</a></li>
          <li><a href="https://youtu.be/8OgfXlRzoGY" target="_blank">Sand Running</a></li>
          <li><a href="https://youtu.be/mgODBKc9x9c" target="_blank">Dune Sprints</a></li>
          <li><a href="https://youtu.be/yxZF66oRbk0" target="_blank">Beach Sprints</a></li>
          <li><a href="https://youtu.be/7SMzPn4LGjQ" target="_blank">Lunges</a></li>
          <li><a href="https://youtu.be/YaXPRqUwItQ" target="_blank">Squats</a></li>
          <li><a href="https://youtu.be/a_ZyX9Drnr8" target="_blank">Water Activities</a></li>
          </ul>
          <h2> <img src="https://cdn.popbela.com/content-images/post/20200612/untitled-design-39b2183d1ab17f63b25251b8298dfd51_750x500.jpg" width="500px"><a name="superheroexercises"></a>Superhero Workout</h2>
          <ul>
          <li><a href="lunge-spiderman.htm">Spiderman Lunges</a></li>
          <li><a href="push-up-spiderman.htm">Spiderman Push-Ups</a></li>
          <li><a href="superman.htm">Superman</a></li>
          <li><a href="superman-alternating.htm">Alternating Superman</a></li>
          </ul><div class="clearfix"></div>

    </div>

   
  <div class="box content">

           <div class="content content-inner content_full col-12-full">
          <div class="content_inset clearfix">
            <h2 class="page-title node-title">
              Diet and Exercise: Choices Today for a Healthier Tomorrow
            </h2>
              <aside class="textbox textbox-blue textbox-220"><p>Download a printable PDF version of the <a href="/sites/default/files/diet-and-exercise-508.pdf">Diet and Exercise: Choices Today for a Healthier Tomorrow infographic</a> (PDF, 315K). <a href="/sites/default/files/spanish-diet-and-exercise.pdf">View en español</a> (PDF, 328K) </p>
        </aside><p>Lifestyle choices you make today can lead to a healthier future. Learn how eating a healthy diet and exercising can help control or delay age-related health problems.</p>

        <p>Share this infographic and help spread the word about healthy diet and exercise. Click on the social media icons above, or copy and paste the URL and post it to your account (Twitter, Facebook, etc.).</p>

            <img src="https://i.pinimg.com/originals/75/b8/ac/75b8accf3b45c1c970a5da0e4d111b00.jpg" typeof="foaf:Image" />


          <h2>Share on Social Media</h2>

        <p>Copy and paste these messages into social media to help spread the word about healthy lifestyle choices:</p>

        <ul><li>Read and share these 5 #nutrition &amp; #exercise tips to promote healthy aging:
          <style type="text/css">
        <!--/*--><![CDATA[/* ><!--*/
        <!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->
          
        /*--><!]]>*/
        </style><a href="https://bit.ly/3bPd1Fy" target="_blank">https://bit.ly/3bPd1Fy</a></li>
          <li>Make good #diet &amp; #exercise choices today for a healthier tomorrow! Learn more in this infographic:
          <style type="text/css">
        <!--/*--><![CDATA[/* ><!--*/
        <!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->
          
        /*--><!]]>*/
        </style><a href="https://bit.ly/2WSr74D" target="_blank">https://bit.ly/2WSr74D</a></li>
          <li>Set short-term goals to maintain a healthy #diet &amp; #exercise routine with these 5 tips:
          <style type="text/css">
        <!--/*--><![CDATA[/* ><!--*/
        <!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->
          
        /*--><!]]>*/
        </style><a href="https://bit.ly/2WUNjey" target="_blank">https://bit.ly/2WUNjey</a></li>
        </ul><h2>Transcript</h2>

        <p>Eating a healthy diet and exercising often can help control or delay health issues associated with aging, like high blood pressure and diabetes. Set short-term goals to achieve and maintain a healthy diet and exercise routine.</p>

        <p>Make these five tips a priority every day:</p>

        <ul><li>Try to be physically active for at least 30 minutes on most or all days of the week.</li>
          <li>Eat plenty of fruits and vegetables.</li>
          <li>Choose foods that are low in added sugars, saturated fats, and sodium.</li>
          <li>Pick whole grains and lean sources of protein and dairy products.</li>
          <li>Practice all four types of exercise—endurance, strength, balance, and flexibility.</li>
        </ul>
        </div>
</div>
  </div>
</div>
    </article>
</main>
</div>
  <div class="jumbotron" style="background-color: #DDD3EC;">
        <div class="container" >
          <div class="col-lg-5 col-md-12 col-sm-12">
        <a href="https://www.instagram.com/rereriin/">
        <img src="instagram.png" style="width:45px;" 
        height="45" alt="hi" title="next page"></a>
      <a href="https://www.instagram.com/rereriin/">
        <img src="youtube.png" style="width:45px;"
        height="49" alt="hi" title="next page"></a></div>
        <p>&copy; 2021 | Astana IT University | SE-2005</p>

        <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Contacts: +708-258-65-78</p>
      </div>
      </div>
  </div>

</body>
</html>
