<?php

class Security extends Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->dirname = "security";
      $this->layout = "layout_connexion";
   }

   public function index()
   {
      $this->views = "connexion";
      $this->render();
   }
   public function loadViewInscription()
   {
      $this->views = "inscription";
      $this->render();
   }

   public function inscription()
   {
      session_start();
      if (empty($_SESSION) === true) {
         $this->layout = "layout_connexion";
      } else {
         if (isset($_SESSION['user'])) {
            if ($_SESSION['user']->getProfil() == 'admin') {
               $this->layout = "layout_admin";
            }
         }
      }
      $this->loadViewInscription();
   }






   public function creerQuestion()
   {
      //Verification de soumission du formulaire de creation
      if (isset($_POST['btn_create'])) {
         //extraction suivant les cles du $_POST
         extract($_POST);
         $this->validator->is_empty($libelleQuestion, 'libelleQuestion', "Champ Obligatoire");
         $this->validator->is_number($nbrePoints, 'nbrePoints');
         $this->validator->is_empty($typeQuestion, 'typeQuestion');
         // Tableau reponses fausses et vraies
         $reponses = [];
         if ($typeQuestion === "cs" || $typeQuestion === "cm") {
            // Reponse 1e radio ou checkbox
            if (isset($reponse1)) {
               $this->validator->is_empty($reponse1, 'reponse1');
               $reponses[] = $reponse1;
            } else {
               $this->data['createFailed'] = "Veuillez creer au moins 2 champs !!!";
               $this->layout = "layout_admin";
               $this->views = "creerQuestions";
               $this->render();
            }
            // Reponse 2e radio ou checkbox
            if (isset($reponse2)) {
               $this->validator->is_empty($reponse2, 'reponse2');
               $reponses[] = $reponse2;
            } else {
               $this->data['createFailed'] = "Veuillez creer  au moins 2 champs !!!";
               $this->layout = "layout_admin";
               $this->views = "creerQuestions";
               $this->render();
            }
            // Reponse 3e radio ou checkbox
            if (isset($reponse3)) {
               $this->validator->is_empty($reponse3, 'reponse3');
               $reponses[] = $reponse3;
            }
         } else {
            // Reponse texte
            if (isset($reponse)) {
               $this->validator->is_empty($reponse, 'reponse');
               $reponses[] = $reponse;
            }
         }

         if ($this->validator->is_valid()) {
            // Declaration des managers de bdd respectifs
            $questionsManager = new QuestionsManager();
            $reponseManager = new ReponseManager();
            // Reponse type texte
            if (count($reponses) === 1) {
               $question = new Questions();
               $question->setLibelleQuestion($libelleQuestion);
               $question->setLibelleTypeQuestion("texte");
               $question->setPoints($nbrePoints);

               if ($questionsManager->create($question)) {
                  var_dump($libelleQuestion);
                  $idRef = $questionsManager->getId($libelleQuestion);
                  var_dump($idRef);
                  $reponseTexte = new Reponse();
                  $reponseTexte->setLibelleReponse($reponses[0]);
                  $reponseTexte->setLibelleQuestion($libelleQuestion);
                  $reponseTexte->setStatut("true");

                  $reponseTexte->setIdQuestions($idRef);

                  $reponseManager->create($reponseTexte);

                  $this->data['createSuccess'] = "La question a été créée";
               }
               $this->layout = "layout_admin";
               $this->views = "creerQuestions";
               $this->render();
            }
            // Reponse type radio ou checkbox
            if (count($reponses) > 1) {
               $reponses[] = $reponseCheck;
               //var_dump($reponses)
               $question = new Questions();
               $question->setLibelleQuestion($libelleQuestion);
               $question->setLibelleTypeQuestion($typeQuestion);
               $question->setPoints($nbrePoints);
               if ($questionsManager->create($question)) {
                  $reponseType = new Reponse();
                  $idRef = $questionsManager->getId($libelleQuestion);
                  $reponseType->setIdQuestions($idRef);
                  for ($i = 0; $i < count($reponses) - 1; $i++) {
                     //echo $i . '<br />'
                     if ($reponses[$i] === end($reponses)) {
                        $reponseType->setLibelleReponse($reponses[$i]);
                        $reponseType->setLibelleQuestion($libelleQuestion);
                        $reponseType->setStatut("true");

                        $reponseManager->create($reponseType);

                        $this->data['createSuccess'] = "La question a été créée";
                        $this->layout = "layout_admin";
                        $this->views = "creerQuestions";
                        $this->render();
                     } else {
                        $reponseType->setLibelleReponse($reponses[$i]);
                        $reponseType->setLibelleQuestion($libelleQuestion);
                        $reponseType->setStatut("false");

                        $reponseManager->create($reponseType);

                        $this->data['createSuccess'] = "La question a été créée";
                        $this->layout = "layout_admin";
                        $this->views = "creerQuestions";
                        $this->render();
                     }
                  }
               }
            }
         } else {
            $erreurs = $this->validator->getErrors();
            $this->data['errorCreate'] = $erreurs;
            $this->layout = "layout_admin";
            $this->views = "creerQuestions";
            $this->render();
         }
      } else {
         // passer par url
         $this->layout = "layout_admin";
         $this->views = "creerQuestions";
         $this->render();
      }
   }



   public function listerJoueurs()
   {
      $this->layout = "layout_admin";
      $this->views = "listerJoueurs";
      $this->render();
   }

   public function listerQuestions()
   {
      if (isset($_POST['btn_submit'])) {
         extract($_POST);
         $this->validator->is_positif($questionNumberPerGame, 'errorNumber');
         if ($this->validator->is_valid()) {
            if ($questionNumberPerGame >= 5) {
               $jeuManager = new JeuManager();
               $jeu = new Jeu();
               $jeu->setNbreQuestionsPerGame($questionNumberPerGame);
               if (count($jeuManager->findAll()) === 0) {
                  $jeuManager->create($jeu);
               } else {
                  $jeuManager->update($questionNumberPerGame);
               }
            } else {
               $this->data['supFive'] = "Doit être supérior à 5";
            }
         } else {
            $erreurs = $this->validator->getErrors();
            $this->data['erreurs'] = $erreurs;
         }
      }
      $this->layout = "layout_admin";
      $this->views = "listerQuestions";
      $this->render();
   }


   public function seConnecter()
   {
      session_start();
      // extract permet d'extraire les valeurs d'un tableau associatif sur ces clés
      if (isset($_POST['btn_connexion'])) {
         // Passer par le bouton de soumission
         extract($_POST);
         $this->validator->is_empty($login, 'login', 'Login Obligatoire');
         $this->validator->is_empty($password, 'password', 'Password Obligatoire');
         if ($this->validator->is_valid()) {
            // Connexion à la base de données
            $this->manager = new UserManager();
            $user = null;
            $user = $this->manager->getUserByLoginAndPwd($login, $password);
            if (!empty($user)) {
               //Login et mdp corrects
               $_SESSION['user'] = $user;
               $this->data['userconnect'] = $user;
               if ($user->getProfil() === "admin") {
                  $this->layout = "layout_admin";
                  $this->views = "inscription";
                  $this->render();
               } else {
                  $this->dirname = "jeu";
                  $this->layout = "layout_joueur";
                  $this->views = "interfaceJoueur";
                  $this->render();
               }
            } else {
               //Login et mdp incorrects
               $this->data['err_login'] = "Login ou Mot de Passe Incorrect";
               $this->views = "connexion";
               $this->render();
            }
         } else {
            // Champs non remplis->Erreur
            $erreurs = $this->validator->getErrors();
            $this->data['erreurs'] = $erreurs;
            $this->views = "connexion";
            $this->render();
         }
      } else {
         // Passer par URL
         $this->index();
      }
   }



   private function uploadUserProfileImage($user)
   {
      $file = $_FILES['imgUser'];

      $fileName = $file['name'];
      $fileTmpName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png');
      if (in_array($fileActualExt, $allowed)) {
         if ($fileError === 0) {
            if ($fileSize < 5000000) {
               $fileNameNew = $user->getLogin() . "." . $fileActualExt;
               $user->setAvatar($fileNameNew);
               $fileDestination = WEBROOT . 'assets/images/uploads' . basename($fileName);
               if (move_uploaded_file($fileNameNew, $fileDestination) === false) {
                  $this->data['imgError'] = "L'upload a échoué. Réesayez!";
               } else {
                  $user->setAvatar($fileNameNew);
                  move_uploaded_file($fileNameNew, $fileDestination);
                  return true;
               }
               var_dump(move_uploaded_file($fileNameNew, $fileDestination));
            } else {
               $this->data['imgError'] = "L'image est trop lourde";
            }
         } else {
            var_dump($fileError);
            $this->data['imgError'] = "Erreur d'upload";
         }
      } else {
         $this->data['imgError'] = "Extension non autorisé";
      }
   }






   public function creerUser()
   {
      session_start();
      if (isset($_POST['btn_register'])) {
         extract($_POST);
         // verification des champ vides
         $this->validator->is_empty($prenom, 'prenom', 'Prenom obligatoire');
         $this->validator->is_empty($nom, 'nom', 'Nom obligatoire');
         $this->validator->is_empty($pseudo, 'pseudo', 'Pseudo obligatoire');
         $this->validator->is_sup8($password, 'password');
         $this->validator->is_sup8($confirmPassword, 'confirmPassword', 'Confirmer le mot de passe');
         if ($this->validator->is_valid()) {
            // Tous les champs sont remplis
            if ($password === $confirmPassword) {
               $this->manager = new UserManager();
               if (count($this->manager->getUserByLogin($pseudo)) <= 0) {
                  if (isset($_SESSION['user']) && $_SESSION['user']->getProfil() == "admin") {
                     $user = new User();
                     $user->setFullName($prenom . " " . $nom);
                     $user->setLogin($pseudo);
                     $user->setPwd($password);

                     if ($this->uploadUserProfileImage($user) === true) {
                        $this->manager->create($user);
                        $this->data['creationSuccess'] = "L'utilisateur a été créé";
                     }
                     $this->inscription();
                  }

                  if ($_SESSION == null) {
                     $user = new User();
                     $user->setProfil('joueur');
                     $user->setFullName($prenom . " " . $nom);
                     $user->setLogin($pseudo);
                     $user->setPwd($password);
                     if ($this->uploadUserProfileImage($user) === true) {
                        $this->manager->create($user);
                        $this->data['creationSuccess'] = "L'utilisateur a été créé";
                     }
                     $this->inscription();
                  }
               } else {
                  //Login existe déjà
                  $this->data['login_exists'] = "Le login existe déjà";
                  $this->inscription();
               }
            } else {
               //Password et confirmPassword incorrects
               $this->data['err_password'] = "Les mots de passe ne correspondent pas";
               $this->inscription();
            }
         } else {
            // Tous les champs ne sont pas remplis
            $erreurs = $this->validator->getErrors();
            $this->data['erreurs'] = $erreurs;
            $this->inscription();
         }
      } else {
         $this->inscription();
      }
   }






   public function seDeconnecter()
   {
      if (isset($_POST['btn_logout'])) {
         $this->data = [];
         session_start();
         $_SESSION['user'] = '';
         session_destroy();
         header("Status: 301 Moved Permanently", false, 301);
         header("Location: http://localhost/base/Pour%20M.WANE/projetQuizz/");
         $this->views = "connexion";
         $this->render();
         exit;
      }
   }
}
