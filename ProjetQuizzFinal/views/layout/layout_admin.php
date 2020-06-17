<?php require_once("./views/layout/inc/header.inc.php"); 
session_start();
?>


<div class="container p-0 d-flex align-items-start col-11 fixed-bottom fixed-top rounded shadow-sm bg-white" style="margin-top: 70px; margin-bottom: 10px;">

    <div class="position-relative w-100 d-flex justify-content-center align-items-center bgcolor1">
        <div class="col-9 float-right">
            <h3 class="text-white font-weight-bold float-right m-0 p-3">CREER ET PARAMETRER VOS QUIZZ</h3>
        </div>
        <div class="col-3">
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn float-right text-white bgcolor3 shadow-sm" style="text-shadow: 1px 1px 2px black;">Deconnexion</button>
        </div>
    </div>



    <div class="position-absolute row container w-100 m-0 d-flex justify-content-center align-items-center col-12 shadow-sm bgcolor7 border-none" style="top: 9%; left: 0; right: 0; bottom: 0;">

        <div class="position-relative container p-0 w-100 m-auto col-3 rounded shadow bg-white" style="height: 60%;">
            <div class="container w-100 bg-white d-flex align-items-center justify-content-center" style="height: 50%; background: linear-gradient(#fff, #51bfd0);">
                <div class="container bg-dark rounded-circle m-2" style="height: 100px; width: 100px; border-color: #51bfd0; border-width: 10px;">
                    <img src="<?=WEBROOT?>assets/images/uploads/<?= $_SESSION['user']->getAvatar() ?>" alt="profil">
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <h4 class="font-weight-bold text-white m-0 p-0"><?=$_SESSION['user']->getFullName()?></h4>
                <?php
                }
                ?>
            </div>
            <div class="nav flex-column nav-pills m-auto" role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-0 color5" id="id1" href="<?= WEBROOT ?>security/listerQuestions" style="height: 10%;">Lister Questions</a>
                <a class="nav-link rounded-0 color5" id="id2" href="<?= WEBROOT ?>security/inscription" style="height: 10%;">Créer Admin</a>
                <a class="nav-link rounded-0 color5" id="id3" href="<?= WEBROOT ?>security/listerJoueurs" style="height: 10%;">Lister Joueurs</a>
                <a class="nav-link rounded-0 color5" id="id4" href="<?= WEBROOT ?>security/creerQuestion" style="height: 10%;">Créer Questions</a>
            </div>
        </div>


        <?php echo $content_for_layout; ?>


    </div>



</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Déconnexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment vous déconnecter ?
            </div>
            <form action="<?= WEBROOT ?>security/seDeconnecter" method="post">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Non</button>
                    <button type="submit" name="btn_logout" class="btn btn-success">Oui</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once("./views/layout/inc/footer.inc.php"); ?>


<script type="text/javascript">

link1 = document.getElementById("id1");
link2 = document.getElementById("id2");
link3 = document.getElementById("id3");
link4 = document.getElementById("id4");

link1.addEventListener("click", function(event){
    link1.classList.add("active");
});

link2.addEventListener("click", function(event){
    link2.classList.add("active");
});

link3.addEventListener("click", function(event){
    link3.classList.add("active");
});

link4.addEventListener("click", function(event){
    event.target.classList.add("active");
});

</script>