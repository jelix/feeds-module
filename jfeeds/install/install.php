<?php
/**
* @author      Laurent Jouanneau
* @copyright   2015 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 */
class jfeedsModuleInstaller extends jInstallerModule2 {

    function installEntrypoint(jInstallerEntryPoint2 $entryPoint) {

        if (!$this->firstExec('config')) {
            return;
        }

        if (null == $entryPoint->getConfigIni()->getValue('rss2.0','responses')) {
            $this->getConfigIni()->setValue('rss2.0','jfeeds~jResponseRss20','responses');
        }
        if (null == $entryPoint->getConfigIni()->getValue('atom1.0','responses')) {
            $this->getConfigIni()->setValue('atom1.0','jfeeds~jResponseAtom10','responses');
        }
    }
}
