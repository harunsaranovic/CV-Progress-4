<?php
//connection
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "localhost";
 $dbpass = "localhost";
 $db = "companies";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
}

function CloseCon($conn)         {
 $conn -> close();
 }
 $conn = OpenCon();

 $sqlquery = "SELECT * FROM comments";
 $results = mysqli_query($conn, $sqlquery);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="scripts/jquery-ui-1.12.1/jquery-ui.min.css">
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/main.css">

    <title>Harun Saranovic</title>
  </head>
  <body>

    <div class="container main">
      <div class="">
        <h3>Hello I am</h3>
        <h1>Harun Saranovic</h1>
        <h2>Software Engineer in Sarajevo, Bosnia and Herzegovina</h2>
      </div>
    </div>

    <div class="picture">
      <div class="picture-holder">

      </div>
      <div class="link">
        <a target="_blank" href="https://github.com/harunsaranovic"> <img src="img/github.svg" alt=""> </a>
        <a target="_blank" href="https://www.linkedin.com/in/harunsaranovic/"> <img src="img/linkedin.svg" alt=""> </a>
        <a target="_blank" href="https://www.instagram.com/saranovicdesign"> <img src="img/instagram.svg" alt=""> </a>
        <a target="_blank" href="https://www.behance.net/saranovicda858"> <img src="img/behance.svg" alt=""> </a>
        <a target="_blank" href="https://www.twitter.com/saranovicdesign"> <img src="img/twitter.svg" alt=""> </a>
      </div>
    </div>

    <div class="divider">

    </div>

    <div class="container shower shower-down process" id="shower-1">
      <div class="article-card">
        <div class="span-holder">
          <h2>About Me</h2>
          <span>I am a fourth year student of Software Engineering at International University of Sarajevo. The faculty
helped me a lot in developing programming, abstract thinking and communication skills.
I have great passion to learn new skills, principles and patterns.
I consider myself being a flexible person, which is important in sooware development
business. I love psychology and neuroscience
which helped me develop various skills in fields of productivity, understanding, working with other
people and extracting the best from myself and others. </span>
        </div>
      </div>
    </div>

    <div class="container shower shower-down process" id="shower-2">
      <div class="article-card">
        <h2>What I do</h2>
        <div class="span-holder">
          <span>I am currently working as a freelancer. By doing so I have picked up and developed a strong sense of
working with clients, delivering a high quality and secure sooware/web applications which always meets
both requirements and deadline
        <br>
        <br>
        In my past, I have got in touch with a lot of programming languages such as Java, JavaScript, C++, PHP,
