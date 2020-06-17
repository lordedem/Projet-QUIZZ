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
            <a class="nav-link active rounded-0 color5" href="#" style="height: 10%;">Créer Admin</a>
            <a class="nav-link rounded-0 color5" href="listerJoueurs.php" style="height: 10%;">Lister Joueurs</a>
            <a class="nav-link rounded-0 color5" href="creerQuestions.php" style="height: 10%;">Créer Questions</a>
          </div>
        </div>

        <div class="container p-0 w-100 col-8 m-auto rounded shadow bg-white d-flex justify-content-center align-items-stretch" style="height: 90%;">
          <div class="bg-white col-8">
            <h3 class="w-100 m-0">S'inscrire</h3>
            <p class="w-100 m-0">Pour tester votre niveau de culture génerale</p>

            <form method="" action="" class="col-10 p-0">
              <div class="form-group m-0">
                <label for="formGroupExampleInput" class="m-0">Prénom</label>
                <input type="text" class="form-control " id="" placeholder="Entrez votre prénom" style="height: 50px;">
              </div>
              <div class="form-group m-0">
                <label for="formGroupExampleInput2" class="m-0">Nom</label>
                <input type="text" class="form-control" id="" placeholder="Entrez votre nom" style="height: 50px;">
              </div>
              <div class="form-group m-0">
                <label for="formGroupExampleInput" class="m-0">Login</label>
                <input type="text" class="form-control " id="" placeholder="Entrez votre login" style="height: 50px;">
              </div>
              <div class="form-group m-0">
                <label for="formGroupExampleInput2" class="m-0">Password</label>
                <input type="text" class="form-control" id="" placeholder="Entrez votre password" style="height: 50px;">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2" class="m-0">Confirmer Password</label>
                <input type="text" class="form-control" id="" placeholder="Confirmez votre password" style="height: 50px;">
              </div>
              <div class="w-100 d-block">
                <span class="d-inline text-dark float-left">Avatar</span>
                <a id="" class="d-inline btn bgcolor1 text-white font-weight-bold shadow-sm border-bgcolor1 float-right" href="#" role="button">Choisir un fichier</a>
              </div>

              <div class="mt-5 d-flex justify-content-center align-items-center">

                <button type="submit" name="" value="" class="btn bgcolor1 border-bgcolor1 text-white font-weight-bold shadow-sm">Créer compte</button>
              </div>
            </form>

          </div>
          <div class="bg-white col-4 pt-4">

            <div class="container bg-dark rounded-circle" style="height: 150px; width: 150px; border-color: #51bfd0; border-width: 10px;">

            </div>
            <p class="text-center w-100">Avatar du joueur</p>

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