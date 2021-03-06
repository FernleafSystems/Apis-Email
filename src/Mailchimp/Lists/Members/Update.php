<?php

namespace FernleafSystems\ApiWrappers\Email\Mailchimp\Lists\Members;

/**
 * Class Update
 * @package FernleafSystems\ApiWrappers\Email\Mailchimp\Lists\Members
 */
class Update extends Create {

	const REQUEST_METHOD = 'patch';

	/**
	 * @param string $sEmail
	 * @return MemberVO|null
	 */
	public function byEmail( $sEmail ) {
		$aResult = $this->setMemberId( $this->idFromEmail( $sEmail ) )
						->req()
						->getDecodedResponseBody();
		$oMember = null;
		if ( is_array( $aResult ) && !empty( $aResult ) ) {
			$oMember = ( new MemberVO() )->applyFromArray( $aResult );
		}
		return $oMember;
	}

	/**
	 * @param string $sId
	 * @return $this
	 */
	public function setMemberId( $sId ) {
		return $this->setParam( 'member_id', $sId );
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return sprintf( 'lists/%s/members/%s', $this->getListId(), $this->getParam( 'member_id' ) );
	}
}