<div class="pt-12" id="voiture"> 
  <h2 class="text-2xl font-bold text-center">
    Véhicules disponibles dans la concession
  </h2>
    <!-- Start block -->
      <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="inline-flex">
            <div class="text-center w-32 shadow-xl">
              <div class="bg-clifford text-white p-2 rounded-tl-lg hover:bg-red-700">
                <a href="index.php?controleur=gestionadmin&action=formaddvoiture">
                  Ajouter
                </a>
              </div>
            </div>
            <div class="text-center w-32 shadow-xl">
              <div class="bg-blue-500 text-white p-2 rounded-tr-lg hover:bg-blue-700">
                <a href="index.php?controleur=gestionadmin&action=formaddvoiture">
                  Horaires
                </a>
              </div>
            </div>
          </div>
          <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">                        
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                  <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Marque</th>
                    <th scope="col" class="p-4">Modèle</th>
                    <th scope="col" class="p-4">Année</th>
                    <th scope="col" class="p-4">Energie</th>
                    
                    <th scope="col" class="p-4">Prix</th>
                    <th scope="col" class="p-4">Kilométrage</th>
                    <th scope="col" class="p-4">Couleur</th>
                    <th scope="col" class="p-4">Chevaux fiscaux</th>
                    <th scope="col" class="p-4">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($lesVoitures as $voiture){
                  ?>
                    <tr>
                      <th scope="col" class="p-4"><?php echo $voiture['ID'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['MARQUE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['MODELE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['ANNEE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['ENERGIE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['PRIX'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['KILOMETRAGE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['COULEUR'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['CVFISC'] ?></th>
                      <th scope="col" class="">
                        <div class="inline-flex">
                          <form method="post" action="index.php?controleur=gestionadmin&action=supprimervoiture">
                            <input type="hidden" value=<?php echo "\"".$voiture['ID']."\"" ?> name="id"/>
                              <button type="submit" class="p-2 bg-clifford text-white rounded-l-lg">
                                Supprimer
                              </button>
                          </form>
                          <form method="post" action="index.php?controleur=gestionadmin&action=formmodifiervoiture">
                            <input type="hidden" value=<?php echo "\"".$voiture['ID']."\"" ?> name="id"/>
                              <button type="submit" class="p-2 bg-blue-500 text-white rounded-r-lg">
                                Modifier
                              </button>
                          </form>
                        </div>
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