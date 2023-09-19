<div class="max-w-screen-lg mx-auto">
  <!-- div prix, marque, modèle, motorisation, contact-->
  <?php $prix_formate = number_format($voiture[0]['PRIX'], 0, ''); ?>

  <div class="flex flex-wrap mb:20 sm:px-8 md:px-12 pt-8">
    <div class="w-full md:w-1/2 lg:w-2/6 px-4 text-center md:text-left lg:text-left">
      <h2 class="font-semibold text-gray-900 text-xl md:text-2xl lg:text-2xl xl:text-2xl md:ml-20 xl:ml-24">
        <?php echo $voiture[0]['MARQUE'].' '.$voiture[0]['MODELE'] ?>
      </h2>
      <h3 class="font-medium text-gray-600 text-medium md:text-xl lg:text-xl xl:text-xl md:ml-20 xl:ml-24">
        <?php echo $voiture[0]['MOTORISATION'] ?>
      </h3>  
    </div>
    <div class="w-full md:w-1/2 lg:w-2/6 px-4">
      <h2 class="font-bold text-clifford text-2xl md:text-2xl lg:text-3xl xl:text-3xl">
        <?php echo $prix_formate . '€' ?>
      </h2>
      <div class="flex justify-center">
        <a class="lg:hidden block text-white py-3 px-5 bg-clifford text-sm font-medium text-center rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300"
        href="index.php?controleur=gestionvisiteur&action=consulterfdc">
          <i class="lni lni-envelope"></i><i class="fa-solid fa-envelope" style="color: #ffffff"></i> 
          Contactez-nous
        </a>
      </div>
      
    </div>
    <div class="hidden lg:block lg:w-1/3">
      <a class="md:hidden-block text-white py-3 px-5 ml-6 mr-10 bg-clifford text-sm font-medium text-center rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300"
      href="index.php?controleur=gestionvisiteur&action=consulterfdc">
        <i class="lni lni-envelope"></i><i class="fa-solid fa-envelope" style="color: #ffffff"></i> 
        Contactez-nous
      </a>
    </div>
  </div>


  <!-- cards résumé voiture-->

  <div class="flex flex-wrap px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
    <div class="w-full md:w-1/2 lg:w-1/5 px-4 py-2 ">
      <div class="max-w-sm mx-auto py-6 rounded overflow-hidden shadow-lg bg-gray-100">
        <i class="fa-solid fa-calendar fa-xl" style="color: #d22027;"></i>
        <div>
          <div class="font-bold text-lg">Année</div>
          <p class="text-gray-700 text-base"> 
            <?php echo $voiture[0]['ANNEE'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/5 px-4 py-2 ">
      <div class="max-w-sm mx-auto py-6 rounded overflow-hidden shadow-lg bg-gray-100">
      <i class="fa-solid fa-road fa-xl" style="color: #d22027;"></i>
        <div>
          <div class="font-bold text-lg">Kilométrage</div>
          <p class="text-gray-700 text-base"> 
            <?php echo $voiture[0]['KILOMETRAGE'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/5 px-4 py-2 ">
      <div class="max-w-sm mx-auto py-6 rounded overflow-hidden shadow-lg bg-gray-100">
        <i class="fa-solid fa-gas-pump fa-xl" style="color: #d22027;"></i>
        <div>
          <div class="font-bold text-lg">Énergie</div>
          <p class="text-gray-700 text-base"> 
            <?php echo $voiture[0]['ENERGIE'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/5 px-4 py-2 ">
      <div class="max-w-sm mx-auto py-6 rounded overflow-hidden shadow-lg bg-gray-100">
        <i class="fa-solid fa-sort fa-xl" style="color: #d22027;"></i>
        <div>
          <div class="font-bold text-lg">Transmission</div>
          <p class="text-gray-700 text-base"> 
            <?php echo $voiture[0]['TRANSMISSION'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/5 px-4 py-2 ">
      <div class="max-w-sm mx-auto py-6 rounded overflow-hidden shadow-lg bg-gray-100">
        <i class="fa-solid fa-gauge-simple-high fa-xl" style="color: #d22027;"></i>
        <div>
          <div class="font-bold text-lg">Puissance</div>
          <p class="text-gray-700 text-base"> 
            <?php echo $voiture[0]['CVR'] ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- détails de la voiture-->
  <h2 class="text-gray-900 text-center font-bold text-3xl mt-10 underline underline-offset-8 decoration-clifford">
    Détails
  </h2>
  <!-- carrosserie et habitacle-->
  <h3 class="text-gray-900 text-left font-semibold text-2xl px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
    Carrosserie & habitacle
  </h3>
  <div class="px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
      <ul class="w-full md:mr-10 lg:mr-10 xl:mr-10 text-left">
        <div class="grid grid-cols-2">
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Classe véhicule</p>
          <p>SUV</p>
        </li>
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Sellerie</p>
          <p>Tissu</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Places</p>
          <p>5</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Couleur</p>
          <p>Rouge</p>
        </li>
        </div>
        <div class="grid grid-cols-2">
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Portes</p>
          <p>5</p>
        </li>
        </div>
      </ul>
  </div>
  <!-- moteur,transmission et conso-->
  <h3 class="text-gray-900 text-left font-semibold text-2xl px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
    Moteur, transmission & consommation
  </h3>
  <div class="px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
      <ul class="w-full md:mr-10 lg:mr-10 xl:mr-10 text-left">
        <div class="grid grid-cols-2">
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Transmission</p>
          <p>Traction</p>
        </li>
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Consommation moyenne</p>
          <p>4,4L/100km</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Cylindrée</p>
          <p>800 ccm</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Émissions CO2</p>
          <p>100g/km</p>
        </li>
        </div>
      </ul>
  </div>
  <!-- historique du véhicule-->
  <h3 class="text-gray-900 text-left font-semibold text-2xl px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
    Historique du véhicule
  </h3>
  <div class="px-8 md:px-16 lg:px-32 xl:px-32 pt-8">
      <ul class="w-full pr-10 text-left">
        <div class="grid grid-cols-2">
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Pays d'origine</p>
          <p>France</p>
        </li>
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Usage commercial antérieur</p>
          <p>Non</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Nombre de clefs</p>
          <p>2</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">État du véhicule</p>
          <p>Bon état général</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Dernière révision le</p>
          <p>10/07/2023</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Contrôle technique valable jusqu'au</p>
          <p>12/07/2025</p>
        </li>
        </div>
      </ul>
  </div>

  <!-- équipements du véhicule-->
  <h2 class="text-gray-900 text-center font-bold text-3xl mt-10 underline underline-offset-8 decoration-clifford">
    Équipements
  </h2>
  <div class="px-8 md:px-16 lg:px-32 xl:px-32 pt-8 pb-8">
      <ul class="w-full pr-10 text-left">
        <div class="grid grid-cols-2">
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Climatisation manuelle</p>
        </li>
        <li class="w-full border-t-2 border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Essuis-glace automatique</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Limiteur & régulateur de vitesse</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Volant avec palettes</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Radar de stationnement arrière</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Toit panoramique</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Volant multifonction</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Lecteur CD</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Système audio/radio</p>
        </li>
        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4">
          <p class="font-semibold">Prises jack & USB</p>
        </li>
        </div>
      </ul>
  </div>
</div>