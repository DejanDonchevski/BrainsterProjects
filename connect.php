<?php

    if(isset($_POST['hire_our_student'])){
        $connection = mysqli_connect("127.0.0.1", "root", "", "project01");
        $fullname = $_POST['fullname'];
        $company_name = $_POST['company_name'];
        $contact_email = $_POST['contact_email'];
        $contact_mobile = $_POST['contact_mobile'];
        $student_course = $_POST['student_course'];
        $sql = "INSERT INTO hire_our_student (fullname, company_name, contact_email, contact_mobile, student_course) VALUES ('$fullname', '$company_name', '$contact_email', '$contact_mobile', '$student_course');";
        $rs = mysqli_query($connection, $sql);
        if($rs) {
            header("location: clients.php");
        } else {
            echo '<script>alert("There was a problem while saving the data")</script>';
            header("location: form.html");
        }

    } else {
        header("location: index.html");
    }

?>