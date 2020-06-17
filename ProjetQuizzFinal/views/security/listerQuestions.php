<div class="container p-3 w-100 color5 col-8 m-auto rounded shadow bg-white d-flex flex-column justify-content-space-between align-items-stretch" style="height: 95%;">
    <span class="w-100 text-center">
        <form action="<?= WEBROOT ?>security/listerQuestions" method="post">
            <div class="form-group">
                <label for="questionNumberPerGame" class="d-inline col-3" style="font-size: 14pt;">Nbre de question/Jeu</label>
                <input type="text" name="questionNumberPerGame" value="<?=$questionNumberPerGame?>" id="questionNumberPerGame" class="form-control d-inline col-1" placeholder="" aria-describedby="helpId">
                <button type="submit" name="btn_submit" class="btn bgcolor4 rounded shadow text-white col-1">OK</button>
            </div>
            <small><?php if(isset($erreurs['questionNumberPerGame'])){ echo $erreurs['questionNumberPerGame']; } ?></small>
            <small><?php if(isset($erreurs['supFive'])){ echo $erreurs['supFive']; } ?></small>
        </form>
    </span>
    <div class="m-2 p-2 h-75 border border-primary rounded text-dark" id="questionsContainer" style="font-size: 11pt; overflow: scroll;">
        




        <?php

        $questionsManager = new QuestionsManager();
        $reponseManager = new ReponseManager();
        $questions = $questionsManager->findAll();
        //var_dump($questions)

        if (count($questions) > 0) {
            $counter = count($questions);

            for ($i = 0; $i < $counter; $i++) {
                echo '<span><input type="checkbox" name="" id="question' . $i . '">' . $questions[$i]->getIdQuestions() . '</span> <br />';
                echo '<strong>' . $questions[$i]->getLibelleQuestion() . '</strong><br />';
                $reponses = $reponseManager->getLibelleReponse($questions[$i]->getLibelleQuestion());
                //var_dump($reponses)
                for ($j = 0; $j < count($reponses); $j++) {
                    if ($questions[$i]->getLibelleTypeQuestion() == "cs") {
                        if ($reponses[$j]->getStatut() == "true") {
                            echo '<span><input type="radio" checked  style="border-color: #af4519;">' . $reponses[$j]->getLibelleReponse() . '</span><br />';
                        } else {
                            echo '<span><input type="radio" disabled>' . $reponses[$j]->getLibelleReponse() . '</span><br />';
                        }
                    } elseif ($questions[$i]->getLibelleTypeQuestion() == "cm") {
                        if ($reponses[$j]->getStatut() == "true") {
                            echo '<span><input type="checkbox" checked disabled>' . $reponses[$j]->getLibelleReponse() . '</span><br />';
                        } else {
                            echo '<span><input type="checkbox" disabled>' . $reponses[$j]->getLibelleReponse() . '</span><br />';
                        }
                    } else {
                        echo '<span><input type="text" value="' . $reponses[$j]->getLibelleReponse() . '" disabled></span><br />';
                    }
                }
            }
        } else {
            $this->data['questionNull'] = "Vous n'avez pas encore créé de questions";
        }




        if (isset($questionNull)) {
        ?>
            <div class="bgcolor3 rounded p-2 text-center col-5 my-3 mx-auto"><?= $questionNull ?></div>
        <?php
        }
        ?>
    </div>
    <div class="w-100">
        <button type="button" name="" value="" class="btn bgcolor3  float-right border-bgcolor1 text-white font-weight-bold shadow-sm">Suivant</button>
    </div>

</div>