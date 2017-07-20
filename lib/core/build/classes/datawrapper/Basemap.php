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
        $topo = json_decode(parent::getTopojson(), 1);

        $k = [];

        foreach ($keys as $key) {
            $data = [];

            if (isset($topo["objects"][parent::getRegions()])) {
                foreach ($topo["objects"][parent::getRegions()]["geometries"] as $geo) {
                    if (isset($geo["properties"][$key]))
                        $data[] = $geo["properties"][$key];
                }
            }

            $k[] = [
                "value" => $key,
                "label" => $key,
                "description" => $key,
                "dataset" => $data
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
