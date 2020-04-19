<?php
include '../../src/dbh.php';

if (isset($_POST['btnSubmit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $expert = mysqli_real_escape_string($conn, $_POST['expert']);

    $worked_as = mysqli_real_escape_string($conn, $_POST['worked_as']);
    $work_location = mysqli_real_escape_string($conn, $_POST['work_location']);



    $problem1 = mysqli_real_escape_string($conn, $_POST['problem1']);
    $problem2 = mysqli_real_escape_string($conn, $_POST['problem2']);
    $problem3 = mysqli_real_escape_string($conn, $_POST['problem3']);
    $problem4 = mysqli_real_escape_string($conn, $_POST['problem4']);
    $problem5 = mysqli_real_escape_string($conn, $_POST['problem5']);
    $problem6 = mysqli_real_escape_string($conn, $_POST['problem6']);
    $problem7 = mysqli_real_escape_string($conn, $_POST['problem7']);
    $problem8 = mysqli_real_escape_string($conn, $_POST['problem8']);
    $problem9 = mysqli_real_escape_string($conn, $_POST['problem9']);
    $problem10 = mysqli_real_escape_string($conn, $_POST['problem10']);


    $problem11 = mysqli_real_escape_string($conn, $_POST['problem11']);
    $problem12 = mysqli_real_escape_string($conn, $_POST['problem12']);
    $problem13 = mysqli_real_escape_string($conn, $_POST['problem13']);
    $problem14 = mysqli_real_escape_string($conn, $_POST['problem14']);
    $problem15 = mysqli_real_escape_string($conn, $_POST['problem15']);
    $problem16 = mysqli_real_escape_string($conn, $_POST['problem16']);
    $problem17 = mysqli_real_escape_string($conn, $_POST['problem17']);
    $problem18 = mysqli_real_escape_string($conn, $_POST['problem18']);
    $problem19 = mysqli_real_escape_string($conn, $_POST['problem19']);
    $problem20 = mysqli_real_escape_string($conn, $_POST['problem20']);

    $expert_sub = mysqli_real_escape_string($conn, $_POST['expert_sub']);


    $sql = "INSERT INTO `institutes` (`name`, `email`, `phone`, `worked_as`, `work_location`, `expert`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`, `problem6`, `problem7`, `problem8`, `problem9`, `problem10`, `problem11`, `problem12`, `problem13`, `problem14`, `problem15`, `problem16`, `problem17`, `problem18`, `problem19`, `problem20`, `expert_sub`) VALUES ('$name', '$email', '$phone', '$worked_as', '$work_location', '$expert', '$problem1', '$problem2', '$problem3', '$problem4', '$problem5', '$problem6', '$problem7', '$problem8', '$problem9', '$problem10', '$problem11', '$problem12', '$problem13', '$problem14', '$problem15', '$problem16', '$problem17', '$problem18', '$problem19', '$problem20', '$expert_sub');";
    
    mysqli_query($conn, $sql);
    header("Location: ../home.php?submit=success");

}


if (isset($_POST['btnSubmit2'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $expert = mysqli_real_escape_string($conn, $_POST['expert']);

    $worked_as = mysqli_real_escape_string($conn, $_POST['worked_as']);
    $work_location = mysqli_real_escape_string($conn, $_POST['work_location']);


    $problem1 = mysqli_real_escape_string($conn, $_POST['problem1']);
    $problem2 = mysqli_real_escape_string($conn, $_POST['problem2']);
    $problem3 = mysqli_real_escape_string($conn, $_POST['problem3']);
    $problem4 = mysqli_real_escape_string($conn, $_POST['problem4']);
    $problem5 = mysqli_real_escape_string($conn, $_POST['problem5']);
    $problem6 = mysqli_real_escape_string($conn, $_POST['problem6']);
    $problem7 = mysqli_real_escape_string($conn, $_POST['problem7']);
    $problem8 = mysqli_real_escape_string($conn, $_POST['problem8']);
    $problem9 = mysqli_real_escape_string($conn, $_POST['problem9']);
    $problem10 = mysqli_real_escape_string($conn, $_POST['problem10']);


    $problem11 = mysqli_real_escape_string($conn, $_POST['problem11']);
    $problem12 = mysqli_real_escape_string($conn, $_POST['problem12']);
    $problem13 = mysqli_real_escape_string($conn, $_POST['problem13']);
    $problem14 = mysqli_real_escape_string($conn, $_POST['problem14']);
    $problem15 = mysqli_real_escape_string($conn, $_POST['problem15']);
    $problem16 = mysqli_real_escape_string($conn, $_POST['problem16']);
    $problem17 = mysqli_real_escape_string($conn, $_POST['problem17']);
    $problem18 = mysqli_real_escape_string($conn, $_POST['problem18']);
    $problem19 = mysqli_real_escape_string($conn, $_POST['problem19']);
    $problem20 = mysqli_real_escape_string($conn, $_POST['problem20']);

    $expert_sub = mysqli_real_escape_string($conn, $_POST['expert_sub']);


    $sql = "INSERT INTO `institutes` (`name`, `email`, `phone`, `worked_as`, `work_location`, `expert`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`, `problem6`, `problem7`, `problem8`, `problem9`, `problem10`, `problem11`, `problem12`, `problem13`, `problem14`, `problem15`, `problem16`, `problem17`, `problem18`, `problem19`, `problem20`, `expert_sub`) VALUES ('$name', '$email', '$phone', '$worked_as', '$work_location', '$expert', '$problem1', '$problem2', '$problem3', '$problem4', '$problem5', '$problem6', '$problem7', '$problem8', '$problem9', '$problem10', '$problem11', '$problem12', '$problem13', '$problem14', '$problem15', '$problem16', '$problem17', '$problem18', '$problem19', '$problem20', '$expert_sub');";

    
    mysqli_query($conn, $sql);
    header("Location: ../mobile.php?submit=success");

}