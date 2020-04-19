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
            include_once '../src/dbh.php';
            $sql = "SELECT * FROM institutes;";
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
                    <th scope="col">Work Location/Institute</th>


                    <th scope="col">Expert Name</th>

                    <th scope="col">Expert Sub Category</th>

                    <th scope="col">Problem 1</th>
                    <th scope="col">Problem 2</th>
                    <th scope="col">Problem 3</th>
                    <th scope="col">Problem 4</th>
                    <th scope="col">Problem 5</th>
                    <th scope="col">Problem 6</th>
                    <th scope="col">Problem 7</th>
                    <th scope="col">Problem 8</th>
                    <th scope="col">Problem 9</th>
                    <th scope="col">Problem 10</th>

                    <th scope="col">Problem 11</th>
                    <th scope="col">Problem 12</th>
                    <th scope="col">Problem 13</th>
                    <th scope="col">Problem 14</th>
                    <th scope="col">Problem 15</th>
                    <th scope="col">Problem 16</th>
                    <th scope="col">Problem 17</th>
                    <th scope="col">Problem 18</th>
                    <th scope="col">Problem 19</th>
                    <th scope="col">Problem 20</th>
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


                        <td>'.$row['expert'].'</td>
                        <td>'.$row['expert_sub'].'</td>

                        <td>'.$row['problem1'].'</td>
                        <td>'.$row['problem2'].'</td>
                        <td>'.$row['problem3'].'</td>
                        <td>'.$row['problem4'].'</td>
                        <td>'.$row['problem5'].'</td>
                        <td>'.$row['problem6'].'</td>
                        <td>'.$row['problem7'].'</td>
                        <td>'.$row['problem8'].'</td>
                        <td>'.$row['problem9'].'</td>
                        <td>'.$row['problem10'].'</td>

                        <td>'.$row['problem11'].'</td>
                        <td>'.$row['problem12'].'</td>
                        <td>'.$row['problem13'].'</td>
                        <td>'.$row['problem14'].'</td>
                        <td>'.$row['problem15'].'</td>
                        <td>'.$row['problem16'].'</td>
                        <td>'.$row['problem17'].'</td>
                        <td>'.$row['problem18'].'</td>
                        <td>'.$row['problem19'].'</td>
                        <td>'.$row['problem20'].'</td>

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