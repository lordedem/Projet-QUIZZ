<!doctype html>
<html lang="en">

<head>
    <title>Création compte administrateur - Quizz</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="colors.css">
</head>

<body style="background-image: url(images/img-bg.jpg); background-repeat: no-repeat; background-attachment:fixed; background-size:cover; background-position-x:center; background-position-y:center;">


    <div class="p-0 container-fluid ">
        <div class="position-absolute opacity-down fixed-top fixed-bottom bgcolor1 w-100" style="z-index: 0;">

        </div>

        <div class="d-block w-100 col-12 bg-dark text-white" style="z-index:1;">
            <h1 class="text-center font-weight-bolder p-2">Le plaisir de jouer</h1>
        </div>

        <div class="container p-0 d-flex align-items-start col-11 fixed-bottom fixed-top rounded shadow-sm bg-white" style="margin-top: 70px; margin-bottom: 10px;">

            <div class="position-relative w-100 d-flex justify-content-center align-items-center bgcolor1">
                <div class="col-9 float-right">
                    <h3 class="text-white font-weight-bold float-right m-0 p-3">CREER ET PARAMETRER VOS QUIZZ</h3>
                </div>
                <div class="col-3">
                    <button name="" value="" type="submit" class="btn float-right text-white bgcolor3 shadow-sm" style="text-shadow: 1px 1px 2px black;">Deconnexion</button>
                </div>
            </div>



            <div class="position-absolute row container w-100 m-0 d-flex justify-content-center align-items-center col-12 shadow-sm bgcolor7 border-none" style="top: 9%; left: 0; right: 0; bottom: 0;">

                <div class="position-relative container p-0 w-100 m-auto col-3 rounded shadow bg-white" style="height: 60%;">
                    <div class="container w-100 bg-white d-flex align-items-center justify-content-center" style="height: 50%; background: linear-gradient(#fff, #51bfd0);">
                        <div class="container bg-dark rounded-circle m-2" style="height: 100px; width: 100px; border-color: #51bfd0; border-width: 10px;">

                        </div>
                        <h4 class="font-weight-bold text-white m-0 p-0">UserId</h4>
                    </div>
                    <div class="nav flex-column nav-pills m-auto" role="tablist" aria-orientation="vertical">
                        <a class="nav-link rounded-0 color5" href="ListerQuestions.php" style="height: 10%;">Lister Questions</a>
                        <a class="nav-link rounded-0 color5" href="creationCompteAdmin.php" style="height: 10%;">Créer Admin</a>
                        <a class="nav-link active rounded-0 color5" href="#" style="height: 10%;">Lister Joueurs</a>
                        <a class="nav-link rounded-0 color5" href="creerQuestions.php" style="height: 10%;">Créer Questions</a>
                    </div>
                </div>

                <div class="container p-3 w-100 color5 col-8 m-auto rounded shadow bg-white d-flex flex-column justify-content-space-between align-items-stretch" style="height: 95%;">
                    <h3 class="w-10 text-center mt-0 font-weight-bold font-italic">LISTE DES JOUEURS PAR SCORE</h3>
                    <div class="m-2 p-2 h-75 border border-primary rounded" style="font-size: 15pt;">
                        <table class="table table-borderless m-0 p-0 m-auto p-auto w-100">
                            <thead>
                                <tr>
                                    <th scope="" class="p-0">Nom</th>
                                    <th scope="" class="p-0">Prénom</th>
                                    <th scope="" class="p-0">Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-0">DIATTA</td>
                                    <td class="p-0">Ibou</td>
                                    <td class="p-0">1022 pts</td>
                                </tr>
                                <tr>
                                    <td class="p-0">NIANG</td>
                                    <td class="p-0">Aly</td>
                                    <td class="p-0">963 pts</td>
                                </tr>
                                <tr>
                                    <td class="p-0">MBAYE</td>
                                    <td class="p-0">Saliou</td>
                                    <td class="p-0">877 pts</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="w-100">
                        <button type="button" name="" value="" class="btn bgcolor3  float-right border-bgcolor1 text-white font-weight-bold shadow-sm">Suivant</button>
                    </div>

                </div>

            </div>



        </div>

    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>