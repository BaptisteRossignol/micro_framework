<?php


/**
 * Classe IndexController.
 */
class PersoController extends ControllerAbstract
{
    /**
     * Affiche la page
     */
    public function page()
    {
        $this->vars = ['prenom' => 'Baptiste'];
        $this->render('pagePerso.php');
    }
}
