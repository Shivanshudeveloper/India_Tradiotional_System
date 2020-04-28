<?php include './includes/header.inc.php' ?>

<section style="margin-top: 10%">
    <div class="container">

    <br>
    <br>


        <p class="float-right mb-2">
            <a href="dashboard.php" class="btn text-primary btn-sm btn-outline-link">
                My Projects
            </a>
            <a href="addnewproject.php" class="btn text-primary btn-sm btn-outline-link">
                Add New Project
            </a>
            <!-- <a href="rejected.php" class="btn btn-sm btn-outline-info">
                Researcher Rejected
            </a> -->

            <a href="index.php" class="btn btn-sm btn-outline-danger">
                Logout
            </a>
        </p>


        <div class="form-group">
            <label for="exampleInputEmail1">Search</label>
            <input type="text" class="form-control" placeholder="Document Title, Researcher, Approval, Category, Sub Category" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <center>
            <button class="btn btn-primary">Search</button>
        </center>

        

        


        <h3>
            Add New Project
        </h3>
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
</section>    
<br>
<br>

<script>
		CKEDITOR.replace('description');
	</script>
<?php include './includes/footer.inc.php' ?>