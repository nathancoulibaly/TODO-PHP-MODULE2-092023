<?php 
include('config/app.php');
include('config/db.php');
include('connexion.php');
include('html/header.php');
include('fct/item.php');
include('fct/request.php');

?> 
        <div class="row">
          <div class="col-12">
            <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- Formulaire d'ajout -->
                    <form action="addItem.php" method="post">
                      <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="intitule">
                          <span class="input-group-append">
                            <button type="submit" class="btn btn-info btn-flat">+</button>
                          </span>
                      </div>
                    </form>
                    <!-- liste item -->
                      <ul class="todo-list " data-widget="todo-list">
                        <?php
                        
                          $query='SELECT * FROM todo';
                          $stmt=$pdo->query($query);
                          while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
                            echo displayItem($item);
                          }
                        ?>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
  <?php
  include('html/footer.php')
  ?>
