<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$i = 1;
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>    -->

    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">

        <!-- <div class="item active">
            <img src="img/portfolio/home_slider_1.jpg">
        </div>
        <div class="item">
            <img src="img/portfolio/home_slider_2.jpg">
        </div>
        <div class="item">
            <img src="img/portfolio/home_slider_3.jpg">
        </div> -->
        <?php foreach ($rows as $id => $row): ?>
            <?php if($i == 1){$active = 'active';}else{$active = '';}?>
            <div class="item <?php echo $active?>">
                <?php print $row; ?>
            </div>
            <?php $i++;?>
        <?php endforeach; ?>
        
    </div>

    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<!-- <div class="paging">
    <?php //foreach ($rows as $id => $row): ?>
        <?php //echo '<a rel="'.$i.'" href="#">'.$i.'</a>';?>
        <?php //$i++;?>
    <?php //endforeach ?>
</div> -->

<!-- <div class="item active">
                            <img src="img/portfolio/home_slider_1.jpg">
                        </div>
                        <div class="item">
                            <img src="img/portfolio/home_slider_2.jpg">
                        </div>
                        <div class="item">
                            <img src="img/portfolio/home_slider_3.jpg">
                        </div> -->