<?php
/**
* @author      Loic Mathaud
* @author      Yannick Le Guédart
* @contributor Laurent Jouanneau
* @copyright   2005-2006 Loic Mathaud
* @copyright   2006 Yannick Le Guédart
* @copyright   2006-2015 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

require_once(__DIR__.'/jResponseXMLFeed.class.php');

/**
* Rss2.0 response
* @link http://blogs.law.harvard.edu/tech/rss
* @link http://www.stervinou.com/projets/rss/
* @since 1.0b1
*/
class jResponseRss20 extends jResponseXMLFeed {
    protected $_type = 'rss2.0';

    /**
     * Class constructor
     */
    function __construct () {
        $this->_template 	= new jTpl();
        $this->_mainTpl 	= 'jfeeds~rss20';

        $this->infos = new jRSS20Info ();

        parent::__construct ();
        $this->infos->language = $this->lang;
    }

    /**
     * Generate the content and send it.
     * @return boolean true if generation is ok, else false
     */
    final public function output (){
    
        if($this->_outputOnlyHeaders){
            $this->sendHttpHeaders();
            return true;
        }
        
        $this->_httpHeaders['Content-Type'] =
                'application/xml;charset=' . $this->charset;

        // let's generate the content
        $this->_template->assign ('rss', $this->infos);
        $this->_template->assign ('items', $this->itemList);
        $content = $this->_template->fetch ($this->_mainTpl);

        // no errors, we can send it
        $this->sendHttpHeaders ();
        echo '<?xml version="1.0" encoding="'. $this->charset .'"?>', "\n";
        $this->_outputXmlHeader ();
        echo $content;
        return true;
    }

    /**
     * create a new item
     * @param string $title the item title
     * @param string $link  the link
     * @param string $date  the date of the item
     * @return jXMLFeedItem
     */
    public function createItem($title,$link, $date){
        $item = new jRSS20Item();
        $item->title = $title;
        $item->id = $item->link = $link;
        $item->published = $date;
        return $item;
    }
}
