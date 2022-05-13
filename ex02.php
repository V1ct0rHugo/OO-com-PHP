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
            echo "<br>Código :  ".$codigo."<br>Nome : ".$nome."<br>Descrição : ".$descricao."<br>Preço : ".$preco;
        }
            
    }
    
    
  ?>
</body>
</html>