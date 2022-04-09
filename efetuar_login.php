<?php 
$db = mysqli_connect("localhost", "root", "usbw", "chkl");
session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['email']) || empty($_POST['senha']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from usuario where email='".$_POST['email']."' and senha='".$_POST['senha']."'";
            $result=mysqli_query($db,$query);

            if(mysqli_fetch_assoc($result))
            {
				$dados=mysqli_fetch_array($result);
                $_SESSION['email']=$_POST['email'];
                header("location:gerenciar_conteudo_editar.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>