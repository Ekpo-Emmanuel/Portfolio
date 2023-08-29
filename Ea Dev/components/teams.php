
<style>
    .teammate- .teammate {
        width: 10vw;
        padding-bottom: 0px;
        /* background-color: red; */
        padding: 40px 0;
        display: flex;
        flex-direction: column;
    }
    .teammate- .teammate img{
        height: 75px;
        width: 75px;
        object-fit: contain;
    }
    .team-wrap {
        display: flex;
        /* flex-wrap: wrap; */
    }
    @media(max-width: 1000px) {
    .teammate- .teammate {
        padding: 20px 8px;
    }
        .teammate- .teammate img{
            height: 50px;
            width: 50px;
        }
        .team-wrap {
            flex-wrap: wrap;
        }
    }
</style>
<div class="teammate- container">
        <div class="team-wrap" style="transform: translateY(-30px);">
            <?php foreach($skills as $skill): ?>
            <div class="teammate">
                <div class="image-anim">
                    <img src="./assets/images/skills/<?php echo $skill['url']; ?>" alt="">
                </div>
                <div class="teammate-info">
                    <span class="name text-anime"><?php // echo $skill['name']; ?></span>
                    <span class="job text-anime"><?php // echo $skill['position']; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>