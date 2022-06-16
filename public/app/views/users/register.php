<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/register.css" media="screen">


<section class="u-clearfix u-gradient u-section-1" id="carousel_a1eb">
<?php require APPROOT . '/views/inc/contact.php'; ?>
  <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
      <div class="u-layout-row">
        <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
          <div class="u-container-layout u-valign-top u-container-layout-5">
            <div class="u-form u-form-1">
              <form action="<?php echo URLROOT; ?>/users/register" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
                <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
                  <label for="email-319a" class="u-label u-text-body-alt-color u-label-1">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['email']; ?>">
                  <span><?php echo $data['email_err']; ?> </span>
                </div>
                <div class="u-form-group u-form-name u-form-group-2">
                  <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color" <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name']; ?>">
                  <span><?php echo $data['name_err']; ?> </span>
                </div>
                <div class="u-form-address u-form-group u-form-group-3">
                  <label for="address-806e" class="u-label u-text-body-alt-color u-label-3">Address</label>
                  <input type="text" placeholder="Enter your address" id="address-806e" name="adress" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color u-input-3" <?php echo (!empty($data['adress_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['adress']; ?>">

                  <span><?php echo $data['adress_err']; ?> </span>
                </div>
                <div class="u-form-group u-form-phone u-form-group-4">
                  <label for="phone-f871" class="u-label u-text-body-alt-color u-label-4">Phone</label>
                  <input type="tel"  placeholder="Enter your phone (e.g. +212 612472386)" id="phone-f871" name="phone" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color u-input-4" <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['phone']; ?>">
                  <span><?php echo $data['phone_err']; ?> </span>
                </div>
                
                <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
                  <label for="email-319a" class="u-label u-text-body-alt-color u-label-1">password</label>
                  <input type="password" placeholder="Enter a valid email address" id="email-319a" name="password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['password']; ?>">
                  <span><?php echo $data['password_err']; ?> </span>
                </div>
                </div>
                <div class="u-form-group u-form-name u-form-group-2">
                  <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Repeat Password</label>
                  <input type="password" placeholder="Repeat your password" id="name-319a" name="confirm_password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color" <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['confirm_password']; ?>">
                  <span><?php echo $data['confirm_password_err']; ?> </span>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-form-group-6">
                  <input type="submit" value="Register" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-50 u-text-palette-1-base u-white u-btn-2"></input>
                  
                </div>
               
                <p class="u-text u-text-body-alt-color u-text-default u-text-4">already have an account ? <a href="<?php echo URLROOT; ?>/users/login">sign in here</a> </p>

              </form>
            </div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
          <div class="u-container-layout u-container-layout-6">
            <h2 class="u-text u-text-body-alt-color u-text-default u-text-9">Create An Account</h2>
            <h6 class="u-custom-font u-text u-text-body-alt-color u-text-font u-text-10">We can ensure reliability, low cost fares and most important, with safety and comfort in mind.</h6>
            <p class="u-text u-text-body-alt-color u-text-11">Etiam sit amet convallis erat – class aptent taciti sociosqu ad litora torquent per conubia! Maecenas gravida lacus. Lorem etiam sit amet convallis erat.</p>
            <div class="u-social-icons u-spacing-20 u-social-icons-1">
              <a class="u-social-url" target="_blank" href="https://www.facebook.com/YouCodeSchool/"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-white u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                    <use xmlns:xlink="https://www.facebook.com/YouCodeSchool/" xlink:href="#svg-7d32"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-7d32">
                    <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                  </svg>


                </span>
              </a>
              <a class="u-social-url" target="_blank" href="https://twitter.com/YouCode18"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-white u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                    <use xmlns:xlink="https://twitter.com/YouCode18" xlink:href="#svg-a46b"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-a46b">
                    <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
                  </svg>


                </span>
              </a>
              <a class="u-social-url" target="_blank" href="https://www.instagram.com/youcodeschool/"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-white u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                    <use xmlns:xlink="https://www.instagram.com/youcodeschool/" xlink:href="#svg-8341"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8341">
                    <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
                    <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                    <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                  </svg>


                </span>
              </a>
              <a class="u-social-url" target="_blank" href="https://www.linkedin.com/company/youcode-maroc/mycompany/"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-white u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                    <use xmlns:xlink="https://www.linkedin.com/company/youcode-maroc/mycompany/" xlink:href="#svg-8dc3"></use>
                  </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8dc3">
                    <path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path>
                  </svg>


                </span>
              </a>
            </div>
          </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

</div>
</div>
</div>
<!-- <script src="<?php echo URLROOT; ?>/public/js/register.js"></script> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>