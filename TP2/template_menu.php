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
function renderMenuToHTML($currentPageId, $lang) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Accueil', 'Home' ),
'cv' => array( 'CV', 'Resume' ),
'projets' => array('Projets', 'Projects'),
'hobbies' => array('Hobbies', 'Hobbies'),
);
//...
echo'<nav class="menu">
<ul>';
if($lang=='en'){
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId==$currentPageId){
            echo'<li><a id="currentpage" href="index.php?page='.$pageId.'&lang='.$lang.'">'.$pageParameters[1].'</a></li>';
        }
        else {
            echo'<li><a href="index.php?page='.$pageId.'&lang='.$lang.'">'.$pageParameters[1].'</a></li>';
        }
    }}
else{
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId==$currentPageId){
            echo'<li><a id="currentpage" href="index.php?page='.$pageId.'&lang='.$lang.'">'.$pageParameters[0].'</a></li>';
        }
        else {
            echo'<li><a href="index.php?page='.$pageId.'&lang='.$lang.'">'.$pageParameters[0].'</a></li>';
        }
    }}

echo'</ul>
</nav>
<nav class="langue">
<ul>
<a href="index.php?page='.$currentPageId.'&lang=en">Anglais</a>;
<a href="index.php?page='.$currentPageId.'&lang=fr">Français</a>
</nav>
</ul>';
}
?>