<?php
/**
* @author      Sebastien Romieu
* @author   Florian Lonqueu-Brochard
* @copyright   2010 Sébastien Romieu
* @copyright   2012 Florian Lonqueu-Brochard
* @link        http://www.jelix.org
* @licence    GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

class jRSS20Reader extends jXMLFeedReader{
    

    protected function analyzeInfo() {
        $this->infos = new jRSS20Info();
        $this->infos->setFromXML($this->xml->channel);
    }
    

    protected function analyzeItems() {
        $this->items = array();
        
        foreach($this->xml->channel->item as $i) {
            $item = new jRSS20Item();
            $item->setFromXML($i);
            array_push($this->items, $item);
        }
    }
    
}