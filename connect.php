<?php

    if(isset($_POST['hire_student'])){
        $connection = mysqli_connect("localhost", "root", "root", "project01");
        $namesurname = $_POST['namesurname'];
        $company_name = $_POST['company_name'];
        $email_contact = $_POST['email_contact'];
        $contact_phone = $_POST['contact_phone'];
        $student_course = $_POST['student_course'];
        $sql = "INSERT INTO hire_student (Ime_Prezime, Kontakt_Mail, Ime_na_Kompanija, Kontakt_Telefon, type_of_student) VALUES ('$namesurname', '$company_name', '$email_contact', '$contact_phone', '$student_course');";
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