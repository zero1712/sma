<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMA| Login</title>

    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>



            </div>
            <h3>Bienvenido a SMA+</h3>
            <p>Sistema para la atención a la demanda ciudadana
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <?php echo form_open('login/login'); ?>
            <p>Por favor inicia sesión</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" name="maillogin" id="maillogin" class="form-control" placeholder="Username" value="<?= set_value('maillogin'); ?>" required="" autofocus>
                </div>
                                              <div class="LoginUsuariosError">
      <?php
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('maillogin');
      ?>
      </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="passwordlogin" placeholder="Password" required="" value="<?= set_value('passwordlogin'); ?>">
                </div>
                                                <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>

                 <input type="submit" class="btn btn-primary block full-width m-b" value="Ingresar">

               
            </form>
              
        </div>
        <strong>
                    <p> &copy; 2016 BuscarV. Todos los derechos reservados. </p>
                    </strong>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</body>

</html>
