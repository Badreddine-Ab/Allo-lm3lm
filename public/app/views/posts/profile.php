<?php require APPROOT . '/views/inc/header.php'; 

?>


</div>
<div class="container">
    <div class="main-body">
        <div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $data['user']->name; ?></h4>
									<p class="text-secondary mb-1"><?php echo $data['user'][0]->field; ?></p>
									<p class="text-muted font-size-sm"><?php echo $data['posts'][0]->city; ?> , <?php echo $data['posts'][0]->contry; ?></p>
									<button class="btn btn-primary">Delete Account</button>
									
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@<?php echo $data['posts'][0]->twitter; ?></span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary"><?php echo $data['posts'][0]->instagram; ?></span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary"><?php echo $data['posts'][0]->facebook; ?></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<form method="post" action="<?php echo URLROOT; ?>/posts/profile" class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="user_name" type="text" class="form-control" value="<?php echo $data['user']->name?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="email" type="text" class="form-control" value="<?php echo $data['user']->email ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="phone" type="text" class="form-control" value="<?php echo $data['user']->phone ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Adress</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="adress" type="text" class="form-control" value="<?php echo $data['user']->adress ?>">
								</div>
							</div>
						
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
                                <div class="container-fuild card-group d-flex flex-wrap gapy-3 ms-3  ">
         
								<?php foreach($data['posts'] as $post) : ?>
            <div class="card d-flex mb-3 justify-content-between" style="min-width:290px; max-width:290px">
              <div style="flex-basis: 150px; overflow:hidden">
			  <?php flash() ?>
                <img class="card-img-top " src="<?= URLROOT?>/uploads/<?= $post->picture?>" alt="Card image cap">
              </div>
              <div class="card-body flex-grow-0">
                <h5 class="card-title"><?php echo $post->title; ?></h5>
                <p class="card-text"><?php echo $post->field; ?></p>
                <p class="card-text"><?php echo $post->phone; ?></p>
                <div class="dropdown d-flex justify-content-between">
                  <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id; ?>" class="btn btn-primary">see post</a>
                  <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/posts/edit/<?php echo $post->id; ?>">Edit</a></li>
					<form action="<?php echo URLROOT; ?>/posts/delete/ <?php echo $post->id; ?>" method="post">
					<input class="dropdown-item" type="submit" value="Delete">
						
					</form>
                  </ul>
                </div>
              </div>
            </div>
			<?php endforeach ?>
        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>