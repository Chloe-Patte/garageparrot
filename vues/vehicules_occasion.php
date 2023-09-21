<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">   
  <form method="post" action="index.php?controleur=gestionvisiteur&action=majstock">
    <div class="max-w-screen-sm mx-auto border p-4 shadow-lg rounded-xl">
      <h2 class="text-center font-bold text-2xl py-4">Rechercher</h2>
      <div class="grid gap-4 grid-cols-2 grid-rows-1">
        <div>
          <label for="kmMin" class="block mb-2 text-sm text-left font-medium text-gray-900">Kilométrage min</label>
          <input type="text" id="kmMin" name="kmMin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
        <div>
          <label for="kmMax" class="block mb-2 text-sm text-left font-medium text-gray-900">Kilométrage max</label>
          <input type="text" id="kmMax" name="kmMax" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
        <div>
          <label for="anneeMin" class="block mb-2 text-sm text-left font-medium text-gray-900">Année min</label>
          <input type="text" id="anneeMin" name="anneeMin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
        <div>
          <label for="anneeMax" class="block mb-2 text-sm text-left font-medium text-gray-900">Année max</label>
          <input type="text" id="anneeMax" name="anneeMax" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
        <div>
          <label for="prixMin" class="block mb-2 text-sm text-left font-medium text-gray-900">Prix min</label>
          <input type="text" id="prixMin" name="prixMin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
        <div>
          <label for="prixMax" class="block mb-2 text-sm text-left font-medium text-gray-900">Prix max</label>
          <input type="text" id="prixMax" name="prixMax" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="" required>
        </div>
      </div>
      <div class="py-4">
        <button type="submit" class="py-3 px-5 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Rechercher</button>
      </div>
    </div>
  </form>
  <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10 pt-10">
    <?php
      foreach($lesVoitures as $voiture){
    ?>
      <div class="rounded overflow-hidden shadow-lg">
      <?php echo "<a href=\"index.php?controleur=gestionvisiteur&action=consultervoitures&id=" . $voiture['ID'] . "\">"; ?>
          <div class="relative">
              <img class="w-full" src="./images/mercedes-vito-blanc/avant.png" alt="Voiture rouge des années 90">
                <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
              <div class="absolute bottom-0 right-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out"><?php echo $voiture['PRIX'] . '€' ?></div>
          </div>
          <div class="text-left px-6 py-4">
            <div class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out"><?php echo $voiture['MARQUE'].' '.$voiture['MODELE']?></div>
              <p class="text-gray-500 text-sm"><?php echo $voiture['MOTORISATION'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['ENERGIE'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['TRANSMISSION'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['ANNEE'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['KILOMETRAGE'] ?></p>
          </div>
          <div class="px-6 pt-4 pb-4">
            <span class="inline-block bg-clifford rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-4">
              Voir cette voiture
            </span>
          </div>
      </a>
      </div>
    <?php
      }
    ?>
    </div>
</div>