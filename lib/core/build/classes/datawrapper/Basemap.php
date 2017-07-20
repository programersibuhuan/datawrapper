<?php



/**
 * Skeleton subclass for representing a row from the 'basemap' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.datawrapper
 */
class Basemap extends BaseBasemap
{
    public function getMeta() {
        return array(
            "id" => $this->getId(),
            "title" => $this->getTitle(),
            "regions" => $this->getRegions(),
            "borders" => $this->getBorders(),
            "aspect" => $this->getAspect(),
            "proj" => $this->getProjection()
        );
    }

    public function getKeyIds() {
        return json_decode(parent::getKeys(), 1);
    }

    public function getKeys() {
        $keys = json_decode(parent::getKeys(), 1);
        $k = [];

        foreach ($keys as $key) {
            $k[] = [
                "value" => $key,
                "label" => $key,
                "description" => $key
            ];
        }

        return $k;
    }

    public function setLastEditStep($v)
    {
        $val = $this->getLastEditStep();
        if ($v <= $val) return;
        return parent::setLastEditStep($v);
    }

    public function getPublishedKeyColumn($key) {
        $published = $this->getPublishedMap();
        $topojson = json_decode($published["topojson"], 1);

        $objects = $topojson["objects"][$published["regions"]]["geometries"];
        $keys = [];

        foreach ($objects as $obj) {
            $keys[] = $obj["properties"][$key];
        }

        return $keys;
    }

    public function getPublishedMap() {
        return json_decode(parent::getPublishedMap(), 1);
    }
}
