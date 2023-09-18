<div class="w-20 h-20 ml-6 mt-2">
      <a href="index.php"> <img src="images/Garage V.Parrot.png"></a>
</div>
<section class="bg-white">
  <div class="py-4 lg:py-1 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Ajouter un commentaire</h2>
      <p class="mb-8 lg:mb-12 font-light text-center text-gray-500 sm:text-xl">Un nouveau commentaire arrive !</p>
      <form method="post" action="index.php?controleur=gestionadmin&action=ajoutercommentaire" class="space-y-8">
          <div class="grid gap-4 grid-cols-2 grid-rows-1">
            <div>
              <label for="nom" class="block mb-2 text-sm text-left font-medium text-gray-900">Nom</label>
              <input type="text" id="nom" name="nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Nom" required>
            </div>
            <div>
              <label for="prenom" class="block mb-2 text-sm text-left font-medium text-gray-900">Prénom</label>
              <input type="text" id="prenom" name="prenom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Prénom" required>
            </div>
          </div>
          <div class="grid gap-4 grid-cols-2 grid-rows-1">
            <div>
                <label for="email" class="block mb-2 text-sm text-left font-medium text-gray-900">Adresse e-mail</label>
                <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Adresse e-mail" required>
            </div>
            <div>
                <label for="motif" class="block mb-2 text-sm text-left font-medium text-gray-900">Motif</label>
                <input type="motif" id="motif" name="motif" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Motif" required>
            </div>
          </div>
          <div class="grid gap-4 grid-cols-2 grid-rows-1">
            <div>
                <label for="note" class="block mb-2 text-sm text-left font-medium text-gray-900">Note</label>
                <input type="note" id="note" name="note" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Note (1-5)" required>
            </div>
            <div>
                <label for="message" class="block mb-2 text-sm text-left font-medium text-gray-900">Message</label>
                <input type="message" id="message" name="message" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Message" required>
            </div>
          </div>
          <a href="index.php?controleur=gestionadmin&action=connexion" class="text-gray-600">Annuler</a>
          <button type="submit" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Ajouter</button>
      </form>
  </div>
</section>