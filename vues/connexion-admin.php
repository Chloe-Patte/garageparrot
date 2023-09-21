<div class="w-20 h-20 ml-6 mt-2">
  <a href= "index.php" > <?php echo $image[1] ?></a>
</div>
<div class="py-4 lg:py-1 px-4 mx-auto max-w-screen-md">
  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
    Se connecter à l'espace administrateur
  </h2>
  <form method="POST" action="index.php?controleur=gestionadmin&action=connexion" class="space-y-8">
    <div>
      <label for="email" class="block mb-2 text-sm text-left font-medium text-gray-900">Adresse e-mail</label>
      <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre adresse e-mail">
    </div>
    <div>
      <label for="mdp" class="block mb-2 text-sm text-left font-medium text-gray-900">Mot de passe</label>
      <input type="password" id="mdp" name="mdp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre mot de passe">
    </div>
    <button type="submit" name="valider" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Se connecter</button>
  </form>
  <p>
    <?php
      if(isset($message)){
        echo $message;
      }
    ?>
  </p>
</div>