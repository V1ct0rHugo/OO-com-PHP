<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Document</title></head>
<body>
  <?php
    class Brinquedo{
        public $codigo;
        public $nome;
        public $descricao;
        public $preco;
        
        public function incluir(){
            echo "Incluindo brinquedo";
        }

        public function excluir(){
            echo "Excluindo brinquedo";
        }
        public function alterar(){
            echo "Alterando brinquedo";
        }
        public function mostrar(){
            echo "<br>Código :  ".$this->codigo."<br>Nome : ".$this->nome."<br>Descrição : ".$this->descricao."<br>Preço : ".$this->preco;
        }
            
    }
    
    
  ?>
</body>
</html>