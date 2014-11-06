<?php


/**
 * This class defines the structure of the 'UserGroup' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Sep 30 06:33:12 2010
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class UsergroupTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.UsergroupTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('UserGroup');
		$this->setPhpName('Usergroup');
		$this->setClassname('Usergroup');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Subscription', 'Subscription', RelationMap::ONE_TO_MANY, array('id' => 'UserGroup_id', ), 'CASCADE', null);
    $this->addRelation('Reservation', 'Reservation', RelationMap::ONE_TO_MANY, array('id' => 'UserGroup_id', ), 'CASCADE', null);
    $this->addRelation('UsergroupHasUser', 'UsergroupHasUser', RelationMap::ONE_TO_MANY, array('id' => 'UserGroup_id', ), 'CASCADE', null);
    $this->addRelation('UsergroupHasChief', 'UsergroupHasChief', RelationMap::ONE_TO_MANY, array('id' => 'UserGroup_id', ), 'CASCADE', null);
    $this->addRelation('UsergroupHasActivity', 'UsergroupHasActivity', RelationMap::ONE_TO_MANY, array('id' => 'UserGroup_id', ), 'CASCADE', null);
	} // buildRelations()

} // UsergroupTableMap