<?php 
// Incluindo o sistema de autenticação
include('../admin/acesso_com.php');
include('../config.php');
?>

<!DOCTYPE html>
<html lang="ptb">
<head>
    <meta charset="UTF-8">    
    <title><?php echo SYS_NAME;?>&nbsp; Área do Cliente</title>
</head>
<body>
    <?php include('menu_cliente.php');
    include('conta.php');    
    ?>
</body>
</html>