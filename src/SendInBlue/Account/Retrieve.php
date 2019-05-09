<?php

namespace FernleafSystems\ApiWrappers\Email\SendInBlue\Account;

use FernleafSystems\ApiWrappers\Email\SendInBlue\Api;

/**
 * Class Retrieve
 * @package FernleafSystems\ApiWrappers\Email\SendInBlue\Account
 */
class Retrieve extends Api {

	const REQUEST_METHOD = 'get';

	/**
	 * @return AccountVO
	 */
	protected function getVO() {
		return new AccountVO(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'account';
	}
}