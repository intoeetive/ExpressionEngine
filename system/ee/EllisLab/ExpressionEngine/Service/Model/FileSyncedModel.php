<?php

namespace EllisLab\ExpressionEngine\Service\Model;

use EllisLab\ExpressionEngine\Library\Filesystem\Filesystem;

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		https://ellislab.com/expressionengine/user-guide/license.html
 * @link		http://ellislab.com
 * @since		Version 3.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine File Synced Model
 *
 * A parent model that allows some of the model data to be stored and edited
 * on disk, for example to store templates as files.
 *
 * @package		ExpressionEngine
 * @category	Service
 * @subpackage	Model
 * @author		EllisLab Dev Team
 * @link		http://ellislab.com
 */
abstract class FileSyncedModel extends Model {

	protected static $_events = array(
		'afterLoad',
		'afterDelete',
		'afterSave',
		'afterUpdate'
	);

	/**
	 * Get the full server path to the file
	 *
	 * @return String Full file path
	 */
    abstract public function getFilePath();

	/**
	 * Get modification time as the database believes to be true.
	 *
	 * The value returned here is compared to the file mtime on load and
	 * the database value is updated from the file if the file mtime is newer.
	 *
	 * @return Int Last modificaiton time of the model
	 */
	 abstract public function getModificationTime();

	 /**
 	 * Set modification time in the database.
 	 *
 	 * This is called if the model has to automatically do a sync.
	 *
	 * @param Int $mtime The new last modified time
	 * @return void
 	 */
	abstract public function setModificationTime($mtime);

	/**
	 * Given an array of old model data, get that file path. Used to
	 * sync renames.
	 *
	 * @param Array $previous Assoc array of old model data
	 * @return String Full file path
	 */
	abstract protected function getPreviousFilePath($previous);

	/**
	 * Take the current model information and return a string of whatever
	 * it is that should be synced to the file.
	 *
	 * @return String File data
	 */
    abstract protected function serializeFileData();

	/**
	 * Given the file data, set any fields that need to be set.
	 *
	 * @param String $str The current file data
	 */
    abstract protected function unserializeFileData($str);

	/**
	 * After loading the row from the database, ensure that the file exists and
	 * that the two data points are up to date.
	 */
	public function onAfterLoad()
	{
		$fs = new Filesystem();
		$path = $this->getFilePath();

		if (isset($path) && $fs->exists($path))
		{
		    $mtime = $fs->mtime($path);

		    if ($mtime > $this->getModificationTime())
		    {
				$this->unserializeFileData($fs->read($path));
				$this->setModificationTime($mtime);
		        $this->save();
		    }
		}
	}

	/**
	 * For all saves, write the template file with the new contents.
	 *
	 * Technically we could make this afterInsert and do more checks
	 * in afterUpdate to make sure things actually changed, but this
	 * is much simpler.
	 */
	public function onAfterSave()
	{
		$fs = new Filesystem();
		$path = $this->getFilePath();

		if (isset($path) && $fs->exists($fs->dirname($path)))
		{
			$fs->write($path, $this->serializeFileData(), TRUE);
		}
	}

	/**
	 * If the template is updated, we need to make sure things like
	 * renames or changes in template group are reflected in the
	 * filesystem. We do this by simply deleting the old file, since
	 * our afterSave event will always write a new one.
	 *
	 * @param Array Old values that were changed by this save
	 */
	public function onAfterUpdate($previous)
	{
		$fs = new Filesystem();
		$path = $this->getFilePath();
		$old_path = $this->getPreviousFilePath($previous);

		if ($path != $old_path && $fs->exists($old_path))
		{
			$fs->delete($old_path);
		}
	}

	/**
	 * If the template is deleted, remove the template file
	 */
	public function onAfterDelete()
	{
		$fs = new Filesystem();
		$path = $this->getFilePath();

		if (isset($path) && $fs->exists($path))
		{
			$fs->delete($path);
		}
	}

}
