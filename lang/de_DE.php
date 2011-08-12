<?php

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['ImageGalleryPage']['SINGULARNAME'] = 'Bildergalerie';
$lang['de_DE']['ImageGalleryPage']['PLURALNAME'] = 'Bildergalerien';
$lang['de_DE']['ImageGalleryAlbum']['ALBUMNAME'] = 'Name des Albums';
$lang['de_DE']['ImageGalleryAlbum']['ALBUMTITLE'] = 'Album Titel';
$lang['de_DE']['ImageGalleryAlbum']['COVERIMAGE'] = 'Titelbild';
$lang['de_DE']['ImageGalleryAlbum']['DESCRIPTION'] = 'Beschreibung';
$lang['de_DE']['ImageGalleryItem']['ALBUM'] = 'Album';
$lang['de_DE']['ImageGalleryItem']['CAPTION'] = 'Bildbeschreibung';
$lang['de_DE']['ImageGalleryManager']['CHOOSEALBUM'] = 'Album auswählen';
$lang['de_DE']['ImageGalleryManager']['DATAOBJECTMANAGER'] = 'ImageGallery benötigt das DataObjectManager Modul.';
$lang['de_DE']['ImageGalleryManager']['ERROR'] = 'Fehler';
$lang['de_DE']['ImageGalleryManager']['ROTATECLOCKWISE'] = 'Im Uhrzeigersinn drehen';
$lang['de_DE']['ImageGalleryManager']['ROTATECOUNTERCLOCKWISE'] = 'Gegen den Uhrzeigersinn drehen';
$lang['de_DE']['ImageGalleryManager']['ROTATING'] = 'Drehe';
$lang['de_DE']['ImageGalleryManager']['UPLOADFROMPC'] = 'Von meinem Computer hochladen';
$lang['de_DE']['ImageGalleryManager']['UPLOADIMAGES'] = 'Bilder hochladen';
$lang['de_DE']['ImageGalleryManager']['UPLOADIMAGESTO'] = 'Bilder nach "%s" hochladen';
$lang['de_DE']['ImageGalleryPage']['ALBUM'] = 'Album';
$lang['de_DE']['ImageGalleryPage']['ALBUMCOVERIMAGES'] = 'Titelbilder Album';
$lang['de_DE']['ImageGalleryPage']['ALBUMS'] = 'Alben';
$lang['de_DE']['ImageGalleryPage']['ALBUMSNOTSAVED'] = 'Sie können Alben zur Galerie hinzufügen sobald die Galerie das erste mal gespeichert wurde.';
$lang['de_DE']['ImageGalleryPage']['ANALBUM'] = 'Ein Album';
$lang['de_DE']['ImageGalleryPage']['CONFIGURATION'] = 'Konfiguration';
$lang['de_DE']['ImageGalleryPage']['IMAGES'] = 'Bilder';
$lang['de_DE']['ImageGalleryPage']['IMAGESPERPAGE'] = 'Anzahl Bilder pro Seite';
$lang['de_DE']['ImageGalleryPage']['MAXFILES'] = 'Maximale Anzahl Dateien in Upload Warteschlange';
$lang['de_DE']['ImageGalleryPage']['NOALBUMS'] = 'Sie haben keine Alben. Klicken sie auf den Alben Tab und legen Sie mindestens ein Album an um Fotos hinzuzufügen.';
$lang['de_DE']['ImageGalleryPage']['NORMALSIZE'] = 'Normale Größe (Pixel)';
$lang['de_DE']['ImageGalleryPage']['PHOTOS'] = 'Fotos';
$lang['de_DE']['ImageGalleryPage']['PHOTOSNOTSAVED'] = 'Sie können Fotos zur Galerie hinzufügen sobald die Galerie das erste mal gespeichert wurde.';
$lang['de_DE']['ImageGalleryPage']['POPUPSTYLE'] = 'Popup';
$lang['de_DE']['ImageGalleryPage']['THUMBNAILSIZE'] = 'Größe Thumbnails (Pixel)';
$lang['de_DE']['ImageGalleryPage']['THUMBNAILHEIGHT'] = 'Höhe Thumbnails (Pixel)';
$lang['de_DE']['ImageGalleryPage']['TO'] = 'zu';
$lang['de_DE']['ImageGalleryPage']['CROPTOSQUARE'] = 'Quadratische Thumbnails';
$lang['de_DE']['ImageGalleryPage']['MEDIUMSIZE'] = 'Mittlere Größe (Pixel)';
$lang['de_DE']['ImageGalleryPage']['NORMALHEIGHT'] = 'Normale Höhe (Pixel)';
$lang['de_DE']['ImageGalleryPage']['VIEWDEMO'] = 'Demo anzeigen';
$lang['de_DE']['ImageGalleryPage']['WIDTH'] = 'Breite';
$lang['de_DE']['ImageGalleryPage']['HEIGHT'] = 'Höhe';
$lang['de_DE']['ImageGalleryPage.ss']['ALBUMSINGALLERY'] = 'Alben in %s';
$lang['de_DE']['ImageGalleryPage_album.ss']['GOTOALBUM'] = 'Zu Album %s';
$lang['de_DE']['ImageGalleryPage_album.ss']['NEXT'] = 'Nächste';
$lang['de_DE']['ImageGalleryPage_album.ss']['NEXTALBUM'] = 'Nächstes Album';
$lang['de_DE']['ImageGalleryPage_album.ss']['PREVIOUS'] = 'Vorige';
$lang['de_DE']['ImageGalleryPage_album.ss']['PREVIOUSALBUM'] = 'Voriges Album';
$lang['de_DE']['ImageGalleryPage_album.ss']['VIEWNEXTPAGE'] = 'Nächste Seite';
$lang['de_DE']['ImageGalleryPage_album.ss']['VIEWPAGENUMBER'] = 'Seite Nummer %s anzeigen';
$lang['de_DE']['ImageGalleryPage_album.ss']['VIEWPREVIOUSPAGE'] = 'Vorige Seite';

?>