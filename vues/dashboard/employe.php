
<div class="pt-12" id="employe">
  <h2 class="text-2xl font-bold text-center">
    Employés
  </h2>
    <!-- Start block -->
      <section class="p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <div class="text-center w-32 mb-4">
            <div class="bg-clifford text-white p-2 rounded-lg shadow-md hover:bg-red-700">
              <a href="index.php?controleur=gestionadmin&action=formaddemploye">
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
                    <th scope="col" class="p-4">Nom</th>
                    <th scope="col" class="p-4">Prénom</th>
                    <th scope="col" class="p-4">Mail</th>
                    <th scope="col" class="p-4">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($lesEmployes as $employe){
                  ?>
                    <tr>
                      <th scope="col" class="p-4"><?php echo $employe['ID'] ?></th>
                      <th scope="col" class="p-4"><?php echo $employe['NOM'] ?></th>
                      <th scope="col" class="p-4"><?php echo $employe['PRENOM'] ?></th>
                      <th scope="col" class="p-4"><?php echo $employe['EMAIL'] ?></th>
                      <th scope="col" class="p-4">
                        <form method="post" action="index.php?controleur=gestionadmin&action=supprimeremploye">
                          <input type="hidden" value=<?php echo "\"".$employe['ID']."\"" ?> name="id"/>
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