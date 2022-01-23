<!DOCTYPE html>
<html>
    <head>
        <title>Brainster Labs</title>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">

        <!-- Latest compiled and minified Bootstrap 4.4.1 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Latest Font-Awesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
        
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-yellow px-5 py-3 border-bottom">
            <a class="navbar-brand text-center" href="form.html"><img src="./img/Logo.png" alt="logoimage" class="img-50 mb-2"><p class="text-dark text-uppercase font-weight-bold mb-0 x-small">Brainster</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark" href="https://brainster.co/marketing/">Академија за маркетинг</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark" href="https://brainster.co/full-stack/">Академија за програмирање</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark" href="https://brainster.co/data-science/">Академија за data science</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link font-weight-bold text-dark" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="btn text-white bg-red font-weight-bold" href="#">Вработи наш студент</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container-fluid bg-dark-yellow pb-250">
            <div class="d-flex justify-content-center align-items-center py-5">
                <p class="h1 text-dark font-weight-bold mb-0 py-5">Вработи студенти</p>
            </div>
            <div class="container table-responsive custom-b-padding pb-200 pb-md-0">
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

        $connection = mysqli_connect("localhost", "root", "root", "project01");
        $query = mysqli_query($connection, "SELECT * FROM hire_student");
        if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_assoc($query)){
        echo '<tr>
                <th scope="row">'.$row["id"].'</th>
                <td>'.$row["Ime_Prezime"].'</td>
                <td>'.$row["Kontakt_Mail"].'</td>
                <td>'.$row["Ime_na_Kompanija"].'</td>
                <td>'.$row["Kontakt_Telefon"].'</td>
                <td>'.$row["type_of_student"].'</td>
              </tr>';
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