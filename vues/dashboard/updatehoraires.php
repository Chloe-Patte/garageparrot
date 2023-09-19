<tr>
  <th scope="col" class="p-4"><?php echo $horaire['ID'] ?></th>
  <th scope="col" class="p-4"><?php echo $horaire['JOUR'] ?></th>
  <th scope="col" class="p-4"><input type="text" name="matin" value="<?php echo $horaire['MATIN'] ?>"></th>
  <th scope="col" class="p-4"><input type="text" name="apresmidi" value="<?php echo $horaire['APRESMIDI'] ?>"></th>
  <th scope="col" class="p-4">
    <form method="post" action="index.php?controleur=gestionadmin&action=modifierhoraire">
      <input type="hidden" value=<?php echo "\"".$horaire['ID']."\"" ?> name="id"/>
      <input type="submit" value="Enregistrer">
    </form>
  </th>
</tr>
