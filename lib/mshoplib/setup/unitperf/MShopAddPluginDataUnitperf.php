<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 201
 * @license LGPLv3, http://www.arcavias.com/en/license
 */


/**
 * Adds default records to plugin table.
 */
class MW_Setup_Task_MShopAddPluginDataUnitperf extends MW_Setup_Task_MShopAddPluginData
{
	/**
	 * Returns the list of task names which this task depends on.
	 *
	 * @return string[] List of task names
	 */
	public function getPreDependencies()
	{
		return array( 'MShopAddTypeDataUnitperf' );
	}


	/**
	 * Executes the task for MySQL databases.
	 */
	protected function _mysql()
	{
		$this->_process();
	}
}