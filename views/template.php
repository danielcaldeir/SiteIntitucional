<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classificados MVC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>asserts/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>asserts/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>asserts/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE; ?>asserts/js/jquery-3.2.1.js" ></script>
        <script type="text/javascript" src="<?php echo BASE; ?>asserts/js/bootstrap.min.js" ></script>
    </head>
    <body>
		
        <div class="topo">
            <div class="topo1"></div>
            <div class="banner"></div>
        </div>
        <div class="menu">
            <!--
			<ul >
                <a href="<?php echo BASE; ?>"><li >HOME</li></a>
                <a href="<?php echo BASE_URL; ?>portfolio"><li >PORTFOLIO</li></a>
                <a href="<?php echo BASE_URL; ?>SOBRE"><li >SOBRE</li></a>
                <a href="<?php echo BASE_URL; ?>SERVICOS"><li >SERVICOS</li></a>
                <a href="<?php echo BASE_URL; ?>CONTATO"><li >CONTATO</li></a>
            </ul>
			-->
			<?php $this->loadMenu(); ?>
        </div>
        <div class="container-site">
            <?php $this->loadView($viewName, $viewData); ?>
        </div>
        <div class="rodape"></div>
        
    </body>
</html>
