<?php


/**
 * Class IndexController.
 */
class IndexController extends ControllerAbstract
{
    /**
     * Display the template index.
     */
    public function index()
    {
        $this->vars = ['name' => 'Baptiste'];
        $this->render('index.php');
    }

    public function accesdb()
    {
        $stmt = $this->db->pdo->prepare('SELECT prenom FROM contact');
        $stmt->execute();
        $message = $stmt->fetch();
        $message = $message['prenom'];
        $this->vars = ['prenom' => $message];
        $this->render('accesdb.php');
    }

    /**
     * Display the template page.
     */
    public function page()
    {
        $this->render('page.php');
    }

    /**
     * Display the template list.
     */
    public function list()
    {
        $this->vars = array('items' => ['Baptiste', 'Claude', 'Pierre', 'André']);
        $this->render('list.php');
    }

    /**
     * Display the template 404 not found.
     */
    public function notfound()
    {
        $this->render('404.php');
    }

}
