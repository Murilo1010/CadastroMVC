<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class UsuarioController{
    
    
    public function inserir($nome, $cpf, $email,$senha) {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email); 
        $usuario->setSenha($senha);    
        //return $usuario->getNome();
        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;     
    }

    public function atualizar($id, $nome, $cpf, $email, $dataNascimento) {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setId($id);
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setDataNascimento($dataNascimento);
        $r = $usuario->atualizarBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }
    public function login($cpf, $senha)
    {
        require_once '../Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->carregarUsuario($cpf);
        if($usuario->getSenha() == $senha)
        {
            $_SESSION['Usuario'] = serialize($usuario);
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
        $u = new Usuario();
        
        return $results = $u->listaCadastrados();
    }

    public function gerarListaID($id)
    {
        require_once '../Model/Administrador.php';
        require_once '../Model/Usuario.php';
        $u = new Usuario();
        
        return $results = $u->listaCadastradosID($id);
    }
}

?>