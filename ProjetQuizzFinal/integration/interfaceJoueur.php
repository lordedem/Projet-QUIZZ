<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
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
                    <div class="float-left d-flex flex-column">
                        <div class="container bg-dark rounded-circle mt-1" style="height: 40px; width: 40px; border-color: #51bfd0; border-width: 10px;">

                        </div>
                        <p class="text-white">UserId</p>
                    </div>
                    <h4 class="text-white font-weight-bold text-center float-right my-2 p-auto">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ<br />JOUEZ ET TESTEZ VOTRE NIVEAU DE CULTURE GENERALE</h4>
                </div>
                <div class="col-3">
                    <form action="" method="post">
                        <button name="" value="" type="submit" class="btn float-right text-white bgcolor3 shadow-sm mb-2" style="text-shadow: 1px 1px 2px black;">Deconnexion</button>
                    </form>
                </div>
            </div>



            <div class="position-absolute row container w-100 m-0 d-flex justify-content-center align-items-center col-12 shadow-sm bgcolor7 border-none" style="top: 13%; left: 0; right: 0; bottom: 0;">

                <div class="container p-3 w-100 color5 col-12 m-auto rounded shadow bg-white d-flex flex-row justify-content-space-between align-items-stretch" style="height: 95%;">

                    <div class="container m-2 p-2 w-75 h-100 border border-primary rounded" style="font-size: 15pt;">
                        <div class="container d-flex flex-column align-items-center justify-content-center col-11 h-25 m-auto border text-center text-dark font-weight-bold" style=" box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                            <div>
                                <h2 class="font-italic">
                                    Question <span id="questionNumber"> </span>/ <span id="allQuestionsNumber"> </span>
                                </h2>
                            </div>
                            <span id="questionTitle"></span>
                        </div>
                        <div class="container mx-5 my-2 float-right text-center col-1 h-auto border" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                            <span id="points"> </span> pts
                        </div>
                        <div class="border border-primary container w-100 h-50 px-5 d-flex justify-content-start align-items-center">

                        </div>
                        <div class="my-4">
                            <button class="btn float-left bgcolor2 rounded shadow text-white font-weight-bold px-2" style="font-size: 13pt;" disabled="disabled">Précédent</button>
                            <button class="btn float-right bgcolor3 rounded shadow text-white font-weight-bold px-4 active" style="font-size: 13pt;">Suivant</button>

                        </div>
                    </div>
                    <div class="container m-auto p-auto w-25 h-75 bg-white">
                        <ul class="nav nav-tabs " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="topscores-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Top Scores</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="meilleurscore-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mon meilleur score</a>
                            </li>
                        </ul>
                        <div class="tab-content border border-top-0 h-75 shadow rounded-bottom" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="topscores-tab"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="meilleurscore-tab"></div>
                        </div>
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