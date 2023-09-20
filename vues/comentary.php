<div class="w-20 h-20 ml-6 mt-2">
      <a href="index.php"> <img src="images/Garage V.Parrot.png"></a> 
</div>
<section class="bg-white">
    <div class="py-4 lg:py-1 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Laissez-nous un commentaire</h2>
        <p class="mb-8 lg:mb-12 font-light text-center text-gray-500 sm:text-xl">Vous souhaitez partager votre expérience, nous serons ravis de lire votre commentaire</p>
        <form method="post" action="index.php?controleur=gestionvisiteur&action=sauvegardercommentaire" class="space-y-8">
            <div>
                <label for="motif" class="block mb-2 text-sm text-left font-medium text-gray-900">Votre dernière visite</label>
                <input type="text" id="motif" name="motif" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Motif de votre visite">
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="nom" class="block mb-2 text-sm text-left font-medium text-gray-900">Nom</label>
                    <input type="text" id="nom" name="nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre nom">
                </div>
                <div>
                    <label for="prenom" class="block mb-2 text-sm text-left font-medium text-gray-900">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Votre prénom" required>
                </div>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm text-left font-medium text-gray-900">Adresse e-mail</label>
                <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Entrez votre adresse e-mail" required>
            </div>
            
            <label for="note" class="block text-sm text-left font-medium text-gray-900">Note</label>
            <div class="flex items-center space-x-1" id="note" name="note">
                <svg id="star-1" data-id="1" class="star" value=1 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg id="star-2" data-id="2" class="star" value=2 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg id="star-3" data-id="3" class="star" value=3 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg id="star-4" data-id="4" class="star" value=4 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg id="star-5" data-id="5" class="star" value=5 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
            </div>
            <input name="note" type="hidden" value="0"/>
            <script>
                const stars = document.querySelectorAll('.star');
                const note = document.querySelector('input[name="note"]');

                stars.forEach(star => {
                    star.addEventListener('click', () => {
                        const starId = star.getAttribute('data-id');
                        for (let i = 1; i <= 5; i++) {
                            const currentStar = document.getElementById(`star-${i}`);
                            if (i <= starId) {
                                currentStar.classList.add('active');
                                note.setAttribute = ('value', starId);
                            } else {
                                currentStar.classList.remove('active');
                            }
                        }

                        note.value = starId;
                    });
                });
            </script>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm text-left font-medium text-gray-900">Votre commentaire</label>
                <textarea id="message" name="message" rows="6" required minlength="1" maxlength="150" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Écrivez votre commentaire ici. Maximum 150 caractères."></textarea>
            </div>
            <a href="index.php" class="text-gray-600">Annuler</a>
            <button type="submit" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Poster mon commentaire</button>
        </form>
    </div>
</section>