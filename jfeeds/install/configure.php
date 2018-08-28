<?php
/**
 * @author      Laurent Jouanneau
 * @copyright   2018 Laurent Jouanneau
 * @link        http://www.jelix.org
 * @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
 */

class jfeedsModuleConfigurator extends \Jelix\Installer\Module\Configurator {


    public function configure() {
        if (null == $this->getConfigIni()->getValue('rss2.0','responses')) {
            $this->getConfigIni()->setValue('rss2.0','jfeeds~jResponseRss20','responses');
        }
        if (null == $this->getConfigIni()->getValue('atom1.0','responses')) {
            $this->getConfigIni()->setValue('atom1.0','jfeeds~jResponseAtom10','responses');
        }
    }


}
