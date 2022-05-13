<html>
<?php
include_once "genero.php";
include_once "usuario.php";
class Anime
{
    // Propriedades
    private $id_anime;
    private $nome;
    private $dt_nascimento;
    private $classificacao_indicativa;
    private $genero;
    private $usuario;
    private $autor;
    private $quantidade_episodios;
    private $quantidade_temporadas;
    private $ytId;

    //metodo construtor
    public function __construct()
    {
        $this->genero = new Genero();
        $this->usuario = new Usuario();
    }

    //Métodos Get
    public function getIdAnime()
    {
        return $this->id_anime;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getDtNascimento()
    {
        return $this->dt_nascimento;
    }
    public function getClassificacaoIndicativa()
    {
        return $this->classificacao_indicativa;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getQuantidadeEpisodios()
    {
        return $this->quantidade_episodios;
    }
    public function getQuantidadeTemporadas()
    {
        return $this->quantidade_temporadas;
    }
    public function getYtId()
    {
        return $this->ytId;
    }

    // Métodos Set
    public function setIdAnime($valor)
    {
        $this->id_anime = $valor;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
    public function setDtNascimento($valor)
    {
        $this->dt_nascimento = $valor;
    }
    public function setClassificacaoIndicativa($valor)
    {
        $this->classificacao_indicativa = $valor;
    }
    public function setGenero($valor)
    {
        $this->genero = $valor;
    }
    public function setUsuario($valor)
    {
        $this->usuario = $valor;
    }
    public function setAutor($valor)
    {
        $this->autor = $valor;
    }
    public function setQuantidadeEpisodios($valor)
    {
        $this->quantidade_episodios = $valor;
    }
    public function setQuantidadeTemporadas($valor)
    {
        $this->quantidade_temporadas = $valor;
    }
    public function setYtId($valor)
    {
        $this->ytId = $valor;
    }
}


?>

</html>