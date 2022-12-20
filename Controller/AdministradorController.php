<?php
if (!isset($_SESSION))
{
    session_start();
}
class AdministradorController
{

    public function login($cpf, $senha)
    {
        require_once '../Model/Administrador.php';
        $administrador = new Administrador();
        $administrador->carregarAdministrador($cpf);
        if ($administrador->getSenha() == $senha)
        {
            $_SESSION['Administrador'] = serialize($administrador);
            return true;
        }
        else
        {
            return false;
        }
    }
    public function gerarLista()
    {
        require_once '../Model/Administrador.php';
        require_once '../Model/Usuario.php';
        $adm = new Administrador();
        
        return $results = $adm->listaCadastrados();
    }

    
    public function gerarListaID($id)
    {
        require_once '../Model/Administrador.php';
        require_once '../Model/Usuario.php';
        $adm = new Administrador();
        
        return $results = $adm->listaCadastradosID($id);
    }
}
?>
