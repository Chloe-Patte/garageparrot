<div class="pt-12" id="horaires">
  <h2 class="text-2xl font-bold text-center">
    Horaires
  </h2>
    <!-- Start block -->
      <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">                        
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                  <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Jour</th>
                    <th scope="col" class="p-4">Matin</th>
                    <th scope="col" class="p-4">Après-midi</th>
                    <th scope="col" class="p-4">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($lesHoraires as $horaire){
                  ?>
                    <tr>
                      <th scope="col" class="p-4"><?php echo $horaire['ID'] ?></th>
                      <th scope="col" class="p-4"><?php echo $horaire['JOUR'] ?></th>
                      <th scope="col" class="p-4"><?php echo $horaire['MATIN'] ?></th>
                      <th scope="col" class="p-4"><?php echo $horaire['APRESMIDI'] ?></th>
                      <th scope="col" class="p-4">
                        <form method="post" action="index.php?controleur=gestionadmin&action=supprimeremploye">
                          <input type="hidden" value=<?php echo "\"".$horaire['ID']."\"" ?> name="id"/>
                            <button>
                              Modifier
                            </button>
                        </form>
                        
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