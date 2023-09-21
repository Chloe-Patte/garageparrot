<div class="w-20 h-20 ml-6 mt-2">
      <a href="index.php"> <img src="http://nunesaccount.alwaysdata.net/test/garagevparrot.png" alt="Logo du site"></a>
</div>
<section class="bg-white">
  <div class="py-4 lg:py-1 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contactez-nous</h2>
      <p class="mb-8 lg:mb-12 font-light text-center text-gray-500 sm:text-xl">Vous avez besoin d'informations complémentaires concernant le véhicule <?php echo $voitureInfo['marque'].' '.$voitureInfo['modele'].' ' .$voitureInfo['annee'] ?> ? Faites-le nous savoir.</p>
      <form method="post" action="index.php?controleur=gestionvisiteur&action=sendmail" class="space-y-8">
          <div>
              <label for="subject" class="block mb-2 text-sm text-left font-medium text-gray-900">Sujet</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" value= "<?php echo $voitureInfo['marque'].' ' .$voitureInfo['modele'].' ' .$voitureInfo['annee'] ?>">
          </div>
          <div class="grid gap-4 grid-cols-2 grid-rows-1">
            <div>
              <label for="last name" class="block mb-2 text-sm text-left font-medium text-gray-900">Nom</label>
              <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre nom" required>
            </div>
            <div>
              <label for="first name" class="block mb-2 text-sm text-left font-medium text-gray-900">Prénom</label>
              <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre prénom" required>
            </div>
          </div>
          <div class="grid gap-4 grid-cols-2 grid-rows-1">
          <div>
              <label for="email" class="block mb-2 text-sm text-left font-medium text-gray-900">Adresse e-mail</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre adresse e-mail" required>
          </div>
          <div>
              <label for="phone" class="block mb-2 text-sm text-left font-medium text-gray-900">Numéro de téléphone</label>
              <input type="phone number" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre n° de téléphone" required>
          </div>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm text-left font-medium text-gray-900">Votre message</label>
              <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Écrivez votre message ici"></textarea>
          </div>
          <a href="index.php" class="text-gray-600">Annuler</a>
          <button type="submit" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Envoyer</button>
      </form>
  </div>
</section>