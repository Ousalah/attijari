<?php require 'modules/utils.class.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voie Info - Attijari</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- start menu -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Attijari Retail</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- end menu -->

    <!-- start filter & table  -->
    <div class="container">

      <!-- start Filter and action-->
      <div class="col-md-4">
        <!-- start nav tab -->
        <ul class="nav nav-tabs">
          <li class=""><a data-toggle="tab" href="#filter">Filter</a></li>
          <li class="active"><a data-toggle="tab" href="#actions">Actions</a></li>
        </ul>
        <!-- end nav tab -->

        <div class="tab-content">
          <!-- start filter -->
          <div id="filter" class="tab-pane fade in fade">
            <form class="form-horizontal">

              <!-- start filter date -->
              <div class="form-group">
                <div class="col-md-6">
                  <label class="control-label" for="textinput">Du</label>  
                  <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md">
                </div>

                <div class="col-md-6">
                  <label class="control-label" for="textinput">Au</label>  
                  <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md">
                </div>
              </div>
              <!--  end filter date -->

              <!-- start filter boutique -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="selectbasic">Boutique</label>
                  <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Tous</option>
                    <option value="2">Option two</option>
                  </select>
                </div>
              </div>              
              <!-- end filter boutique -->

              <!-- start filter fournisseur -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="selectbasic">Fournisseur</label>
                  <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Tous</option>
                    <option value="2">Option two</option>
                  </select>
                </div>
              </div>              
              <!-- end filter fournisseur -->

              <!-- start show documents -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="radios">Afficher les documents</label>
                  <div class="radio">
                    <label for="radios-0">
                      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                      Validées
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" name="radios" id="radios-1" value="2">
                      Non Validées
                    </label>
                  </div>
                </div>
              </div>
              <!-- end show documents -->

              <!-- start buttons filter and print -->
              <div class="form-group">
                <div class="col-md-12">
                  <button id="button1id" name="button1id" class="btn btn-success">Filter</button>
                  <button id="button2id" name="button2id" class="btn btn-danger">Imprimer</button>
                </div>
              </div>
              <!-- end buttons filter and print -->

            </form>
          </div>
          <!-- end filter -->

          <!-- start actions -->
          <div id="actions" class="tab-pane active">
            <ul class="list-group">
              <li class="list-group-item"><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i> Ouvrir</a></li>
              <li class="list-group-item"><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Nouveau</a></li>
              <li class="list-group-item"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Suprimer</a></li>
              <li class="list-group-item"><a href="#"><i class="fa fa-copy" aria-hidden="true"></i> Dupliquer</a></li>
              <li class="list-group-item"><a href="#"><i class="fa fa-share" aria-hidden="true"></i> Transfer -> BL</a></li>
              <!-- <li class="list-group-item"><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Generer fichier</a></li> -->
            </ul>
          </div>
          <!-- end actions -->
        </div> 
      </div>
      <!-- end filter and action -->

      <!-- start table -->

      <?php
        $table = "client";
        $clients = Utils::get_all($table);
        $client = $clients[0];

        echo $client->client." ".$client->tel;
       ?>
      <div class="col-md-8">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Num</th>
              <th>Entrepot</th>
              <th>Fournisseur</th>
              <th>Date</th>
              <th>Montant HT</th>
              <th>Montant TTC</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr><tr>
              <td>1</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr><tr>
              <td>1</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr><tr>
              <td>1</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <th>Total</th>
              <th>574689</th>
              <th>574854</th>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- end table -->
    </div>
    <!-- end filter & table -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>