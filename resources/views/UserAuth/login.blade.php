
<section class="at-login-form">
				<!-- MODAL LOGIN -->
				<div class="modal fade" id="at-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<b><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button></b>
							</div>
							<div class="modal-body">
                            <center><i class="fa fa-circle" style="font-size:100px;height:110px;"></i></center>
								
										<form>
											<div class="form-group">
												<input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
											</div>
											<div class="row">	
												<div class="col-md-6">
													<div class="checkbox">
														<label>
															<input type="checkbox"> Remember me
														</label>
													</div>	
												</div>
												<div class="col-md-4 col-md-offset-2">	
													<p class="frgt-pswd"   data-toggle="modal" data-dismiss="modal"  data-target="#at-reset-pswd">	Forgot Password  ?</p>
												</div>
											</div>
											<button type="submit" class="btn-lgin">Login</button>
										</form>
                                     <!--   <div class="signup-or-separator">
											<span class="h6 signup-or-separator--text">or</span>
											<hr>
										</div>
                                        <button class="btn-fb"> <i class="fa fa-fw fa-facebook pull-left" aria-hidden="true"></i>
									Login with Facebook	</button> <br>	
									<button class="btn-gp"> <i class="fa fa-fw fa-google-plus pull-left" aria-hidden="true"></i>
										Login with Google	</button> <br>	  -->
										
									</div>
									<div class="modal-footer">
										<div class="row">	
											<div class="col-md-6">
												<p class="ta-l">Don't have an account ? </p>
											</div>	
											<div class="col-md-4 col-md-offset-2">	
												<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signup-filling" >Sign Up </button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL LOGIN ENDS -->
						<!-- MODAL SIGNUP -->
						<div class="modal fade" id="at-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									</div>
									<div class="modal-body">
										<button class="btn-fb"> <i class="fa fa-fw fa-facebook pull-left" aria-hidden="true"></i>
											Signup with Facebook	</button> <br>	
											<button class="btn-gp"> <i class="fa fa-fw fa-google-plus pull-left" aria-hidden="true"></i>
												Signup with Google	</button> <br>	
												<div class="signup-or-separator">
													<span class="h6 signup-or-separator--text">or</span>
													<hr>
												</div>
												<button type="submit" class="btn-lgin" data-toggle="modal"  data-dismiss="modal" data-target="#at-signup-filling">Signup with Email</button> <hr>	
												<p>By signing up, I agree to Airbnb’s , Payments <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>. </p>
											</div>
											<div class="modal-footer">
												<div class="row">	
													<div class="col-md-6">
														<p class="ta-l">Already a Member? </p>
													</div>	
													<div class="col-md-4 col-md-offset-2">	
														<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-login">Login</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- MODAL SIGNUP FORM FILLING -->
								<div class="modal fade" id="at-signup-filling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<center><p>Sign up free to connect with the right one </p></center>
												
												<form action={{url('/reg')}}>
													 <!-- <div class="form-group">
														<input type="text" class="form-control-form " id="exampleInputEmaillog" placeholder="Full Name">
													</div>  -->	
													<div class="form-group">
														<input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
													</div>
													<div class="form-group">
														<input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
													</div>
													<div class="form-group">
													<select id="selectbasic" name="selectbasic" class="form-control-form">
														<<option value="0">Profile created for</option>
													</select>
													</div>

													<div class="row">	
														<div class="col-md-12">	
															<div class="checkbox">
																<label>
																	<input type="checkbox"> 
																	I’d like to receive Specail Promotion coupons and inspiration 
																</label>
															</div>

														<!--	<p>By signing up, I agree to Airbnb’s , Payments <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>. </p>
                                                        -->
														</div>			
													</div>
													<button type="submit"  class="btn-lgin">Signup</button>
												</form>
											</div>
											<div class="modal-footer">
												<div class="row">	
													<div class="col-md-6">
														<p class="ta-l">Already a Member? </p>
													</div>	
													<div class="col-md-4 col-md-offset-2">	
														<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-login">Login</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- MODAL SIGNUP FORM FILLING -->
								<!-- MODAL FORGOT PASSWORD -->
								<div class="modal fade" id="at-reset-pswd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<form>
													<p>	Enter the email address associated with your account, and we’ll email you a link to reset your password. </p>
													<div class="form-group">

														<input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
													</div>
												</form>
											</div>
											<div class="modal-footer">
											</div>
										</div>
									</div>
								</div>
								<!-- MODAL HELP -->
								<div class="modal fade" id="at-helping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<form>
													<div class="form-group">
														<input type="text" class="form-control-form " id="exampleInputEmaillog" placeholder="Enter Your Searches ">
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<div class="row">	
													<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" >Send areset Link</button>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			</section>
