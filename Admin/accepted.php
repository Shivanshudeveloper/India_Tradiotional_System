<?php include './includes/header.inc.php' ?>

<section style="margin-top: 10%">
    <div class="container">


        <div class="form-group">
            <label for="exampleInputEmail1">Search</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <center>
            <button class="btn btn-primary">Search</button>
        </center>

        <p class="float-right">
            <a href="dashboard.php" class="btn btn-sm btn-outline-secondary">
                Researcher Review
            </a>
            <a href="accepted.php" class="btn btn-sm btn-outline-primary">
                Researcher Accepted
            </a>
            <a href="rejected.php" class="btn btn-sm btn-outline-info">
                Researcher Rejected
            </a>

            <a href="index.php" class="btn btn-sm btn-outline-danger">
                Logout
            </a>
        </p>

        


        <h3>
        All Researcher Accepted 
        </h3>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Project Title</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Automobile</td>

                <td>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-link">View</button>
                </td>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Assign</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>
                            
                            <p class="h2 text-dark">
                                Mark Ruffelo
                            </p>
                            <span class="text-muted">
                                example@gmail.com <br>
                                +91 8394 854 884
                            </span>
                        </span>

                        <hr>
                        <h4>
                            Action
                        </h4>
                        <!-- <div class="row">
                            <div class="col">
                                <button class="btn btn-block btn-primary">
                                    Accept
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-block btn-outline-danger">
                                    Reject
                                </button>
                            </div>
                        </div> -->
                        <hr>

                        <span>
                            <a href="#!" class="float-right h6">File Download</a>
                            <p class="h4 text-dark">
                                My Project Test Title
                            </p>
                            <span class="text-muted">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </span>
                            <hr>
                            <p class="h5 text-dark">
                                Reference URL: <a href="#!">https://url.com</a> 
                            </p>
                            <p class="h5 text-dark">
                                Publish Date: 4th Febuary 2020
                            </p>
                            <p class="h5 text-dark">
                                Associated Institute/Organization: Organization
                            </p>
                        </span>
                        
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </div>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Clark</td>
                <td>Automobile</td>

                <td>
                    <button class="btn btn-link">View</button>
                </td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Rohan</td>
                <td>Automobile</td>

                <td>
                    <button class="btn btn-link">View</button>
                </td>
                
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Akash</td>
                <td>Automobile</td>

                <td>
                    <button class="btn btn-link">View</button>
                </td>
                
            </tr>
        </tbody>
        </table>
    </div>
</section>    
<br>
<br>


<?php include './includes/footer.inc.php' ?>