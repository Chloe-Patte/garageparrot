<section class="bg-white pt-10">
    <div class="py-4 lg:py-1 px-4 mx-auto ">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Modifier les horaires</h2>
        <p class="mb-8 lg:mb-12 font-light text-center text-gray-500 sm:text-xl">Vous modifier le <?php echo $horaire['JOUR']?>!</p>
        <form method="post" action="index.php?controleur=gestionadmin&action=updatehoraires" class="space-y-8">
            <input value="<?php echo $horaire['ID'] ?>" name="id" id="id" hidden/>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="matin" class="block mb-2 text-sm text-left font-medium text-gray-900">Matin</label>
                    <input value="<?php echo $horaire['MATIN'] ?>" type="text" id="matin" name="matin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Horaire du matin" required>
                </div>
                <div>
                    <label for="apresmidi" class="block mb-2 text-sm text-left font-medium text-gray-900">Modele</label>
                    <input value="<?php echo $horaire['APRESMIDI'] ?>" type="text" id="apresmidi" name="apresmidi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Horaire de l'après-midi" required>
                </div>
            </div>
            
            <a href="index.php?controleur=gestionadmin&action=connexion" class="text-gray-600">Annuler</a>
            <button type="submit" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Modifier</button>
        </form>
    </div>
</section>
