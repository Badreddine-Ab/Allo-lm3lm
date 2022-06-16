<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/add.css" media="screen">

<div class="container ">
    <div class="card" style="height : 570px ">
        <form class="form" action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="left-side" style= "background-color: #e84a90 ">
                <div class="left-heading">
                
                    <h3>Allo lm3lm</h3>
                </div>
                <div class="steps-content">
                    <h3>Step <span class="step-number">1</span></h3>
                    <p class="step-number-content active">Edit your personal information to get closer to companies.</p>
                    <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                    <p class="step-number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                    <p class="step-number-content d-none">Edit your profile piccture and let companies find youy fast.</p>
                </div>
                <ul class="progress-bar" >
                    <li class="active">Personal Information</li>
                    <li>Professional info</li>
                    <li>Work Experience</li>
                    <li>User Photo</li>
                </ul>
                

                
            </div>
            <div class="right-side">
                <div class="main active">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Your Personal Information</h2>
                        <p>Enter your personal information to get closer to copanies.</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" name="title" required require value="<?php echo $data['title'] ?>" id="user_name">
                            <span>First Name</span>
                        </div>
                        
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['phone'] ?>" name="phone" required require>
                            <span>Phone number</span>
                        </div>
                        <div class="input-div">
                            <input type="text" name="email" value="<?php echo $data['email'] ?>" required require>
                            <span>E-mail Address Professional</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <select name="contry" value="<?php echo $data['contry'] ?>">
                                <option>Select Country</option>
                                <option>Morocco</option>
                                
                            </select>
                        
                        </div>
                        <div class="input-div">
                            
                            <select name="city" value="<?php echo $data['city'] ?>">
                                <option>Select City</option>
                                <option>Marrakech</option>
                                <option>Safi</option>
                                <option>Youssoufia</option>
                                <option> Casablanca</option>
                                <option>Agadir</option>
                                <option>Laayoune</option>
                                <option>Gersif</option>
                                <option>Oujda</option>
                                <option>EL Jadida</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="button" class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Professional Info</h2>
                        <p>This is your time to shine. Let potential costumers know what you do best and how you gained your skills, certifications and experience</p>
                    </div>
                    <div class="input-text">
                        
                        <div class="input-div"> 
                            <input type="text" value="<?php echo $data['work_place_name'] ?>" name="work_place_name" required>
                            <span>work place name</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['certificate'] ?>" name="certificate" required require>
                            <span>Certificate Name</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <select name=" field" >
                                <option>Select field</option>
                                <option>Carpenter</option>
                                <option>Smith</option>
                                <option>Plumber</option>
                                <option>Electrician</option>
                                <option>Painter</option>
                                <option>Refrigerator repairman</option>
                                <option>air conditioning repairman</option>
                                <option>Upholsterer</option>
                                <option>Tailor</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Contact info</h2>
                        <p>Provide contact informations so that people can rech for you easily</p>
                    </div>
                    <div class="input-text">
                        
                        <div class="input-div"> 
                            <input type="text" value="<?php echo $data['instagram'] ?>" name="instagram"  >
                            <span>Instagram</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['facebook'] ?>" name="facebook">
                            <span>Facebook</span>
                        </div>
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['twitter'] ?>" name="twitter" >
                            <span>Twitter</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['whatsapp'] ?>" name="whatsapp" >
                            <span>Whatsapp</span>
                        </div>
                        <div class="input-div">
                            <input type="text" value="<?php echo $data['work_place_adress'] ?>" name="work_place_adress">
                            <span>Work Place Adress</span>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next Step</button>
                    </div>
                </div>
                
                
                
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>User Picture</h2>
                        <p>Upload your profile picture and share yourself.</p>
                    </div>
                    <div class="user_card">
                        <span></span>
                        <div class="circle">
                        <label for="img">Select a pic:</label>
                        <input type="file" id="img" name="img" accept="image/*">
              
                            
                        </div>
                        
                       
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="submit" class="submit_button">Submit</button>
                    </div>
                </div>
                 <div class="main">
                     <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                     
                    <div class="text congrats">
                        <h2>Congratulations!</h2>
                        <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully </p>
                        <button href="<?php echo URLROOT ?>/posts" class="btn btn-light"> <i class="fa fa-backwards"></i> Go to Offers</button>
                    </div>
                </div>
                
            
              

            

            </div>
        </form>
    </div>
</div>
<script src="<?php echo URLROOT; ?>/js/add.js">
</script>
                      <?php require APPROOT . '/views/inc/footer.php'; ?>