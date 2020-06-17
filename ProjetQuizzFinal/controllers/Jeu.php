<?php

class Jeu extends Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->dirname = "jeu";
      $this->layout = "layout_joueur";
   }