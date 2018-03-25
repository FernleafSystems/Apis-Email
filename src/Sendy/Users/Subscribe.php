<?php

namespace FernleafSystems\ApiWrappers\Email\Sendy\Users;

use FernleafSystems\ApiWrappers\Email\Common\Data\CleanNames;

/**
 * Class Subscribe
 * @package FernleafSystems\ApiWrappers\Email\Sendy\Users
 */
class Subscribe extends Base {

	/**
	 * @param string $sName
	 * @return $this
	 */
	public function setFirstName( $sName ) {
		return $this->setRequestDataItem( 'fname', $sName );
	}

	/**
	 * @param string $sName
	 * @return $this
	 */
	public function setLastName( $sName ) {
		return $this->setRequestDataItem( 'lname', $sName );
	}

	/**
	 * @param string $sName
	 * @return $this
	 */
	public function setName( $sName ) {
		$aParts = ( new CleanNames() )->name( $sName );
		return $this->setRequestDataItem( 'name', implode( ' ', $aParts ) )
					->setFirstName( $aParts[ 0 ] )
					->setLastName( $aParts[ 1 ] );
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'subscribe';
	}
}