<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Document</title></head>
<body>
  <?php
    require_once 'ex_02_class_Brinquedo.php';
    $b1 = new Brinquedo;
    $b1->codigo = 123456;
    $b1->nome = "Lego";
    $b1->descricao = "Brinquedo de montar";
    $b1->preco = 25.50;
    
    print_r($b1);

    var_dump($b1);

    //$b1->mostrar()
    
  ?>
</body>
</html>