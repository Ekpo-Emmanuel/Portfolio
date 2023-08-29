<div class="spacer-90 spacer-sm-60"></div>

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-10 offset-1 offset-xl-2">
                <div class="testimonial-wrap">
                <div class="testimonial-slider">
                    <div class="slider-arrows">
                        <i class="ri-arrow-left-line"></i>
                        <div class="active number" data-slide-count="1">01</div>
                        <div class="progress"><span></span></div>
                        <div class="total number"><?php echo '0'.count($testimony); ?></div>
                        <i class="ri-arrow-right-line"></i>
                    </div>
                    <div class="swiper-wrapper">
                        <?php foreach($testimony as $i): ?>
                            <div class="swiper-slide">
                                <h6><?php echo $i['text'] ?></h6>
                                <div class="author"><?php echo $i['name'] ?> - <?php echo $i['title'] ?> <br><?php echo $i['company'] ?>.</div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>