<?php
/**
 * polish language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Michał Tkacz <mehow@autocom.pl>
 * @author     Grzegorz Żur <grzegorz.zur@gmail.com>
 */
$lang['menu'] = 'Menadżer wtyczek'; 

// custom language strings for the plugin
$lang['download'] = "Ściągnij i zainstaluj nową wtyczkę";
$lang['manage'] = "Zainstalowane Wtyczki";

$lang['btn_info'] = 'info';
$lang['btn_update'] = 'aktualizuj';
$lang['btn_delete'] = 'usuń';
$lang['btn_settings'] = 'ustawienia';
$lang['btn_download'] = 'pobierz';

$lang['url'] = 'URL';

$lang['installed'] = 'Instalacja:';
$lang['lastupdate'] = 'Ostatnio zaktualizowana:';
$lang['source'] = 'Źródło:';
$lang['unknown'] = 'nieznane';

// ..ing = header message
// ..ed = success message

$lang['updating'] = 'Aktualizuję...';
$lang['updated'] = 'Aktualizacja wtyczki %s pomyślnie ściągnięta';
$lang['updates'] = 'Aktualizacje następujących wtyczek zostały pomyślnie ściągnięte';
$lang['update_none'] = 'Nie znaleziono aktualizacji.';

$lang['deleting'] = 'Usuwam...';
$lang['deleted'] = 'Wtyczka %s usunięta.';

$lang['downloading'] = 'Pobieram...';
$lang['downloaded'] = 'Wtyczka %s pomyślnie zainstalowana';
$lang['downloads'] = 'Następujące wtyczki zostały pomyślnie zainstalowane:';
$lang['download_none'] = 'Nie znaleziono wtyczek lub wystąpił nieznany problem podczas ściągania i instalacji.';

// info titles
$lang['plugin'] = 'Wtyczka:';
$lang['components'] = 'Składniki';
$lang['noinfo'] = 'Ta wtyczka nie zwróciła żadnych informacji, może być niepoprawna.';
$lang['name'] = 'Nazwa:';
$lang['date'] = 'Data:';
$lang['type'] = 'Typ:';
$lang['desc'] = 'Opis:';
$lang['author'] = 'Autor:';
$lang['www'] = 'WWW:';
    
// error messages
$lang['error'] = 'Wystąpił nieznany błąd.';
$lang['error_download'] = 'Nie powiodło się ściągnięcie pliku wtyczki: %s';
$lang['error_badurl'] = 'Prawdopodobnie zły url - nie da się ustalić nazwy pliku na podstawie urla';
$lang['error_dircreate'] = 'Nie powiodło się stworzenie tymczasowego katalogu na pobrane pliki';
$lang['error_decompress'] = 'Menadżer wtyczek nie był w stanie rozpakować ściągniętego pliku. '.
            'Może to być spowodowane przez nieudany transfer (w takim przypadku powinieneś spróbować ponownie) '.
            'lub nieznany format kompresji (w takim przypadku będziesz musiał ściągnąć i zainstalować wtyczkę ręcznie).';
$lang['error_copy'] = 'Wystąpił błąd podczas kopiowania pliku w trakcie instalacji wtyczki %s: '.
            'być może dysk jest pełny lub prawa dostępu są niepoprawne. '.
            'Efektem może być częściowo zainstalowana wtyczka co może spowodować niestabilność Twojej instalacji wiki.';   
$lang['error_delete']     = 'Wystąpił błąd przy próbie usunięcia wtyczki <em>%s</em>. '.
                            'Prawdopodobną przyczyną są niewystarczające uprawnienia do katalogu.';

//Setup VIM: ex: et ts=2 enc=utf-8 :
