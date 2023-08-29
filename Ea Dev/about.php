<?php include "./includes/header.php" ?>
<?php include "./config.php" ?>




   <div class="spacer-90 spacer-sm-60"></div>
   <div class="spacer-90 spacer-sm-60"></div>
   <div class="spacer-90 spacer-sm-60"></div>
   <div class="about-flen-three">
           <div class="row">
               <div class="col-xl-5 col-md-5 col-11 left-area">
                   <h6 class="text-anime">I'm a Full Stack developer with 3 years of experience with front end and backend technologies. </h6>
                   <!-- Number -->
                   <div class="spacer-60"></div>
                   <div class="row about-number">
                       <div class="col-xl-3 col-12 counter fade-up-anime">
                           <div class="count-number"><?php 
                            if ($httpCode === 200) {
                                $userData = json_decode($response, true);
                                $repositoryCount = $userData['public_repos'];

                                $rounded = round($repositoryCount, -1);
                                echo $rounded;
                            } else {
                                echo "Error: HTTP {$httpCode}";
                            }                        
                           ?></div>
                           <div class="right-side">
                               <div class="plus"><span>+</span></div>
                           </div>
                       </div>
                       <div class="col-xl-9 col-12">
                           <p class="little text-anime">Projects</p>
                       </div>
                       <div class="spacer-60 spacer-md-15"></div>
                       <hr>
                   </div>
               </div>
               <style>
                .resumeAbout {
                    transform: translateX(-70px);
                }
                @media (max-width: 780px) {.resumeAbout {transform: translateX(-50px); } }
                @media (max-width: 680px) {.resumeAbout {transform: translateX(-30px); } }

               </style>
               <div class="col-xl-5 col-md-5 col-9 offset-1 offset-md-1 offset-xl-2">
                   <p class="text-anime right-area"> Skilled in creating responsive and visually appealing websites that are optimized for user experience.</p>
                   <div class="resumeAbout"><?php include "./components/resume.php" ?> <!-- RESUME --></div>
                   <div class="spacer-90 spacer-md-75"></div>
                   <div class="container">
               </div>
           </div>
   </div>

   <div class="spacer-90 spacer-sm-60"></div>
   <?php include "./components/teams.php" ?> <!-- TEAM -->            


   <?php include "./components/services.php" ?> <!-- SERVICES -->  
    <?php include "./components/testimony.php" ?> <!-- TESTIMONY -->            




<?php include "./includes/footer.php" ?>
