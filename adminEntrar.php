<?php
ini_set('displya_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

session_start();

    if (isset($_POST['email']))
    {
    
            $email = $_POST['email'];
            
            $senha = $_POST['senha'];
    
            //Query para os valores inputados existem no banco de dados.
            
            $sql = $pdo->prepare("SELECT email, senha FROM cliente where email = :e and senha = :s");
    
            $sql->bindParam(':e', $email);
    
            $sql->bindParam(':s', $senha);
    
            $sql->execute();
    
            //Armazenando o array numa variavel
            $res = $sql->fetch(PDO::FETCH_ASSOC);
            
            if (!empty($email) && !empty( $senha))
            {
                //Arrumar a verificação!!!!!!!!!!!
                if ($res['senha'] = $senha) 
                {
    
                    header('location: /Pi_2/admin.php');
        
                    //se variavel email e senha estao vazias?
                } else if (empty($email) && empty($senha)) 
                {
                    
                    ?>
                    <div class="msg-erro">
                        Preenchas todos os campos, por favor!
                    </div>
                    <?php
        
                } else {
        
                    ?>
                    <div class="msg-erro">
                        Email e/ou senha estão incorretos!
                    </div>
                   <?php
                }
            }   
    }
      