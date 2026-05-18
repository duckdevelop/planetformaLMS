<?php
defined("IN_FORMA") or die('Direct access is forbidden.');

require_once($GLOBALS['where_lms'] . '/class.module/track.object.php');

class Track_planetmpv extends Track_Object
{
    protected $resource_id;
    protected $params_id;
    protected $back_url;

    public function __construct(
        $track_id = null,
        $resource_id = null,
        $params_id = null,
        $back_url = null
    ) {
        $this->objectType = 'planetmpv';

        parent::__construct($track_id);

        $this->resource_id = $resource_id;
        $this->params_id = $params_id;
        $this->back_url = $back_url;
    }

    public function getIdTrack(
        $idReference,
        $idUser,
        $idResource,
        $createOnFail = false
    ) {
        return [true, 0];
    }

    public function deleteTrackInfo($id_lo, $id_user)
    {
        return true;
    }

    public function loadReport($idUser = false, $mvc = false)
    {
        echo 'Nessun report disponibile';
    }
}