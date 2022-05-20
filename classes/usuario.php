<html>
<?php
require_once "db.php";
class Usuario
{
    //Propriedades
    private $usu_id;
    private $usu_login;
    private $usu_senha;

    //Metodos get
    public function getUsuId()
    {
        return $this->usu_id;
    }
    public function getUsuLogin()
    {
        return $this->usu_login;
    }
    public function getUsuSenha()
    {
        return $this->usu_senha;
    }
    //Metodos set
    public function setUsuId($valor)
    {
        $this->usu_id = $valor;
    }
    public function setUsuLogin($valor)
    {
        $this->usu_login = $valor;
    }
    public function setUsuSenha($valor)
    {
        $this->usu_senha = $valor;
    }

    //Método para Procurar todos os usuários
    public function findAll()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    //Método para procurar pelo id
    public function findById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE usu_id = $id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    //Método para procupar por qualquer campo
    public function findGenerico($campo, $valor)
    {
        $sql = "SELECT * FROM usuarios WHERE $campo = '$valor'";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>

</html>