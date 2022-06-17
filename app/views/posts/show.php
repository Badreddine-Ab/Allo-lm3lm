<?php require APPROOT . '/views/inc/header.php'; ?>



<style>
  .u-section-1 .u-image-1 {
    min-height: 704px;
    background-image: url("<?php echo URLROOT ?>/uploads/<?php echo $data['post']->picture; ?>");
    background-position: 50% 50%;
  }
</style>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/show.css" media="screen">
<section class="u-align-center u-clearfix u-custom-color-1 u-section-1" id="carousel_8755">
  <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
    <div class="u-gutter-0 u-layout">
      <div class="u-layout-row">
        <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1100" data-image-height="1134">
          <div class="u-container-layout u-valign-bottom u-container-layout-1"></div>
        </div>
        <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-30 u-white u-layout-cell-2">
          <div class="u-container-layout u-container-layout-2">
            <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">Hello, I’m <?php echo $data['post']->title; ?> </h1>
            <h6 class="u-custom-font u-font-pt-sans u-text u-text-default u-text-palette-2-base u-text-2"><?php echo $data['post']->field; ?></h6>
            <p class="u-text u-text-3"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="<?php echo URLROOT ?>/img/34.png" alt=""></span>&nbsp;Phone: <a href="?php echo $data['post']->phone; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-1"><?php echo $data['post']->phone; ?></a>
            </p>
            <p class="u-text u-text-4"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-2"><img src="<?php echo URLROOT ?>/img/35.png" alt=""></span>&nbsp;Email: <a href="mailto:<?php echo $data['post']->email; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-1 u-btn-2"><?php echo $data['post']->email; ?></a>
            </p>
            <p class="u-text u-text-5"><span class="u-icon u-text-custom-color-1 u-icon-3"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <g>
                    <g>
                      <path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5    c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021    C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333    s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"></path>
                    </g>
                  </g>
                </svg><img></span>&nbsp;<?php echo $data['post']->work_place_adress; ?>
            </p>
            <p class="u-text u-text-6"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-4"><img src="<?php echo URLROOT ?>/img/36.png" alt=""></span>&nbsp;Contry/City: <?php echo $data['post']->contry; ?>
            </p>
            <p class="u-text u-text-7"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-5"><img src="<?php echo URLROOT ?>/img/37.png" alt=""></span>&nbsp;Work Place: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-3"><?php echo $data['post']->city; ?></a>
            </p>
            <p class="u-text u-text-8"><span class="u-file-icon u-icon u-text-palette-2-base"><img src="<?php echo URLROOT ?>/img/38.png" alt=""></span>&nbsp;Certificate: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-4"><?php echo $data['post']->certificate; ?><br>
              </a>
            </p>
            <p class="u-text u-text-9"><span class="u-file-icon u-icon u-text-palette-2-base"><img src="<?php echo URLROOT ?>/img/39.png" alt=""></span>&nbsp;Instagram: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-5"><?php echo $data['post']->instagram; ?></a>
            </p>
            <p class="u-text u-text-10"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="<?php echo URLROOT ?>/img/40.png" alt=""></span>&nbsp;Facebook: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-6"><?php echo $data['post']->facebook; ?></a>
            </p>
            <p class="u-text u-text-11"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="<?php echo URLROOT ?>/img/41.png" alt=""></span>&nbsp;Twitter: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-7"><?php echo $data['post']->twitter; ?></a>
            </p>
            <p class="u-text u-text-12"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="<?php echo URLROOT ?>/img/42.png" alt=""></span>&nbsp;Whatsapp: <a href="" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-8"><?php echo $data['post']->whatsapp; ?></a>
            </p>
            <a href="<?php echo URLROOT; ?>/posts" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-base u-radius-8 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-9">Go Back </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require APPROOT . '/views/inc/footer.php'; ?>