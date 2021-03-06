<?php

namespace FernleafSystems\ApiWrappers\Email\ActiveCampaign\Contacts;

use FernleafSystems\ApiWrappers\Email\Common\CommonIterator;

/**
 * Class ContactsIterator
 * @package FernleafSystems\ApiWrappers\Email\ActiveCampaign\Contacts
 */
class ContactsIterator extends CommonIterator {

	/**
	 * @return ContactVO|mixed
	 */
	public function current() {
		return parent::current();
	}

	/**
	 * @return int
	 */
	public function getTotalSize() {
		if ( !isset( $this->nTotalSize ) ) {
			$this->nTotalSize = ( new Count() )
				->setConnection( $this->getConnection() )
				->count();
		}
		return $this->nTotalSize;
	}

	/**
	 * @param int $nPage
	 * @return ContactVO[]
	 */
	public function getPage( $nPage ) {
		return ( new RetrievePage() )
			->setConnection( $this->getConnection() )
			->retrieve( $nPage*$this->getPageSize(), $this->getPageSize() );
	}
}