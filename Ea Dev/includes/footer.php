<style>
    @media(max-width: 600px) {.resumeFooter{transform: translateY(-30px);}}
</style>
<div class="spacer-150 spacer-md-60 spacer-sm-30"></div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <h3>Let’s create something<br> great together!</h3>
                        </div>
                        <div class="col-md-4 col-12 align-right button-wrapper">
                            <a href="#" class="flen-btn mnttt"><span data-hover="ekpoemmanuelsg@gmail.com">ekpoemmanuelsg@gmail.com</span></a>
                            <div class="resumeFooter"><?php include "./components/resume.php" ?> <!-- RESUME --></div>
                            <div class="spacer-120 spacer-sm-60"></div>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row bottom-wrapper">
                        <div class="col-xl-4 col-md-12">
                            <p class="little">Designed by Me</p>
                        </div>
                        <div class="col-xl-8 col-md-12 social-links">
                            <?php foreach($socialLinks as $i) : ?>
                                <a href="<?php echo $i['url'] ?>" target="_blank"><?php echo $i['title'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </footer>

        </main>
    </div>
</div>

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/webgl.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC44qiQKRvAB1ETh4F1oQcSs9PIfLPbCQE&amp;sensor=false"></script>
    <script src="./assets/js/map.js"></script>
    <script src="./assets/js/main.js"></script>


    
</body>
</html>