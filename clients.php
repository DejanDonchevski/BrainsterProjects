<!DOCTYPE html>
<html>
    <head>
        <title>Brainster Labs</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="./style.css">
        <script src="./script.js"></script>

        <!-- Latest compiled and minified Bootstrap 4.4.1 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Latest Font-Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
        
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-yellow px-5 py-3">
            <a class="navbar-brand text-center" href="./index.html"><img src="./img/Logo.png" alt="logoimage" class="img-50 mb-2"><p class="text-dark text-uppercase font-weight-bold mb-0 x-small">Brainster</p></a>
            <div class="collapse navbar-collapse nav-link" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark nav-animation pb-0 pl-0 pr-0" href="https://brainster.co/marketing/">Академија за маркетинг</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark nav-animation pb-0 pl-0 pr-0" href="https://brainster.co/full-stack/">Академија за програмирање</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark nav-animation pb-0 pl-0 pr-0" href="https://brainster.co/data-science/">Академија за data science</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark nav-animation pb-0 pl-0 pr-0" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="btn text-white bg-red font-weight-bold align-items-center btn-animation" href="./form.html">Вработи наш студент</a>
                    </li>
                </ul>
            </div>

            <div class="hamburger">
                <div onclick="showSidebar()" class="toggle-nav mr-4">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="sidebar">
                    <a onclick="closeSidebar()"><i class="fas fa-times fa-2x"></i></a>
                    <a class="font-13 text-white ml-3 mt-5" href="https://brainster.co/marketing/" target="_blank">Академија за маркетинг</a>
                    <a class="font-13 text-white ml-3" href="https://brainster.co/full-stack/" target="_blank">Академија за програмирање</a>
                    <a class="font-13 text-white ml-3" href="https://brainster.co/data-science/" target="_blank">Академија за data science</a>
                    <a class="font-13 text-white ml-3" href="https://brainster.co/graphic-design/" target="_blank">Академија за дизајн</a>

                    <div class="sidebar-button">
                        <a href="./form.html" class="btn bg-red font-weight-bold py-1 px-2 ml-3">Вработи наш студент</a>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container-fluid bg-yellow">
            <div class="d-flex justify-content-center align-items-center py-5">
                <p class="h1 text-dark font-weight-bold mb-0 py-5">Вработи студенти</p>
            </div>
            <div class="container table-responsive custom-b-padding pb-100 pb-md-0">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fas fa-database"></i></th>
                            <th scope="col">Име и презиме</th>
                            <th scope="col">Име на компанија</th>
                            <th scope="col">Контакт имејл</th>
                            <th scope="col">Контакт телефон</th>
                            <th scope="col">Тип на студент</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $connection = mysqli_connect("127.0.0.1", "root", "", "project01");
                            $query = mysqli_query($connection, "SELECT * FROM hire_our_student");
                            if(mysqli_num_rows($query)>0){
                                while($row = mysqli_fetch_assoc($query)){
                                    echo '
                                    <tr>
                                    <th scope="row">'.$row["id"].'</th>
                                    <td>'.$row["fullname"].'</td>
                                    <td>'.$row["company_name"].'</td>
                                    <td>'.$row["contact_email"].'</td>
                                    <td>'.$row["contact_mobile"].'</td>
                                    <td>'.$row["student_course"].'</td>
                                    </tr>
                                    ';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="footer bg-grey text-center c-white">
            <p class="font-weight-bold py-3 mb-0">Изработено со &#10084 од студентите на Brainster.</p>
        </div>

    </body>
</html>