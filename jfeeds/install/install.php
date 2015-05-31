<?php
/**
* @author      Laurent Jouanneau
* @copyright   2015 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 */
class jfeedsModuleInstaller extends jInstallerModule {

    function install() {

        if (!$this->firstExec('config')) {
            return;
        }

        if (null == $this->config->getValue('rss2.0','responses', null, true)) {
            $this->config->setValue('rss2.0','jfeeds~jResponseRss20','responses', null, true);
        }
        if (null == $this->config->getValue('atom1.0','responses', null, true)) {
            $this->config->setValue('atom1.0','jfeeds~jResponseAtom10','responses', null, true);
        }
    }
}
