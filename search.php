<?php
  $pages = [naruto.html,onepiece.html,attackontitan.html,rocketleague.html,gtav.html,clashroyale.html];
  $userSearch = ['naruto','one piece','attque des titans', 'rocket league','gta v','clash royale'];
  $search = $_POST ['Search'];

if (array_key_exists($search, $userSearch) {
  $enabledSearch = array_search($search, $userSearch)
}
// vérifier et chercher la valeur du tableau $userSearch associé à la recherche du user
elseif (array_key_exists($enabledSearch, $pages)) {
  header('Location:'arrayToSelect($enabledSearch))
}
// vérifier si une valeur correspond au tableau $pages, puis extraire la valeur de $enabledSearch associée à $pages pour la localiser avec header()
?>
