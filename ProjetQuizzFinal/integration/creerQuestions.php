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



            <div class="position-absolute row container w-100 m-0 d-flex justify-content-center align-items-center col-12 shadow-sm bg-secondary border-none" style="top: 9%; left: 0; right: 0; bottom: 0;">

                <div class="position-relative container p-0 w-100 m-auto col-3 rounded shadow bg-white" style="height: 60%;">
                    <div class="container w-100 bg-white d-flex align-items-center justify-content-center" style="height: 50%; background: linear-gradient(#fff, #51bfd0);">
                        <div class="container bg-dark rounded-circle m-2" style="height: 100px; width: 100px; border-color: #51bfd0; border-width: 10px;">

                        </div>
                        <h4 class="font-weight-bold text-white m-0 p-0">UserId</h4>
                    </div>
                    <div class="nav flex-column nav-pills m-auto" role="tablist" aria-orientation="vertical">
                        <a class="nav-link rounded-0 color5" href="ListerQuestions.php" style="height: 10%;">Lister Questions</a>
                        <a class="nav-link rounded-0 color5" href="creationCompteAdmin.php" style="height: 10%;">Créer Admin</a>
                        <a class="nav-link rounded-0 color5" href="listerJoueurs.php" style="height: 10%;">Lister Joueurs</a>
                        <a class="nav-link active rounded-0 color5" href="#" style="height: 10%;">Créer Questions</a>
                    </div>
                </div>

                <div class="container p-2 w-100 col-8 m-auto rounded shadow bg-white d-flex flex-column justify-content-center align-items-stretch" style="height: 90%;">
                    <h2 class="font-weight-bold text-center mb-3" style=" font-size:1.4em; color:#48d1cc;"> PARAMETRER VOTRE QUESTION</h2>

                    <form method="post" action="" class=" rounded p-3" style="border:solid 1px #48d1cc;">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label m-auto" style="font-size:0.9em;"> Questions </label>
                            <div class="col-sm-10">
                                <input type="text" name="" id="" class="form-control rounded-0" style=" height:70px; box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Nbre de Points </label>
                            <select class="custom-select col-sm-2 rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">3</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-secondary font-weight-bold  col-form-label" style="font-size:0.9em;"> Types de réponses </label>
                            <select class="custom-select col-sm-7 rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                                <option selected>Donnez le type de réponse</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="col-sm-1">
                                <img src="images/Icônes/ic-ajout-réponse.png" alt="ajout reponse" style="margin-left:-10px;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Réponse1 </label>
                            <div class="col-sm-7">
                                <input type="text" name="" id="" class="form-control rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-sm-1 m-auto">
                                <div class="" style="background-color:#f5f5f5; width:20px; height:20px; box-shadow:1px 1px #c0c0c0">

                                </div>
                            </div>
                            <div class="col-sm-1 m-auto ">
                                <div class=" rounded-circle" style="background-color:#f5f5f5; width:20px; height:20px; box-shadow:1px 1px #c0c0c0">

                                </div>
                            </div>
                            <div class="col-sm-1 m-auto">
                                <img src="images/Icônes/ic-supprimer.png" alt="supprimer">
                            </div>
                        </div>
                        <div class="row " style="margin-top:100px;">
                            <div class="col-sm-9"> </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary rounded-0" style="background-color:#48d1cc; border:none;">Enregistrer</button>
                            </div>
                        </div>
                    </form>
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