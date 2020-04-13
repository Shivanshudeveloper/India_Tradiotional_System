<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>AICTE - Indian Traditional System</title>
  </head>
  <body>

  <section>
  
  
 
        <?php
            include_once './src/dbh.php';
            $sql = "SELECT * FROM indian_system;";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            
            echo '
            <center class="mt-4">
                <h2>Total Registered: '.$resultChk.'</h2>
            </center>
            <table class="table m-2">
            <thead class="thead-light">
                <tr>
                    <th scope="col">SLno</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Worked As</th>
                    <th scope="col">Work Location</th>
                    <th scope="col">Past Research Interest</th>
                    <th scope="col">Past Research Publication</th>
                    <th scope="col">Past Research Description</th>
                    <th scope="col">Past Research Publication URL</th>
                    <th scope="col">Past Research Video URL</th>
                    <th scope="col">Past Expert 1 Name</th>
                    <th scope="col">Past Expert 1 Email</th>
                    <th scope="col">Past Expert 1 Phone</th>
                    <th scope="col">Past Expert 1 Role</th>
                    <th scope="col">Past Expert 2 Name</th>
                    <th scope="col">Past Expert 2 Email</th>
                    <th scope="col">Past Expert 2 Phone</th>
                    <th scope="col">Past Expert 2 Role</th>
                    <th scope="col">Present Research Interest</th>
                    <th scope="col">Present Research Publication</th>
                    <th scope="col">Present Research Description</th>
                    <th scope="col">Present Research Publication URL</th>
                    <th scope="col">Present Research Video URL</th>
                    <th scope="col">Present Expert 1 Name</th>
                    <th scope="col">Present Expert 1 Email</th>
                    <th scope="col">Present Expert 1 Phone</th>
                    <th scope="col">Present Expert 1 Role</th>
                    <th scope="col">Present Expert 2 Name</th>
                    <th scope="col">Present Expert 2 Email</th>
                    <th scope="col">Present Expert 2 Phone</th>
                    <th scope="col">Present Expert 2 Role</th>
                    <th scope="col">Future Research Field Interest</th>
                    <th scope="col">Future Research Any Other</th>
                    <th scope="col">Future Research Description</th>
                </tr>
            </thead>
            <tbody>
            ';



            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['worked_as'].'</td>
                        <td>'.$row['work_location'].'</td>
                        <td>'.$row['past_research_field_interest'].'</td>
                        <td>'.$row['past_publication_title'].'</td>
                        <td>'.$row['past_description'].'</td>
                        <td>'.$row['past_publication_url'].'</td>
                        <td>'.$row['past_video_url'].'</td>
                        <td>'.$row['past_expert_name'].'</td>
                        <td>'.$row['past_expert_email'].'</td>
                        <td>'.$row['past_expert_phone'].'</td>
                        <td>'.$row['past_expert_role'].'</td>
                        <td>'.$row['past_expert2_name'].'</td>
                        <td>'.$row['past_expert2_email'].'</td>
                        <td>'.$row['past_expert2_phone'].'</td>
                        <td>'.$row['past_expert2_role'].'</td>
                        <td>'.$row['present_research_field_interest'].'</td>
                        <td>'.$row['present_publication_title'].'</td>
                        <td>'.$row['present_description'].'</td>
                        <td>'.$row['present_publication_url'].'</td>
                        <td>'.$row['present_video_url'].'</td>
                        <td>'.$row['present_expert_name'].'</td>
                        <td>'.$row['present_expert_email'].'</td>
                        <td>'.$row['present_expert_phone'].'</td>
                        <td>'.$row['present_expert_role'].'</td>
                        <td>'.$row['present_expert2_name'].'</td>
                        <td>'.$row['present_expert2_email'].'</td>
                        <td>'.$row['present_expert2_phone'].'</td>
                        <td>'.$row['present_expert2_role'].'</td>
                        <td>'.$row['future_research_field_interest'].'</td>
                        <td>'.$row['future_any_other'].'</td>
                        <td>'.$row['description_future'].'</td>
                    </tr>
                ';
            }
        ?>
            
        </tbody>
    </table>
  
  
  </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>