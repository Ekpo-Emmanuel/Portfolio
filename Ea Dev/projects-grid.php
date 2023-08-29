<?php include "./includes/header.php" ?>   



    <div class="page-caption">
        <canvas class="scene scene--full" id="scene"></canvas>
        <div class="spacer-300 spacer-md-200"></div>
        <div class="container">
            <h1 class="title">See Some<br> Cool Stuff I've<br> Worked On.</h1>
            <a href="#projectListsAll" style="opacity: .6; margin-top: 20px" class="scroll-to-explore redirect" data-duration="1000">
            <span>Scroll to Explore</span>
            <i class="ri-arrow-right-down-line"></i>
        </a>
        </div>
    </div>

   <div class="spacer-150 spacer-sm-60"></div>
    
    <div class="container" id="projectListsAll">
        <div class="row grid-works-wrap fast-right-items creative-2-column">
        <?php foreach($projectList as $i) : ?>
            <!-- a grid -->
            <div class="col-md-6 grid-work">
                <div class="spacer-90"></div>
                <a href="work-6.php?id=<?php echo $i['id'] ?>" class="work-item landscape" data-cursor-type="arrow">
                    <div class=" parallax-image">
                        <img src="./assets/images/works/work-1/<?php echo $i['url'] ?>">
                    </div>
                    <div class="caption">
                        <!-- <span><?php echo $i['desc'] ?></span> -->
                        <h5 class="title"><?php echo $i['title'] ?></h5>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


<?php include "./includes/footer.php" ?>
