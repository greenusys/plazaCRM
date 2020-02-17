    <div class="container-fluid">
	    <div class="row mt-4">
		    <div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				    <h6>Update Profile</h6>
		            <div class="line mt-2"></div>
					<form>
						<div class="row">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Full Name<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Adminko">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">phone</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="phone" aria-describedby="emailHelp" >
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Language</label>
										</div>
										<div class="col-sm-8">
											<select name="language" class="form-control">
                                                <option value="english" selected="selected">English</option>
                                            </select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Locale</label>
										</div>
										<div class="col-sm-8">
											<select class="  form-control" name="locale">
											    <option value="aa_DJ">English (United States)</option>
												<option value="aa_DJ">Afar (Djibouti)</option>
												<option value="aa_ER">Afar (Eritrea)</option>
												<option value="aa_ET">Afar (Ethiopia)</option>
												<option value="af_ZA">Afrikaans (South Africa)</option>
												<option value="sq_AL">Albanian (Albania)</option>
											</select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Profile Photo</label>
										</div>
										<div class="col-sm-4">
											<img id="blah" src="#" alt="your image" />
											<input type='file' onchange="readURL(this);" />
										</div>
									</div>
									<div class="row mt-4">
									    <div class="offset-4 col-sm-8">
									        <button type="button" class="btn btn-dark">Update Profile</button>
										</div>
									</div>
								</div>
							</div>
						</div>
									
						<h6 class="mt-4">Change Email</h6>
		                <div class="line mt-2"></div>
						<div class="row mt-5">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Password</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password Current Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">New Email</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="New Email">
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="button" class="btn btn-dark">Change Email</button>
									</div>
								</div>
								
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				    <h6>Change Password</h6>
		            <div class="line mt-2"></div>
					<form>
						<div class="row">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Old Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="oldpassword" aria-describedby="emailHelp" placeholder="Enter Your Old Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">New Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="newpassword" aria-describedby="emailHelp" placeholder="Enter Your new Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Confirm Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="confirmpassword" aria-describedby="emailHelp" placeholder="Enter Your confirm Password">
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="button" class="btn btn-dark">Change Password</button>
									</div>
								</div>
							</div>
						</div>
									
						<h6 class="mt-4">Change Username</h6>
		                <div class="line mt-2"></div>
						<div class="row mt-5">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Password</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password Current Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">New Username</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="New Username">
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="button" class="btn btn-dark">Change Username</button>
									</div>
								</div>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
</div>
 <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>