<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bizcon</title>
    <link rel="icon" href="img/favicon.png">

    <script src="./includes/ckeditor/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js" integrity="sha256-qoj3D1oB1r2TAdqKTYuWObh01rIVC1Gmw9vWp1+q5xw=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" integrity="sha256-7stu7f6AB+1rx5IqD8I+XuIcK4gSnpeGeSjqsODU+Rk=" crossorigin="anonymous" />
    <script src="./src/js/main.js"></script>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="css1/multi.select.css" rel="stylesheet" type="text/css">
 
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
            <!-- <a href="approval.php" class="btn btn-sm text-primary btn-outline-link">
                Approval Management
            </a> -->
            <a href="reviewer.php" class="btn btn-sm text-primary btn-outline-link">
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
        


        <h3>
            Researcher Projects
        </h3>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Researcher Full Name</th>
            <th scope="col">Project Title</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rahul</td>
                <td>Pots and Craft Making</td>

                <td>
                    <a href="./researcher.php" class="btn btn-link">View</a>
                </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Aditya</td>
                <td>Yoga Benefits</td>

                <td>
                <a href="./researcher.php" class="btn btn-link">View</a>
                </td>
                
            </tr>
          
        </tbody>
        </table>
    </div>
</section>    
<br>
<br>
<script>
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
            let clr = ev.target.id;
            selectedText = window.getSelection().toString();
            console.log(selectedText);
            // document.getElementById('box').style.backgroundColor = clr;
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
<script type="text/javascript">
$(document).ready(function() {
    $('#category_sub').multiselect();
});
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="js1/multi.select.js"></script>


<script>
$('.multi').multi_select({
  selectColor: 'purple',
  selectSize: 'small',
  selectText: 'Select Multiple Sub Category',
  duration: 300,
  easing: 'slide',
  listMaxHeight: 300,
  selectedCount: 2,
  sortByText: true,
  fillButton: true,
  data: {
    "BD": "Anatomy, Physiology",
    "BE": "Surgery",
    "BF": "Medicine",
    "BG": "Medical administration, Management",
    "BA": "Medical administration, Management",
    "BB": "Pharmacology",
    "WF": "Integrated health",
    "BL": "Dietology"
  },
  onSelect: function(values) {
    console.log('return values: ', values);
  }
  });
  $('#get_values').on('click', function(event) {
            console.log($('#multi').multi_select('getSelectedValues'));
    $('.data-display').remove();
    var json = { items: $('#multi').multi_select('getSelectedValues') };
    if (json.items.length) {
      var ul = $('<ul>', { 'class': 'data-display' }).appendTo('body');
      $(json.items).each(function(index, item) {
        ul.append(
          '<li style="display: block;">' + item + '</li>'
        );
      });
    }
  })
$('#clear_values').on('click', function(event) {
  $('#multi').multi_select('clearValues');
  $('.data-display').slideUp(300, function() {
    $(this).remove()
  })
})
</script>