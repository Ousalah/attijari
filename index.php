<?php require 'model/CommandeModel.php'; ?>

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
          <li class="active"><a data-toggle="tab" href="#filter">Filter</a></li>
          <li><a data-toggle="tab" href="#actions">Actions</a></li>
        </ul>
        <!-- end nav tab -->

        <div class="tab-content">
          <!-- start filter -->
          <div id="filter" class="tab-pane fade in active">
            <form class="form-horizontal" action="controller/Commande.php?a=filter" method="post">

              <!-- start filter date -->
              <div class="form-group">
                <div class="col-md-6">
                  <label class="control-label" for="DU_DATE_BC">Du</label>  
                  <input id="DU_DATE_BC" name="DU_DATE_BC" type="date" placeholder="placeholder" class="form-control input-md">
                </div>

                <div class="col-md-6">
                  <label class="control-label" for="AU_DATE_BC">Au</label>  
                  <input id="AU_DATE_BC" name="AU_DATE_BC" type="date" placeholder="placeholder" class="form-control input-md">
                </div>
              </div>
              <!--  end filter date -->

              <!-- start filter boutique -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="REF_ENTROPOT">Boutique</label>
                  <select id="REF_ENTROPOT" name="REF_ENTROPOT" class="form-control">

                    <option value="0">Tous</option>
                    <?php 
                      $entropots = Utils::get_all("ENTROPOT");
                      foreach ($entropots as $entropot) :
                      
                     ?>
                      <option value="<?php echo $entropot->REF_ENTROPOT ?>"><?php echo $entropot->ENTROPOT ?></option>
                    <?php endforeach ?>

                  </select>
                </div>
              </div>              
              <!-- end filter boutique -->

              <!-- start filter fournisseur -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="CODE_FRS">Fournisseur</label>
                  <select id="CODE_FRS" name="CODE_FRS" class="form-control">
                    <option value="0">Tous</option>
                    <?php 
                      $fournisseurs = Utils::get_all("FOURNISSEUR");
                      foreach ($fournisseurs as $fournisseur) :
                      
                     ?>
                      <option value="<?php echo $fournisseur->CODE_FRS ?>"><?php echo $fournisseur->FOURNISSEUR ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>              
              <!-- end filter fournisseur -->

              <!-- start show documents -->
              <div class="form-group">
                <div class="col-md-12">
                  <label class="control-label" for="VALIDER">Afficher les documents</label>
                  <div class="radio">
                    <label for="VALIDER-0">
                      <input type="radio" name="VALIDER" id="VALIDER-0" value="O" checked="checked">
                      Validées
                    </label>
                  </div>
                  <div class="radio">
                    <label for="VALIDER-1">
                      <input type="radio" name="VALIDER" id="VALIDER-1" value="N">
                      Non Validées
                    </label>
                  </div>
                </div>
              </div>
              <!-- end show documents -->

              <!-- start buttons filter and print -->
              <div class="form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success">Filter</button>
                  <button class="btn btn-danger">Imprimer</button>
                </div>
              </div>
              <!-- end buttons filter and print -->

            </form>
          </div>
          <!-- end filter -->

          <!-- start actions -->
          <div id="actions" class="tab-pane fade">
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

            <?php

              $tables = "COMMANDEF as c, ENTROPOT as e, FOURNISSEUR as f";
              $rows = "c.REF_BC, e.ENTROPOT, f.FOURNISSEUR, c.DATE_BC, c.MNT_HT, c.MNT_TTC";
              $where = "c.REF_ENTROPOT = e.REF_ENTROPOT and f.CODE_FRS=c.CODE_FRS and c.VALIDER='O'";
              $order = null;
              $limit = 100;
              $commandes = Commande::select($tables, $rows, $where, $order, $limit);

              $total_ht = 0;
              $total_ttc = 0;
              foreach ($commandes as $commande) :

                $total_ht += $commande->MNT_HT;
                $total_ttc += $commande->MNT_TTC;
             ?>
            <tr>
              <td><?php echo $commande->REF_BC ?></td>
              <td><?php echo $commande->ENTROPOT ?></td>
              <td><?php echo $commande->FOURNISSEUR ?></td>
              <td><?php echo $commande->DATE_BC ?></td>
              <td><?php echo $commande->MNT_HT ?></td>
              <td><?php echo $commande->MNT_TTC ?></td>
            </tr>
            <?php endforeach; ?>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <th>Total</th>
              <th><?php echo $total_ht ?></th>
              <th><?php echo $total_ttc ?></th>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- end table -->
    </div>
    <!-- end filter & table -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <script>


  </script>
</html>