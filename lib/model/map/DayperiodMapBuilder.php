<?php


/**
 * This class adds structure of 'DayPeriod' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 19/12/2012 10:11:00
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class DayperiodMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.DayperiodMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(DayperiodPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(DayperiodPeer::TABLE_NAME);
		$tMap->setPhpName('Dayperiod');
		$tMap->setClassname('Dayperiod');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11);

		$tMap->addColumn('START', 'Start', 'TIME', true, null);

		$tMap->addColumn('STOP', 'Stop', 'TIME', true, null);

		$tMap->addColumn('DAY_OF_WEEK', 'DayOfWeek', 'INTEGER', true, 11);

		$tMap->addForeignKey('ROOM_ID', 'RoomId', 'INTEGER', 'Room', 'ID', true, 11);

	} // doBuild()

} // DayperiodMapBuilder