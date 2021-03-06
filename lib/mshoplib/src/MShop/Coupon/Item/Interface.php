<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2012
 * @license LGPLv3, http://www.arcavias.com/en/license
 * @package MShop
 * @subpackage Coupon
 */


/**
 * Generic interface for coupons created and saved by the coupon managers.
 *
 * @package MShop
 * @subpackage Coupon
 */
interface MShop_Coupon_Item_Interface extends MShop_Common_Item_Interface
{
	/**
	 * Returns the label of the coupon if available.
	 *
	 * @return string Name/label of the coupon item
	 */
	public function getLabel();

	/**
	 * Sets the label of the coupon item.
	 *
	 * @param string $name Name/label of the coupon item.
	 * @return void
	 */
	public function setLabel( $name );

	/**
	 * Returns the starting point of time, in which the coupon is available.
	 *
	 * @return string ISO date in YYYY-MM-DD hh:mm:ss format
	 */
	public function getDateStart();

	/**
	 * Sets a new starting point of time, in which the coupon is available.
	 *
	 * @param string $date New ISO date in YYYY-MM-DD hh:mm:ss format
	 * @return void
	 */
	public function setDateStart( $date );

	/**
	 * Returns the ending point of time, in which the coupon is available.
	 *
	 * @return string ISO date in YYYY-MM-DD hh:mm:ss format
	 */
	public function getDateEnd();

	/**
	 * Sets a new ending point of time, in which the coupon is available.
	 *
	 * @param string $date New ISO date in YYYY-MM-DD hh:mm:ss format
	 * @return void
	 */
	public function setDateEnd( $date );

	/**
	 * Returns the provider of the coupon.
	 *
	 * @return string Name of the provider which is the short provider class name
	 */
	public function getProvider();

	/**
	 * Sets the new provider of the coupon item which is the short name of the provider class name.
	 *
	 * @param string $provider Coupon provider, esp. short provider class name
	 * @return void
	 */
	public function setProvider( $provider );

	/**
	 * Returns the configuration of the coupon item.
	 *
	 * @return array Custom configuration values
	 */
	public function getConfig();

	/**
	 * Sets the new configuration for the coupon item.
	 *
	 * @param array $config Custom configuration values
	 * @return void
	 */
	public function setConfig( array $config );

	/**
	 * Returns the status of the coupon item.
	 *
	 * @return integer Status of the item
	 */
	public function getStatus();

	/**
	 * Sets the new status of the coupon item.
	 *
	 * @param integer $status Status of the item
	 * @return void
	 */
	public function setStatus( $status );

}
