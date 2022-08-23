<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array("https://lineagett.github.io/wallpapers/01.png", 
    "https://lineagett.github.io/wallpapers/02.png",
    "https://lineagett.github.io/wallpapers/03.jpg",
    "https://lineagett.github.io/wallpapers/04.jpg",
    "https://lineagett.github.io/wallpapers/05.jpg",
    "https://lineagett.github.io/wallpapers/06.jpg",
    "https://lineagett.github.io/wallpapers/07.png",
    "https://lineagett.github.io/wallpapers/08.png",
    "https://lineagett.github.io/wallpapers/09.png",
    "https://lineagett.github.io/wallpapers/10.png",
    "https://lineagett9.github.io/wallpapers/11.jpg",
    "https://lineagett.github.io/wallpapers/12.png",
    "https://lineagett.github.io/wallpapers/13.jpg",
    "https://lineagett.github.io/wallpapers/14.jpg",
    "https://lineagett.github.io/wallpapers/15.jpg",
    "https://lineagett.github.io/wallpapers/16.jpg",
	"https://lineagett.github.io/wallpapers/17.jpg");

$randomRedirection = $myLinks[array_rand($myLinks)];
header("Location: $randomRedirection");
?>

</body>
</html>