HTML, CSS and various frameworks and libraries like NodeJs, Angular, Electron, jQuerry, Codeigniter,
Bootstrap, etc. I have worked with both SQL databases and one NoSQL database - MongoDB.
</span>
        </div>
      </div>
    </div>

    <div class="container shower shower-down process" id="shower-3">
      <div class="article-card">
        <div class="span-holder">
          <span>Graphic design is also my great passion.</span>
        </div>
        <br><br>
        <a href="https://www.behance.net/saranovicda858" class="blog" target="_blank">Checkout my portfolio</a>
      </div>
    </div>

    <div class="container shower shower-down process" id="shower-4">
      <div class="article-card">
        <h2>Skills</h2>

        <div class="span-holder skills">
          <div class="skill-holder"> <span>Java</span> </div>
          <div class="skill-holder"> <span>JavaScript</span> </div>
          <div class="skill-holder"> <span>C++</span> </div>
          <div class="skill-holder"> <span>C#</span> </div>
          <div class="skill-holder"> <span>HTML</span> </div>
          <div class="skill-holder"> <span>CSS</span> </div>
          <div class="skill-holder"> <span>Bootstrap</span> </div>
          <div class="skill-holder"> <span>jQuery</span> </div>
          <div class="skill-holder"> <span>NodeJs</span> </div>
          <div class="skill-holder"> <span>Angular</span> </div>
          <div class="skill-holder"> <span>PHP</span> </div>
          <div class="skill-holder"> <span>Codeigniter</span> </div>
          <div class="skill-holder"> <span>MySQL</span> </div>
          <div class="skill-holder"> <span>MongoDB</span> </div>
          <div class="skill-holder"> <span>UX/UI Design</span> </div>
          <div class="skill-holder"> <span>Linux</span> </div>
          <div class="skill-holder"> <span>Windows</span> </div>
          <div class="skill-holder"> <span>Adobe Illustrator</span> </div>
          <div class="skill-holder"> <span>Adobe Photoshop</span> </div>
          <div class="skill-holder"> <span>Adobe InDesign</span> </div>

        </div>
      </div>
    </div>


        <div class="container shower shower-down process" id="shower-5">
          <div class="article-card">
            <h2>Contact</h2>
            <form class="" action="index.html" method="post" style="padding: 0 20%;">
              <br>
              <br>
              <label>Name</label>
              <input type="text" name="name" value="">
              <br>
              <br>
              <label>Email</label>
              <input type="email" name="email" value="">
              <br>
              <br>
              <label>Telephone</label>
              <input type="tel" name="phone" value="">
              <br>
              <br>
              <label>Message</label>
              <textarea name="message" rows="4" cols="80"></textarea>
              <input type="submit" name="" value="SEND">
            </form>
          </div>
        </div>

        <div class="container shower shower-down process" id="shower-5">
          <div class="article-card">
            <h2>Calculator</h2>
            <div class="calculator" >
              <div class="display" id="display">0</div>
              <div class="button" id="1">1</div>
              <div class="button" id="2">2</div>
              <div class="button" id="3">3</div>
              <div class="button operator" id="C">C</div>
              <div class="button" id="4">4</div>
              <div class="button" id="5">5</div>
              <div class="button" id="6">6</div>
              <div class="button operator" id="plus">+</div>
              <div class="button" id="7">7</div>
              <div class="button" id="8">8</div>
              <div class="button" id="9">9</div>
              <div class="button operator" id="minus">-</div>
              <div class="button operator" id="mult">*</div>
              <div class="button" id="0">0</div>
              <div class="button operator" id="divide">/</div>
              <div class="button operator" id="equal">=</div>
            </div>
          </div>
        </div>




        <div class="container shower shower-down process" id="shower-5">
          <div class="article-card">
            <h2>Comment Section (SQL)</h2>
            <br>
            <br>
            <?php
              while($result = $results->fetch_array()){
            ?>
            <div class="comment">
              <span> <?php echo $result['text']; ?> </span>
              <h6> <?php echo $result['date']; ?> </h6>
            </div>
          <?php } ?>
            <br>
            <br>
            <h4>Write a comment</h4>
            <form class="comform" action="add-comment.php" method="post">
              <textarea name="text" rows="8" cols="80"></textarea>
              <input type="submit" name="" value="COMMENT">
            </form>
          </div>
        </div>


    <div class="rep-link" id="rl">
      <div><a target="_blank" href="https://github.com/harunsaranovic/CV">1st repository GitHub</a></div>
      <div><a target="_blank" href="https://github.com/harunsaranovic/CV-Progress-2">2nd repository GitHub</a></div>
      <div><a target="_blank" href="https://github.com/harunsaranovic/CV-Progress-3">3rd repository GitHub</a></div>
      <div><a target="_blank" href="https://github.com/harunsaranovic/CV-Progress-4">4th repository GitHub</a></div>
      <div><a target="_blank" href="http://harunsaranovic.co/projects/cs412-CV-Progress-1">1st repository hosted</a></div>
      <div><a target="_blank" href="http://harunsaranovic.co/projects/cs412-CV-Progress-2">2nd repository hosted</a></div>
      <div><a target="_blank" href="http://harunsaranovic.co/projects/cs412-CV-Progress-3">3rd repository hosted</a></div>
      <div class="cls" id="cls">
        Close
      </div>
    </div>

    <footer>
      <span>2019 All Rights Reserved. Developed by Harun Saranovic</span>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Library for UI -->
    <script src="scripts/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="scripts/jquery-ui-1.12.1/jquery-ui.min.js"></script>


    <script>
      var first = 0;
      var operator = "";

      $('.button').click(function() {
        var id = $(this).attr('id');
        var display = $('#display').text();
        if($(this).hasClass('operator')){
          if($(this).attr('id')=="equal"){
            switch (operator) {
              case "plus":
                var result = parseInt(first)+parseInt(display);
                $('#display').text(result);
                break;
              case "minus":
                var result = parseInt(first)-parseInt(display);
                $('#display').text(result);
                break;
              case "mult":
                var result = parseInt(first)*parseInt(display);
                $('#display').text(result);
                break;
              case "divide":
                var result = parseInt(first)/parseInt(display);
                $('#display').text(result);
                break;
            }
            if(operator=="C")
              $('#display').text(0);
            else
              operator = "";
          }else{
            first = display;
            $('#display').text('0');
            operator = $(this).attr('id');
          }
        }else{
          if (display == 0)
          $('#display').text(id);
          else
          $('#display').text(display+id)
        }
      });

      $('#cls').click(function(){
        $('#rl').fadeOut();
      });
    </script>

  </body>
</html>
