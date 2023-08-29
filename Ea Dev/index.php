<?php include "./includes/header.php" ?>

                <!-- PERSPECTIVE PORTFOLIO
    ============================================= -->	
    <div class="freelancer-works-wrap">
        <div class="spacer-120"></div>
        <div class="container">
            <div class="section-title">
                <span class="subheading text-anime">PORTFOLIO</span>
                <div class="spacer-30 spacer-md-15"></div>
                <h3 class="text-anime">Featured works</h3>
            </div>
        </div>
        <div class="spacer-30 spacer-sm-30"></div>
        <div class="perspective-slider">
            
            <?php 
            $projectSlice = array_slice($projectList, 0, 4);

            foreach($projectSlice as $i) : ?>
                <div class="slide">
                    <a href="work-6.php?id=<?php echo $i['id'] ?>" data-cursor-type="arrow" data-cursor-color="#FFAF82" class="image" style="background-image: url(./assets/images/works/work-1/<?php echo $i['url'] ?>);">
                        <div class="slider-content">
                            <span class="category"><?php echo $i['desc'] ?></span>
                            <h1 data-splitting><?php echo $i['title'] ?></h1>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="slider-bottom">
            <div class="row">
                <div class="col-6"><a href="projects-grid.php">all works</a></div>
                <div class="col-6 align-right">
                    <div class="slide-number-wrap">
                        <div class="slide-numbers"></div>
                        <div class="total-slide"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	
    <div class="freelancer-hero">
        <div class="container">
            <div class="">
                <span class="hi text-anime">Greatings,</span>
                <div class="spacer-75"></div>
                <h1 class="title text-anime">I’m <span>Emmanuel</span>, a Full Stack <span>Developer</span></h1>

            </div>
        </div>
    </div>



    <!-- ABOUT
    ============================================= -->	
    <div class="about-freelancer">
        <div class="spacer-120 spacer-sm-60"></div>
        <div class="container">
            <div class="section-title">
                <!-- <span class="subheading text-anime">ABOUT ME</span> -->
                <div class="spacer-30 spacer-md-15"></div>
                <h2 class="text-anime">I am a talented Developer, and I am focused on creating high-quality and impactful digital experiences.</h2>
            </div>
        </div>
        <div class="container agency-counter">
            <div class="spacer-90 spacer-sm-30"></div>
            <div class="row">
                <!-- Number -->
                <div class="col-4 counter">
                    <div class="count-number"><?php echo count($projectList) ?></div>
                    <div class="right-side">
                        <div class="plus"><span style="display: inline; color: #fff">+</span></div>
                        <div class="counter-title"><span>FEATURED</span></div>
                    </div>
                </div>
                <!-- Number -->
                <div class="col-4 counter">
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
                        <div class="counter-title"><span>PROJECTS</span></div>
                    </div>
                </div>
                <!-- Number -->
                <div class="col-4 counter">
                    <div class="count-number">200</div>
                    <div class="right-side">
                        <div class="plus"><span>+</span></div>
                        <div class="counter-title"><span>YOUTUBE</span></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .resumeIndex {
                margin-top: 40px;
            }
        </style>
        <div class="resumeIndex"><?php include "./components/resume.php" ?> <!-- RESUME --></div>
        <div class="spacer-120 spacer-sm-60"></div>
    </div>

    <?php include "./components/services.php" ?> <!-- SERVICES -->
    <?php include "./components/testimony.php" ?> <!-- TEAM  -->	




<?php include "./includes/footer.php" ?>
         