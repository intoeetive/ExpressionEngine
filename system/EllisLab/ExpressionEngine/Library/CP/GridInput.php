<?php

namespace EllisLab\ExpressionEngine\Library\CP;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		http://ellislab.com/expressionengine/user-guide/license.html
 * @link		http://ellislab.com
 * @since		Version 3.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine Grid Input Class
 *
 * @package		ExpressionEngine
 * @subpackage	Library
 * @category	CP
 * @author		EllisLab Dev Team
 * @link		http://ellislab.com
 */

class GridInput extends Table {

	/**
	 *
	 * @param	array 	$config	See above for options
	 */
	public function __construct($config = array())
	{
		$defaults = array(
			'limit'		 => 0,
			'sortable'	 => FALSE,
			'grid_input' => TRUE,
			'reorder'	 => TRUE,
			'field_name' => 'grid'
		);

		parent::__construct(array_merge($defaults, $config));
	}

	/**
	 * Convenience method for initializing a Grid Input object, currently
	 * doesn't do much but we may use it later to inject certain dependencies
	 *
	 * @param	array 	$columns	Column names and settings
	 * @return  object	New GridInput object
	 */
	public static function create($config = array())
	{
		return new GridInput($config);
	}

	/**
	 * Set the empty row elements for new/empty rows in a Grid input table,
	 * this row will be the basis for any new rows added and should contain
	 * the HTML of an empty field in each column
	 *
	 * @param	array	$row	Array of empty field elements to be duplicated
	 *                   		for each new row the user creates
	 * @return  void
	 */
	public function setBlankRow($row)
	{
		if (count($row) != count($this->columns))
		{
			throw new \InvalidArgumentException('Grid must have the same number of columns as the set columns.');
		}

		$this->config['grid_blank_row'] = $row;

		// Call this in case blank row is being set after data is set
		$this->setData($this->data);
	}

	/**
	 * Set and normalizes the data for the table.
	 * 
	 * Overrides the parent setData to add our blank row to the bottom.
	 *
	 * @param	array 	$data	Table data
	 * @return  void
	 */
	public function setData($data)
	{
		if (isset($this->config['grid_blank_row']))
		{
			$data[] = array(
				'attrs'   => array('class' => 'grid-blank-row'),
				'columns' => $this->config['grid_blank_row']
			);
		}

		parent::setData($data);
	}

	/**
	 * Returns the table configuration and data in a format ready to be
	 * processed by the _shared/table view.
	 *
	 * This method override for Grid also namepaces any form inputs inside
	 * the table to nest all the inputs inside a single array for when the
	 * form is submitted.
	 *
	 * @param	URL	$base_url	URL object of the base URL used for setting
	 *                      	the search and sort criteria for sorting and
	 *                      	pagination URLs
	 * @return	array			Array of view variables, structure is below
	 */
	public function viewData($base_url = NULL)
	{
		$view_data = parent::viewData($base_url);

		// We'll use this in our lambda functions below
		$grid = $this;

		// Namespace existing rows in Grid
		foreach ($view_data['data'] as &$row)
		{
			$row['columns'] = array_map(function($field) use ($grid, $row)
			{
				$row_id = (isset($row['attrs']['row_id'])) ? 'row_id_'.$row['attrs']['row_id'] : 'new_row_0';
				return $grid->namespace_for_grid($field, $row_id);
			}, $row['columns']);

			// This no longer needs to be here
			unset($row['attrs']['row_id']);
		}

		return $view_data;
	}

	/**
	 * Performes find and replace for input names in order to namespace them
	 * for a POST array
	 *
	 * @param	string	$search		String to search
	 * @param	string	$replace	String to use for replacement
	 * @return	string	String with namespaced inputs
	 */
	public function namespace_inputs($search, $replace)
	{
		return preg_replace(
			'/(<[input|select|textarea][^>]*)name=["\']([^"\'\[\]]+)([^"\']*)["\']/',
			$replace,
			$search
		);
	}

	/**
	 * Namespaces inputs specifically for a Grid field
	 *
	 * @param	string	$search	String to search
	 * @param	string	$row_id	Unique identifier for row
	 * @return	string	String with namespaced inputs
	 */
	private function namespace_for_grid($search, $row_id = 'new_row_0')
	{
		return $this->namespace_inputs(
			$search,
			'$1name="'.$this->config['field_name'].'[rows]['.$row_id.'][$2]$3"'
		);
	}
}

// END CLASS

/* End of file URL.php */
/* Location: ./system/EllisLab/ExpressionEngine/Library/CP/GridInput.php */