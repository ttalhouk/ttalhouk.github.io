<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Talal's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Development Portfolio Website for Talal Talhouk">

    <!-- vendor libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="resources/vendors/css/normalize.css">
    <link rel="stylesheet" type='text/css' href="resources/vendors/css/animate.css">
    <link rel="stylesheet" type='text/css' href="resources/vendors/css/ionicons.min.css">

    <!-- custom stylesheets -->
    <link rel="stylesheet" href="resources/stylesheets/styles.css">
    <link rel="stylesheet" href="resources/stylesheets/queries.css">
    <link rel="stylesheet" href="projects/style/style.css">

    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset='80'>
      <!-- nav bar -->
      <nav class="navbar fixed-top navbar-inverse bg-inverse navbar-toggleable-md bg-faded" id='navbar'>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand brand-out" href="#top">Talal Talhouk</a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#about" data-target='#about'>About</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#skills" data-target='#skills'>Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects" data-target='#projects'>Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-target='#contact'>Contact</a>
            </li>
          </ul>
        </div>
      </nav>

        <!-- top section -->

      <section class="headline" id='top'>
        <div class="container">
          <div class="headline--intro">
            <div class="headline--copy">
              <h1 class="display-3">Welcome to my Developer Portfolio</h1>
              <p class="lead">Please take a look around to find out more about me, my skills, and some projects I've worked on.</p>
            </div>
            <div class="headline--picture" id='headline-img'>
              <img src="resources/images/mypic.jpg" id='profile-pic' class='img-thumbnail' alt="Talal's Profile Picture">
            </div>
          </div>
            <hr class="my-4">
            <div id="cta">
              <p>Do you have any projects I can help you with?</p>
              <a href='#contact' class="btn btn-info"><i class='ion-ios-email'></i> Contact Me</a>
            </div>
          </div>
        </div>
      </section>

      <section id="about">
        <div class='container'>

            <div class="row">
              <div class="col-md-8 offset-md-2 text-center section-header">
                <h2 class='display-4'>Hello, I'm Talal</h2>
                <div class="divider">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 offset-md-1 col-sm-12 about-copy">
                <p>
                  I'm an engineer who's always interested in the inner workings of a piece of equipment. I love to troubleshoot, improve, and create designs to develop and integrate the latest technologies with increased performance or functionality. I continually look to improve my technical knowledge, which drove me to pursue software and web development as a means of approaching design from a new perspective and diving into a deep pool of ever expanding technologies.
                </p>
                <p>
                  I thrive in a team environment by leading by example through hard work and patience. I demonstrated project management skills as a mechanical project engineer, quality engineer, and most recently as team-lead on a mobile application project. I bring an engineering mindset and project management expertise to my future endeavors. I have experience solving complex problems by collecting information and measuring performance characteristics, analyzing data, implementing corrective/preventitive actions and ensuring the problem is solved.
                </p>
                <p>
                  I like to travel when I can as visiting new places and meeting new people really expands your viewpoint.  I also enjoy jogging (after I'm done), skiing (mostly falling) and spicy food.  I'm also an avid hockey fan who loves to watch and play 'Go Sharks'!
                </p>
              </div>
            </div>
        </div>
      </section>

      <section id="skills">
        <div class='container'>
          <div class="row section-title">
            <div class="col-md-8 offset-md-2 text-center section-header">
              <h2 class='display-4'>Technologies I Know</h2>
              <div class="divider">
              </div>
            </div>
          </div>
          <div class="skills-copy">
            <div class="row skills-item">
              <div class="col-sm-12">
                <h3 class='sub-heading'>Web Technologies / Languages</h3>
              </div>
              <div class="col-sm-6 col-md-3 text-center js--slide-right">
                <img class='img-fluid skill-img' src="resources/images/html-logo.png" alt="HTML Logo">
              </div>
              <div class="col-sm-6 col-md-3 text-center js--slide-right">
                <img class='img-fluid skill-img' src="resources/images/css-logo.png" alt="CSS Logo">
              </div>
              <div class="col-sm-6 col-md-3 text-center js--slide-left">
                <img class='img-fluid skill-img' src="resources/images/js-logo.png" alt="JavaScript Logo">
              </div>
              <div class="col-sm-6 col-md-3 text-center js--slide-left">
                <img class='img-fluid skill-img' src="resources/images/ruby-logo.gif" alt="Ruby Logo">
              </div>
            </div>

            <div class="row skills-item js--skills-secondary">
              <div class="col-sm-12">
                <h3 class='sub-heading'>Frameworks / Libraries / Databases</h3>
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/react-logo.png" alt="React Logo">
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/redux-logo.png" alt="Redux Logo">
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/jquery-logo.png" alt="jQuery Logo">
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/rails-logo.png" alt="Rails Logo">
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/postgres-logo.png" alt="PostgreSQL Logo">
              </div>
              <div class="col-sm-4 col-md-2 text-center js--slide-up">
                <img class='img-fluid skill-img' src="resources/images/bootstrap-logo.png" alt="Bootstrap Logo">
              </div>
            </div>
            <div class="row skills-item">
              <div class="col-sm-12">
                <h4 class='sub-heading'>Other Skills</h4>
              </div>
              <ul class="text-center other-skills">
                <li class="badge badge-pill badge-primary">Flex-box</li>
                <li class="badge badge-pill badge-primary">Responsive Design</li>
                <li class="badge badge-pill badge-primary">Sinatra</li>
                <li class="badge badge-pill badge-primary">Sass</li>
                <li class="badge badge-pill badge-primary">Webpack</li>
                <li class="badge badge-pill badge-primary">Node</li>
                <li class="badge badge-pill badge-primary">Express</li>
                <li class="badge badge-pill badge-primary">Meteor</li>
                <li class="badge badge-pill badge-primary">Mocha</li>
                <li class="badge badge-pill badge-primary">Rspec</li>
                <li class="badge badge-pill badge-primary">Active-Record</li>
                <li class="badge badge-pill badge-primary">D3</li>
                <li class="badge badge-pill badge-primary">High-Charts</li>
                <li class="badge badge-pill badge-primary">Heroku</li>
                <li class="badge badge-pill badge-primary">PHP</li>
                <li class="badge badge-pill badge-primary">ProEngineer</li>
                <li class="badge badge-pill badge-primary">AutoCad</li>
                <li class="badge badge-pill badge-primary">SolidWorks</li>
                <li class="badge badge-pill badge-primary">Six-Sigma</li>
                <li class="badge badge-pill badge-primary">Project Engineering/Managment</li>
                <li class="badge badge-pill badge-primary">Quality Engineering</li>
                <li class="badge badge-pill badge-primary">Documentaiton</li>
              </ul>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="projects">
        <div class='container'>
          <div class="row">
            <div class="col-md-8 offset-md-2 text-center section-header">
              <h2 class='display-4'>Projects I've Built</h2>
              <div class="divider">
              </div>
            </div>
          </div>
          <div class="projects-container">
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">

              <p class='lead text-center'>These are just a few examples of projects I've built and experience.  Please visit my LinkedIn and GitHub profiles for more information and details in the contact section below.</p>
            </div>

          </div>
        </div>
      </section>

      <section id="contact">
        <?php
          $error = '';
          $success = '';

          if($_POST){
            $email = $_POST['email'];
            if(!$_POST['email']){
              $error = $error.'No email provided. ';
            };
            if(!$_POST['name']){
              $error = $error.'No name provided. ';
            };
            if(!$_POST['content']){
              $error = $error.'No content provided.';
            };

            if ($_POST['email'] && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
              $error .= "$email is not a valid email address";
            };
            if($error != ''){

              $error = '<div class="alert alert-danger" role="alert"><p>'.$error.'</p></div>';
            } else {

              $emailTo = 'talal@sbcglobal.net';
              $subject = 'Contact Form Submission';
              $headers = "From: someone@talaltalhouk.com\n";
              $headers.="MIME-Version: 1.0\n";
              $headers.="Content-type: text/html; charset=iso 8859-1";
              $body = "message: \r\n".$_POST['content']."\r\n";
              $body .= "from: \r\n".$_POST['name']."\r\n";
              $body .= "email: \r\n".$email;
              if(mail($emailTo, $subject, $body, $headers)){
                $success = '<div class="alert alert-success" role="alert"><p><strong>Thank You!</strong> Your message was sent successfully</p></div>';
              } else {
                $error = '<div class="alert alert-danger" role="alert"><p>Your message was unable to send</p></div>';
              };
            };
          };
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2 text-center section-header">
                <h2 class='display-4'>Drop Me a Line</h2>
                <div class="divider">
                </div>
              </div>
            </div>
          </div>
          <div class="container contact-copy">
            <div class="err-msg">
            </div>
            <? echo $error ?>
            <? echo $success ?>
            <form class="form-group contact-form" method="post">
              <div class="form-group row name-field">
                <label for="name" class="col-md-2 col-form-label col-form-label-lg">Name:</label>
                <div class="col-md-10">
                  <input type="text" class="form-control form-control-lg" name='name' id="name" placeholder="Your Name">
                </div>
              </div>
              <div class="form-group row email-field">
                <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
                <div class="col-sm-10">
                  <input type="email" name='email' class="form-control form-control-lg" id="email" placeholder="you@example.com">
                </div>
              </div>
              <div class="form-group row content-field">
                <label for="content" class="col-md-12 col-form-label col-form-label-lg">Your Comment:</label>
                <div class="col-sm-12">
                  <textarea type="text" class="form-control form-control-lg" name='content' id="content"></textarea>
                </div>
              </div>
              <div class="form-group row form-submit">
                <div class="col-sm-4 offset-sm-4 text-center">
                  <input type="submit" name="submit" class='btn btn-success'></input>
                </div>
              </div>

            </form>
          </div>
        </section>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 footer-nav">
              <a href="mailto:talal@sbcglobal.net"><i class='ion-ios-email'></i> talal@sbcglobal.net</a>
              <p class='footer-text'><i class="ion-ios-telephone"></i> (408) 595-6848</p>
            </div>
            <div class="col-sm-6 text-sm-right">
              <ul class='social-links'>
                <li><a href="https://www.facebook.com/talal.talhouk"><i class='ion-social-facebook'></i></a></li>
                <li><a href="https://github.com/ttalhouk"><i class='ion-social-github'></i></a></li>
                <li><a href="https://www.linkedin.com/in/ttalhouk/"><i class='ion-social-linkedin'></i></a></li>
              </ul>

            </div>

          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <p class='copyright'>Copyright&copy; 2017 | Talal Talhouk | All Rights Reserved </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- Jquery, bootstrap, and tether -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="resources/vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/vendors/js/inview.min.js"></script>


    <!-- Custom script -->
    <script type="text/javascript" src='resources/javascript/script.js'>
    </script>
    <script src="projects/bundle.js"></script>
  </body>
</html>
