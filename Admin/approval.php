<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bizcon</title>
    <link rel="icon" href="img/favicon.png">

    <script src="./includes/ckeditor/ckeditor.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script src="./src/js/main.js"></script>
 
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> 
                            <img style="width: 50%;" class="m-4" src="./images/logoFtr.png" alt="" srcset="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


<section style="margin-top: 0%">
    <div class="container">

        <p class="float-right">
            <a href="approval.php" class="btn btn-sm text-primary btn-outline-link">
                Approval Management
            </a>
            <a href="admin.php" class="btn btn-sm text-primary btn-outline-link">
                Researchers List
            </a>

            <a href="http://free.aicte-india.org/its/view.php" class="btn btn-sm text-primary btn-outline-link">
                View Expert
            </a>

            <a href="index.php" class="btn btn-sm btn-outline-danger">
                Logout
            </a>
        </p>

        <div class="form-group">
            <label for="exampleInputEmail1">Search</label>
            <input type="text" placeholder="Document Title, Researcher, Approval, Category, Sub Category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <center>
            <button class="btn btn-primary">Search</button>
        </center>
        

    <br>
        <h3>
            Approval Management
        </h3>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Approver Full Name</th>
            <th scope="col">Category</th>
            <th scope="col">Details</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Raghav</td>
                <td>
                    Health, Wellness
                </td>
                <td>
                    <a href="./researcher.php" class="btn btn-link">View</a>
                    <a href="#!" data-toggle="modal" data-target="#exampleModal1" class="btn btn-link">Assign/Reassign</a>
                </td>

                <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="category" id="category">
										<option value="">- Select Your Field of Interest -</option>
										<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
										<option selected value="Health, Wellness">Health, Wellness</option>
										<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
										<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
										<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
										<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
									</select>
                                </div>

                                <div class="col">
                                    <select multiple class="form-controlborder border-dark" class="form-control" name="category_sub[]" id="category_sub">
                                        <option value="Anatomy, Physiology">Anatomy, Physiology</option>
                                        <option value="Surgery">Surgery</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Medical administration, Management">Medical administration, Management</option>
                                        <option value="Child care, Geriatry">Child care, Geriatry</option>
                                        <option value="Pharmacology">Pharmacology</option>
                                        <option value="Integrated health">Integrated health</option>
                                        <option value="Dietology">Dietology</option>
                                    </select>

                                    <script>
                                        $(document).ready(function() {
                                            $('#category_sub').multiselect({
                                                nonSelectedText: 'Select',
                                                enableFiltering: true,
                                                enableCaseInsensitiveFiltering: true,
                                                buttonWidth: '400px'
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
                </div>

                <td>
                   In Progress
                </td>

            </tr>
            <tr>
            <th scope="row">2</th>
                <td>Aditya</td>
                <td>
                    Health, Wellness
                </td>
                <td>
                    <a href="./researcher.php" class="btn btn-link">View</a>
                    <a href="#!" data-toggle="modal" data-target="#exampleModal1" class="btn btn-link">Assign/Reassign</a>
                </td>

                <td>
                   Sent for Final Approval
                </td>
                
            </tr>

            <tr>
            <th scope="row">3</th>
                <td>Prabhdeep</td>
                <td>
                    Indian Traditional Knowledge Base
                </td>
                <td>
                    <a href="./researcher.php" class="btn btn-link">View</a>
                    <a href="#!" data-toggle="modal" data-target="#exampleModal1" class="btn btn-link">Assign/Reassign</a>
                </td>

                <td>
                   Sent for Final Approval
                </td>
                
            </tr>
          
        </tbody>
        </table>
    </div>
</section>    
<br>
<br>






