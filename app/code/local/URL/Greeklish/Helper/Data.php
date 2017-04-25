<?php
/**
 * @category    URL
 * @package     URLGreeklish
 * @author		Paschaleris Triantafyllos ( paschaleris.gr )
 */
 

class URLGreeklish_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_GREEKLISH_GENERAL_ENABLED = 'urlgreeklish/general/enabled';
	
	/** Retrieve Greeklishs status
	 *
	 * @param int $storeId
	 * @return int
	 */
	public function greeklishEnabled($storeId = null){
		return Mage::getStoreConfig(self::XML_PATH_GREEKLISH_GENERAL_ENABLED, $storeId);
	}
	
}
