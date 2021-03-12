<!--<nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="projets.php">Projets</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
        <li><a href="infos-technique.php">Infos techniques</a></li>
    </ul>
</nav>  -->

<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Accueil' ),
'cv' => array( 'CV' ),
'projets' => array('Projets'),
'hobbies' => array('Hobbies'),
'infostechniques' => array('Infos techniques')
);
//...
echo'<nav class="menu">
<ul>';
foreach($mymenu as $pageId => $pageParameters) {
    if ($pageId==$currentPageId){
        echo'<li><a id="currentpage" href="index.php?page='.$pageParameters[0].'">'.$pageParameters[0].'</a></li>';
    }
    else {
        echo'<li><a href="index.php?page='.$pageParameters[0].'">'.$pageParameters[0].'</a></li>';
    }
}
echo'</ul>
</nav>';
}
?>
