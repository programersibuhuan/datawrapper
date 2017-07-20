<?php



/**
 * This class defines the structure of the 'basemap' table.
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
class BasemapTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'datawrapper.map.BasemapTableMap';

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
        $this->setName('basemap');
        $this->setPhpName('Basemap');
        $this->setClassname('Basemap');
        $this->setPackage('datawrapper');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'VARCHAR', true, 128, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', true, 128, null);
        $this->addColumn('regions', 'Regions', 'VARCHAR', false, 128, null);
        $this->addColumn('borders', 'Borders', 'VARCHAR', false, 128, null);
        $this->addColumn('aspect', 'Aspect', 'FLOAT', false, null, null);
        $this->addColumn('projection', 'Projection', 'VARCHAR', false, 512, null);
        $this->addColumn('bounding_box', 'BoundingBox', 'VARCHAR', false, 512, null);
        $this->addColumn('area', 'Area', 'BIGINT', false, null, null);
        $this->addColumn('keys', 'Keys', 'CLOB', false, null, null);
        $this->addColumn('raw_data', 'RawData', 'CLOB', false, null, null);
        $this->addColumn('mapshaper_parameters', 'MapshaperParameters', 'CLOB', false, null, null);
        $this->addColumn('topojson', 'Topojson', 'CLOB', false, null, null);
        $this->addColumn('outline_topojson', 'OutlineTopojson', 'CLOB', false, null, null);
        $this->addColumn('last_edit_step', 'LastEditStep', 'INTEGER', false, null, null);
        $this->addColumn('is_public', 'IsPublic', 'BOOLEAN', false, 1, true);
        $this->addColumn('published_map', 'PublishedMap', 'CLOB', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // BasemapTableMap
