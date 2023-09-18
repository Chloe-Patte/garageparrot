<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
  <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
<!-- Card 1-->
    <?php
      foreach($lesVoitures as $voiture){
        $prix_formate = number_format($voiture['PRIX'], 0, ' ');
    ?>
      <div class="rounded overflow-hidden shadow-lg">
      <?php echo "<a href=\"index.php?controleur=gestionvisiteur&action=consultervoitures&id=" . $voiture['ID'] . "\">"; ?>
          <div class="relative">
              <img class="w-full" src="./images/voiture2.png" alt="Voiture rouge des années 90">
                <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
              <div class="absolute bottom-0 right-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out"><?php echo $prix_formate . '€' ?></div>
          </div>
          <div class="text-left px-6 py-4">
            <div class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out"><?php echo $voiture['MARQUE'].' '.$voiture['MODELE']?></div>
              <p class="text-gray-500 text-sm"><?php echo $voiture['MOTORISATION'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['ENERGIE'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['TRANSMISSION'] ?></p>
              <p class="text-gray-500 text-sm"><?php echo $voiture['ANNEE'] ?></p>
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