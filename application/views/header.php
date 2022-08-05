<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="ISO 8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do Site</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css">  -->
    <!-- <link rel="stylesheet" href="css/estilo.css" /> -->
</head>

<body>
    <div class="header">
        <div class="linha">
            <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">Titulo do Site</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarColor01">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo base_url();?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('clientes');?>">Clientes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('servicos');?>">Serviços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('sobre');?>">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('contato');?>">Contato</a>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>
</body>

</html>