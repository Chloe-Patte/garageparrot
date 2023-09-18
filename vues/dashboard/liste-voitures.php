<div class="pt-12" id="voiture">
  <h2 class="text-2xl font-bold text-center">
    Véhicules disponibles dans la concession
  </h2>
    <!-- Start block -->
      <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="text-center w-32 mb-4">
            <div class="bg-clifford text-white p-2 rounded-lg shadow-md hover:bg-red-700">
              <a href="index.php?controleur=gestionadmin&action=formaddvoiture">
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
                    <th scope="col" class="p-4">Marque</th>
                    <th scope="col" class="p-4">Modèle</th>
                    <th scope="col" class="p-4">Année</th>
                    <th scope="col" class="p-4">Energie</th>
                    <th scope="col" class="p-4">Transmission</th>
                    <th scope="col" class="p-4">Motorisation</th>
                    <th scope="col" class="p-4">Prix</th>
                    <th scope="col" class="p-4">Kilométrage</th>
                    <th scope="col" class="p-4">Portes</th>
                    <th scope="col" class="p-4">Places</th>
                    <th scope="col" class="p-4">Couleur</th>
                    <th scope="col" class="p-4">Chevaux fiscaux</th>
                    <th scope="col" class="p-4">Chevaux réels</th>
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
                      <th scope="col" class="p-4"><?php echo $voiture['TRANSMISSION'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['MOTORISATION'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['PRIX'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['KILOMETRAGE'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['PORTES'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['PLACES'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['COULEUR'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['CVFISC'] ?></th>
                      <th scope="col" class="p-4"><?php echo $voiture['CVR'] ?></th>
                      <th scope="col" class="p-4">
                        <form method="post" action="#">
                          <input type="hidden" value=<?php echo "\"".$voiture['ID']."\"" ?> name="id"/>
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