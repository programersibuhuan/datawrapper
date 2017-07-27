<?php



/**
 * This class defines the structure of the 'region' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.datawrapper.map
 */
class RegionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'datawrapper.map.RegionTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('region');
        $this->setPhpName('Region');
        $this->setClassname('Region');
        $this->setPackage('datawrapper');
        $this->setUseIdGenerator(true);
        $this->setIsCrossRef(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', true, 128, null);
        $this->addColumn('aspect', 'Aspect', 'FLOAT', false, null, null);
        $this->addColumn('projection', 'Projection', 'VARCHAR', false, 512, null);
        $this->addColumn('area', 'Area', 'BIGINT', false, null, null);
        $this->addColumn('bounding_box', 'BoundingBox', 'VARCHAR', false, 512, null);
        $this->addColumn('outline_topojson', 'OutlineTopojson', 'CLOB', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Basemap', 'Basemap', RelationMap::ONE_TO_MANY, array('id' => 'region_id', ), null, null, 'Basemaps');
    } // buildRelations()

} // RegionTableMap
