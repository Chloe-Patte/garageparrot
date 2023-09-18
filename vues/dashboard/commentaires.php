<div class="pt-12" id="commentaire">
  <h2 class="text-2xl font-bold text-center">
    Commentaires
  </h2>
    <!-- Start block -->
      <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="text-center w-32 mb-4">
            <div class="bg-clifford text-white p-2 rounded-lg shadow-md hover:bg-red-700">
              <a href="index.php?controleur=gestionadmin&action=formaddcommentaire">
                Ajouter
              </a>
            </div>
          </div>
          <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">                        
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                  <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Motif</th>
                    <th scope="col" class="p-4">Nom</th>
                    <th scope="col" class="p-4">Prénom</th>
                    <th scope="col" class="p-4">Mail</th>
                    <th scope="col" class="p-4">Note</th>
                    <th scope="col" class="p-4">Message</th>
                    <th scope="col" class="p-4">Statut</th>
                    <th scope="col" class="p-4">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($lesCommentaires as $commentaire){
                  ?>
                    <tr>
                      <th scope="col" class="p-4"><?php echo $commentaire['ID'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['MOTIF'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['NOM'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['PRENOM'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['EMAIL'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['NOTE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $commentaire['MESSAGE'] ?></th>
                      <th scope="col" class="p-4">
                        <?php 
                          if($commentaire['PUBLIE']){
                            echo "Publié";
                          }else{
                            echo "Non publié";
                          }
                           
                        ?>
                      </th>
                      <th scope="col" class="p-4">
                        <form method="post" action="#">
                          <input type="hidden" value=<?php echo "\"".$commentaire['ID']."\"" ?> name="id"/>
                            <button type="submit">
                              Supprimer
                            </button>
                        </form>
                        <button>
                          Modifier
                        </button>
                      </th>
                    </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
</div>