<?php
include './dbh.php';

if (isset($_POST['btnSubmit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $worked_as = mysqli_real_escape_string($conn, $_POST['worked_as']);
    $work_location = mysqli_real_escape_string($conn, $_POST['work_location']);
    $past_research_field_interest = mysqli_real_escape_string($conn, $_POST['past_research_field_interest']);
    $past_publication_title = mysqli_real_escape_string($conn, $_POST['past_publication_title']);
    $past_description = mysqli_real_escape_string($conn, $_POST['past_description']);
    $past_publication_url = mysqli_real_escape_string($conn, $_POST['past_publication_url']);
    $past_video_url = mysqli_real_escape_string($conn, $_POST['past_video_url']);
    $past_expert_name = mysqli_real_escape_string($conn, $_POST['past_expert_name']);
    $past_expert_email = mysqli_real_escape_string($conn, $_POST['past_expert_email']);
    $past_expert_phone = mysqli_real_escape_string($conn, $_POST['past_expert_phone']);
    $past_expert_role = mysqli_real_escape_string($conn, $_POST['past_expert_role']);
    $past_expert2_name = mysqli_real_escape_string($conn, $_POST['past_expert2_name']);
    $past_expert2_email = mysqli_real_escape_string($conn, $_POST['past_expert2_email']);
    $past_expert2_phone = mysqli_real_escape_string($conn, $_POST['past_expert2_phone']);
    $past_expert2_role = mysqli_real_escape_string($conn, $_POST['past_expert2_role']);
    $present_research_field_interest = mysqli_real_escape_string($conn, $_POST['present_research_field_interest']);
    $present_publication_title = mysqli_real_escape_string($conn, $_POST['present_publication_title']);
    $present_description = mysqli_real_escape_string($conn, $_POST['present_description']);
    $present_publication_url = mysqli_real_escape_string($conn, $_POST['present_publication_url']);
    $present_video_url = mysqli_real_escape_string($conn, $_POST['present_video_url']);
    $present_expert_name = mysqli_real_escape_string($conn, $_POST['present_expert_name']);
    $present_expert_email = mysqli_real_escape_string($conn, $_POST['present_expert_email']);
    $present_expert_phone = mysqli_real_escape_string($conn, $_POST['present_expert_phone']);
    $present_expert_role = mysqli_real_escape_string($conn, $_POST['present_expert_role']);
    $present_expert2_name = mysqli_real_escape_string($conn, $_POST['present_expert2_name']);
    $present_expert2_email = mysqli_real_escape_string($conn, $_POST['present_expert2_email']);
    $present_expert2_phone = mysqli_real_escape_string($conn, $_POST['present_expert2_phone']);
    $present_expert2_role = mysqli_real_escape_string($conn, $_POST['present_expert2_role']);
    $future_research_field_interest = mysqli_real_escape_string($conn, $_POST['future_research_field_interest']);
    $future_anyOther = mysqli_real_escape_string($conn, $_POST['future_anyOther']);
    $description_future = mysqli_real_escape_string($conn, $_POST['description_future']);

    $sql = "INSERT INTO indian_system (name, email, phone, worked_as, work_location, past_research_field_interest, past_publication_title, past_description, past_publication_url, past_video_url, past_expert_name, past_expert_email, past_expert_phone, past_expert_role, past_expert2_name, past_expert2_email, past_expert2_phone, past_expert2_role, present_research_field_interest, present_publication_title, present_description, present_publication_url, present_video_url, present_expert_name, present_expert_email, present_expert_phone, present_expert_role, present_expert2_name, present_expert2_email, present_expert2_phone, present_expert2_role, future_research_field_interest, future_any_other, description_future)
     VALUES ('$name', '$email', '$phone', '$worked_as', '$work_location', '$past_research_field_interest', '$past_publication_title', '$past_description', '$past_publication_url', '$past_video_url', '$past_expert_name', '$past_expert_email', '$past_expert_phone', '$past_expert_role',
     '$past_expert2_name', '$past_expert2_email', '$past_expert2_phone', '$past_expert2_role', '$present_research_field_interest', '$present_publication_title', '$present_description', '$present_publication_url', '$present_video_url', '$present_expert_name', '$present_expert_email',
     '$present_expert_phone', '$present_expert_role', '$present_expert2_name', '$present_expert2_email', '$present_expert2_phone', '$present_expert2_role', '$future_research_field_interest', '$future_anyOther' , '$description_future');";

    mysqli_query($conn, $sql);

    header("Location: ../home.php?submit=success");

}


<?php
include './dbh.php';

if (isset($_POST['btnSubmit2'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $worked_as = mysqli_real_escape_string($conn, $_POST['worked_as']);
    $work_location = mysqli_real_escape_string($conn, $_POST['work_location']);
    $past_research_field_interest = mysqli_real_escape_string($conn, $_POST['past_research_field_interest']);
    $past_publication_title = mysqli_real_escape_string($conn, $_POST['past_publication_title']);
    $past_description = mysqli_real_escape_string($conn, $_POST['past_description']);
    $past_publication_url = mysqli_real_escape_string($conn, $_POST['past_publication_url']);
    $past_video_url = mysqli_real_escape_string($conn, $_POST['past_video_url']);
    $past_expert_name = mysqli_real_escape_string($conn, $_POST['past_expert_name']);
    $past_expert_email = mysqli_real_escape_string($conn, $_POST['past_expert_email']);
    $past_expert_phone = mysqli_real_escape_string($conn, $_POST['past_expert_phone']);
    $past_expert_role = mysqli_real_escape_string($conn, $_POST['past_expert_role']);
    $past_expert2_name = mysqli_real_escape_string($conn, $_POST['past_expert2_name']);
    $past_expert2_email = mysqli_real_escape_string($conn, $_POST['past_expert2_email']);
    $past_expert2_phone = mysqli_real_escape_string($conn, $_POST['past_expert2_phone']);
    $past_expert2_role = mysqli_real_escape_string($conn, $_POST['past_expert2_role']);
    $present_research_field_interest = mysqli_real_escape_string($conn, $_POST['present_research_field_interest']);
    $present_publication_title = mysqli_real_escape_string($conn, $_POST['present_publication_title']);
    $present_description = mysqli_real_escape_string($conn, $_POST['present_description']);
    $present_publication_url = mysqli_real_escape_string($conn, $_POST['present_publication_url']);
    $present_video_url = mysqli_real_escape_string($conn, $_POST['present_video_url']);
    $present_expert_name = mysqli_real_escape_string($conn, $_POST['present_expert_name']);
    $present_expert_email = mysqli_real_escape_string($conn, $_POST['present_expert_email']);
    $present_expert_phone = mysqli_real_escape_string($conn, $_POST['present_expert_phone']);
    $present_expert_role = mysqli_real_escape_string($conn, $_POST['present_expert_role']);
    $present_expert2_name = mysqli_real_escape_string($conn, $_POST['present_expert2_name']);
    $present_expert2_email = mysqli_real_escape_string($conn, $_POST['present_expert2_email']);
    $present_expert2_phone = mysqli_real_escape_string($conn, $_POST['present_expert2_phone']);
    $present_expert2_role = mysqli_real_escape_string($conn, $_POST['present_expert2_role']);
    $future_research_field_interest = mysqli_real_escape_string($conn, $_POST['future_research_field_interest']);
    $future_anyOther = mysqli_real_escape_string($conn, $_POST['future_anyOther']);
    $description_future = mysqli_real_escape_string($conn, $_POST['description_future']);

    $sql = "INSERT INTO indian_system (name, email, phone, worked_as, work_location, past_research_field_interest, past_publication_title, past_description, past_publication_url, past_video_url, past_expert_name, past_expert_email, past_expert_phone, past_expert_role, past_expert2_name, past_expert2_email, past_expert2_phone, past_expert2_role, present_research_field_interest, present_publication_title, present_description, present_publication_url, present_video_url, present_expert_name, present_expert_email, present_expert_phone, present_expert_role, present_expert2_name, present_expert2_email, present_expert2_phone, present_expert2_role, future_research_field_interest, future_any_other, description_future)
     VALUES ('$name', '$email', '$phone', '$worked_as', '$work_location', '$past_research_field_interest', '$past_publication_title', '$past_description', '$past_publication_url', '$past_video_url', '$past_expert_name', '$past_expert_email', '$past_expert_phone', '$past_expert_role',
     '$past_expert2_name', '$past_expert2_email', '$past_expert2_phone', '$past_expert2_role', '$present_research_field_interest', '$present_publication_title', '$present_description', '$present_publication_url', '$present_video_url', '$present_expert_name', '$present_expert_email',
     '$present_expert_phone', '$present_expert_role', '$present_expert2_name', '$present_expert2_email', '$present_expert2_phone', '$present_expert2_role', '$future_research_field_interest', '$future_anyOther' , '$description_future');";

    mysqli_query($conn, $sql);

    header("Location: ../mobile.php?submit=success");

}