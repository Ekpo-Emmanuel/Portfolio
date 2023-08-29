<?php 
    include "./includes/header.php";


    $currentUrlId = isset($_GET['id']) ? intval($_GET['id']) : -1; // Get the ID from the URL parameter
    $found = false;

    if ($currentUrlId != -1) {
        foreach ($projectList as $i) :
            if ($i['id'] === $currentUrlId) {
                $found = true;
?>
            <div class="work-hero-4">
                <div class="work-caption">
                    <span class="category"><?php echo $i['desc']; ?></span>
                    <h1 class="title"><?php echo $i['title']; ?></h1>
                    <div class="spacer-30"></div>
                    <a href="#content" class="scroll-to-explore redirect" data-duration="1000">
                        <span>Scroll to Explore</span>
                        <i class="ri-arrow-right-down-line"></i>
                    </a>
                </div>
                <div class="image-anime parallax-image full-image">
                    <img src="./assets/images/works/work-1/<?php echo $i['url']; ?>" alt="about">
                </div>
            </div>


            <div class="container" id="content">
                <div class="spacer-150 spacer-md-90 spacer-sm-60"></div>
                <div class="col-10 offset-1">
                    <h2 class="align-center text-anime"><?php echo $i['main_title']; ?></h2>
                </div>
            </div>

            <div class="container">
                <blockquote class="showcase">
                    <p class="text-anime"><?php echo $i['main_desc'] ?></p>
                </blockquote>
            </div>                  
            <div class="container links_01" style="display: flex; flex-direction: row; margin-top: 50px">
                <?php foreach ($i['source'] as $sc): ?>
                        <!-- <div class="text-anime"><?php echo $sc['title']; ?></div> -->
                    <a href="<?php echo $sc['url'] ?>" target="_blank" style="color: #fff; background: black; width: fit-content; border-radius: 50px; padding: 10px 20px; margin-right: 10px"><?php echo $sc['title']; ?></a>
                <?php endforeach; ?>
            </div>

            <div class="spacer-120 spacer-sm-60"></div>
            <div class="services-1">
                <div class="container">
                    <h4 class="text-anime">
                        Features
                    </h4>
                    <div class="row">
                        <div class="col-xl-12 accordion">
                            <div class="spacer-45"></div>
                            <?php foreach ($i['features'] as $feat): ?>
                                <div class="accordion-title">
                                    <div class="spacer-30"></div>
                                    <div class="text-anime"><?php echo $feat['title']; ?></div>
                                    <!-- <ul> -->
                                        <?php foreach ($feat['feats'] as $ft): ?>
                                            <p class="little" >- <?php echo $ft; ?></p>
                                        <?php endforeach ?>
                                    <!-- </ul> -->
                                    <div class="spacer-30"></div>
                                    <hr>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer-90 spacer-md-45 spacer-sm-30"></div>
            <style>
                .img_dislay {
                    display: flex;
                    flex-direction: row;
                    /* background-color: red; */
                    /* position: relative; */
                    /* overflow-x: scroll; */
                    flex-wrap: wrap;
                }
                .display 
                {
                    display: flex;
                    margin: 10px auto;
                    place-content: center;
                    align-items: center;
                    justify-content: center;
                    background-color: #fff;
                    transition: 0.3s;
                    /* background-color: red; */
                }
                .display img 
                {
                    height: auto;
                    width: 300px;
                    object-fit: contain;
                    margin: auto;
                }
            </style>
            <div class="img_dislay">
                <?php foreach ($i['display_img'] as $di): ?>
                    <div class="display">
                        <a href="./assets/images/works/<?php echo $di?>" class="lightbox">
                            <img src="./assets/images/works/<?php echo $di?>" alt="<?php echo $di?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="container">
                <blockquote class="showcase">
                    <h5>Tools</h5>
                    <?php foreach ($i['tools'] as $tools): ?>
                        <ul>
                            <span class="text-anime">🚀 <?php echo $tools?></span>
                        </ul>
                    <?php endforeach; ?>
                </blockquote>
            </div> -->


            <div class="spacer-90 spacer-md-45 spacer-sm-30"></div>
            <div class="container align-center">
                <a href="projects-grid.php" class="next-work">
                        <span>MORE PROJECTS</span>
                        <h6 class="title text-anime">EA Dev.</h6>
                </a>
            </div>

<?php 
            break; // Exit the loop since we found a match
        }
    endforeach;
} 
?>

<?php
if (!$found) {
    include "./components/notfound.php";
}
    ?>
    
<?php include "./includes/footer.php"; ?>
