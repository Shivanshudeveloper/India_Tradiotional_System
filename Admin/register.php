<?php include './includes/header.inc.php' ?>



   

    <!-- service_part start-->
    <section class="service_part section_padding gray_bg mt-4">
        <div class="container">
            <h1 class="text-center">
                Register As
            </h1>
            <center>
                <a href="#!" data-toggle="modal" data-target="#exampleModallogin" class="mt-2 mb-2">
                    Already have an Account
                </a>
                <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="float-left" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group ">
                                <label class="float-left" for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                    </div>
                </div>
                </div>
            </center>
            
            <div class="row mt-2">

                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part">
                        <span class="single_service_icon"><i class="flaticon-growth"></i></span>
                        <h4>Researcher</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="+91 " aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
    
                            <label for="category">Select Category</label>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="category" id="category">
										<option value="">- Select Your Field of Interest -</option>
										<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
										<option value="Health, Wellness">Health, Wellness</option>
										<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
										<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
										<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
										<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
									</select>
                                </div>

                                <div class="col">
                                    <select class="form-control" name="category_sub" id="category_sub">
												
                                    </select>
                                </div>
                            </div>


                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Project Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" id="description" placeholder="Description" rows="4"></textarea>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Reference URL</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Publish Date</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Associated Institute/Organization</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>

                            
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part">
                        <span class="single_service_icon"><i class="flaticon-growth"></i></span>
                        <h4>Reviewer</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part single_service_part_2">
                        <span class="single_service_icon style_icon"><i class="flaticon-wallet"></i></span>
                        <h4>Individuals</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3 service_btn">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    
    <script>
		CKEDITOR.replace('description');
	</script>
    <?php include './includes/footer.inc.php' ?>