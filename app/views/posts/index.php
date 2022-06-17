<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/posts.css" media="screen">
  <?php flash('post_message');?>

    <section class="u-align-center u-clearfix u-section-1" id="carousel_94c7">
      <div class="u-expanded-width u-gradient u-shape u-shape-rectangle u-shape-1"></div>
      <h2 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-1">Meet The Team <br>Our Craftsmen
      </h2>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <?php foreach($data['posts'] as $post) : ?>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <img alt="" class="u-image u-image-default u-image-1" data-image-width="404" data-image-height="404" src="<?= URLROOT?>/uploads/<?= $post->picture?>">
              <h3 class="u-align-center u-custom-font u-font-oswald u-text u-text-2"><?php echo $post->title; ?></h3>
              <p class="u-align-center u-text u-text-palette-3-base u-text-3"> <?php echo $post->field; ?></p>
              <p class="u-align-center u-text u-text-4"><?php echo $post->phone; ?></p>
              <p class=""><?php echo $post->city ; ?>, <?php echo $post->contry ; ?> </p>
              <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" type="button" class="btn pink">more details</a>            </div>
          </div>
         
           <?php endforeach ?>
          
           
          
         
        </div>
      </div>
     
      </p>
    </section>





<?php require APPROOT . '/views/inc/footer.php'; ?>