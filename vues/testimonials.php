<div class="container mx-auto pt-16 pb-8"> 
  <div class="pb-12">
    <h2 class="text-2xl xl:text-4xl font-bold text-gray-900 mx-auto text-center xl:text-left pb-4">Commentaires de nos clients</h1>
    <p class="text-xl text-gray-600 xl:w-3/4 w-11/12 mx-auto xl:mx-0 text-center sm:text-left">
      Vous pouvez, vous aussi, nous laisser un commentaire<a class="text-clifford" href="index.php?controleur=gestionvisiteur&action=consultercomment"> en cliquant ici.</a></p>
  </div>
   
  <section id="carousel ">
     
    <figure class="visible">
    
      <div class="flex flex-wrap justify-around" id="comment-container">
      <?php
        foreach($lesCommentaires as $commentaire){
    ?>
        <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:pb-0 pb-12">
          <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
              <div class="bg-clifford pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                <p class="text-xl text-white pb-1"><?php echo $commentaire['PRENOM'].' '.$commentaire['NOM']?></p>
                <p class="text-base text-gray-200"><?php echo $commentaire['MOTIF']?></p>
              </div>
              <p class="text-base text-center py-4"><?php echo $commentaire['NOTE']?>/5</p>

              <!--<div class="flex items-center space-x-1" id="note" name="note"<?php echo$commentaire['NOTE'] ?>>
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
            </div>-->
              <div class="pl-6 pr-6 pt-10 relative h-64">
                <p class="text-base text-gray-600 leading-8"><?php echo $commentaire['MESSAGE'] ?></p>
                  <div class="flex justify-end mt-2">
                    <svg width="44" height="37" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                        fill="#667EEA"
                        fill-rule="evenodd"
                        fill-opacity=".15"/>
                    </svg>
                  </div>
              </div>
          </div>
        </div>
        <?php
        }
    ?>
      </div>
    </figure>
    
</section>
    
</div>
