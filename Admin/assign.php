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
            <a href="admin.php" class="btn btn-sm btn-outline-primary">
                All Researchers List
            </a>

            <a href="assign.php" class="btn btn-sm btn-outline-primary">
                Reassign Category
            </a>

            <a href="index.php" class="btn btn-sm btn-outline-danger">
                Logout
            </a>
        </p>


        <h3>
            Reassign Category
        </h3>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Project Title</th>
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
                            Assign Category
                        </h4>
                        
                        
                        <hr>

                        <span>
                            <a href="#!" class="float-right h6">File Download</a>
                            <p class="h4 text-dark">
                                Category Assign
                            </p>
                            <span class="mt-2">
                                <ul>
                                    <li>
                                    Health
                                    </li>
                                    <li>
                                    Wellness
                                    </li>
                                    <li>
                                    Management
                                    </li>
                                </ul>
                            </span>

                            <hr>
                            <h4>
                                Reassign Category
                            </h4>
                            <div class="row">
                                <div class="col">
                                    <?php include './includes/searchbar-email.inc.php' ?>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary">Reasgin</button>
                                </div>
                            </div>
                            
                        </span>
                        
                    </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div> -->
                    </div>
                </div>
                </div>
                
            </tr>
            <tr>
                <th scope="row">2</th>
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