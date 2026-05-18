<?php
defined("IN_FORMA") or die('Direct access is forbidden.');

require_once($GLOBALS['where_lms'] . '/class.module/learning.object.php');

class Learning_planetmpv extends Learning_Object
{
    public function __construct($id = null)
    {
        parent::__construct($id);
        
        $this->obj_type = 'planetmpv';
    }
    
    public function create($back_url)
    {
        Util::jump_to($back_url);
    }
    
    public function edit($id, $back_url)
    {
        $this->id = $id;
        
        Util::jump_to($back_url);
    }
    
    public function play($id, $id_param, $back_url)
    {
        echo '<h1>Modulo Presa Visione</h1>';
        echo '<p>Hello world</p>';
    }
    
    public function del($id, $back_url = null)
    {
        return true;
    }
    
    public function copy($id, $back_url = null)
    {
        return true;
    }
    
    public function canBeMilestone(): bool
    {
        return true;
    }
}