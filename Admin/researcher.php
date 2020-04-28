<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<script src="./src/js/main.js"></script>

<style>
        .menu{
            width: 12rem;
            height: 4.5rem;
            background-color: #f4f4f4;
            color: #333;
            border: 1px solid #aaa;
            box-shadow: 2px 2px 2px #999;
            border-radius: 0.2rem;
            list-style: none;
            position: fixed;
        }
        .menu.off{
            top: -200%;
            left: -200%;
        }
        .menu-item{
            height: 1.5rem;
            line-height: 1.5rem;
            font-size: 1rem;
            font-weight: 100;
            padding: 0 1rem;
            cursor: pointer;
        }
        .menu-item:hover,
        .menu-item:active{
            color: #000;
            font-weight: 500;
        }
</style>

<body>

<!-- Button trigger modal -->
<img style="width: 10%;" class="m-4" src="./images/logoFtr.png" alt="" srcset="">

<section style="margin-top: 1%;">
<button id="modalforbtn" type="button" class="btn d-none btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mark for Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="#!">
            <label for="textarea">Note on Selected Text</label>
            <br>
            <label for="">
                <div id="allSelectedText">

                </div>
            </label>
            <textarea name="review" id="review" class="form-control" cols="30" rows="10"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

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
        <br><br>

        <p class="font-weight-bold">
            Reviewer Name: Rahul Garg Current Status: In Progress
        </p>
        <div class="card" >
            <div class="card-body">
                <!-- <button data-toggle="modal" data-target="#exampleModal1" class="btn btn-outline-primary float-right">Assign Category</button> -->
                
                <!-- Modal -->
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
										<option value="Health, Wellness">Health, Wellness</option>
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
                
                
                
                <h5 class="card-title">Expert Name: Rahul</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    example@gmil.com <br class="mb-2">
                    +91 8374 839 448 <br class="mb-2">
                    <a href="#!">Attached File Download</a>
                </h6>
                <p class="card-text text-dark">
                    <div id="box">
                        <span class="h1 font-weight-bold">
                            Pots and Craft Making
                        </span>
                        <br>
                        <span>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </span>
                        <hr>
                    </div>
                </p>
                <br>
                <a href="#" class="card-link">Reference URL</a>
                <a href="#" class="card-link">Publish Date: 10.02.2012</a>
                <a href="#" class="card-link">Associated Institute/Organization: Test Organization</a>
            </div>
        </div>
    </div>
</section>

<ul class="menu">
    <li class="menu-item" id="red">Mark For Review</li>
</ul>
<input type="hidden" value="" id="selectText">


<!-- Button trigger modal -->



<!-- Copy Text Selected User-->
<script>
    var selectTextField = document.getElementById("selectText");
    let selectedText = "";
    let f = 0;

    $("#exampleModal").on("hidden.bs.modal", function () {
        f = 0;
    });


    
    document.addEventListener('mouseup', function(){
        console.log(f);
        if (f == 0) {
            getSelectionText()
        }
    }, false)

    function getSelectionText(){
        if (window.getSelection){ // all modern browsers and IE9+
            selectedText = window.getSelection().toString();
            selectTextField.value = selectedText;
            f = 1;
            console.log(selectedText, f);
        }
    }
    
        let menu = null;
        document.addEventListener('DOMContentLoaded', function(){
            //make sure the right click menu is hidden
            menu = document.querySelector('.menu');
            menu.classList.add('off');
            
            //add the right click listener to the box
            let box = document.getElementById('box');
            box.addEventListener('contextmenu', showmenu);
            
            //add a listener for leaving the menu and hiding it
            menu.addEventListener('mouseleave', hidemenu);
            
            //add the listeners for the menu items
            addMenuListeners();
        });
        
        function addMenuListeners(){
            document.getElementById('red').addEventListener('click', setColour);
        }
        
        function setColour(ev){
            hidemenu();
            var text = selectTextField.value;
            console.log(text);
            $("#allSelectedText").html(text);
            f = 0;
            console.log(f);
            $("#modalforbtn").click();
        }
        
        function showmenu(ev){
            //stop the real right click menu
            ev.preventDefault(); 
            //show the custom menu
            console.log( ev.clientX, ev.clientY );
            menu.style.top = `${ev.clientY - 20}px`;
            menu.style.left = `${ev.clientX - 20}px`;
            menu.classList.remove('off');
        }
        
        function hidemenu(ev){
            menu.classList.add('off');
            menu.style.top = '-200%';
            menu.style.left = '-200%';
        }
</script>



</body>
</html>