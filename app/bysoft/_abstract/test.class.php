<?php
namespace bysoft\_abstract;

class Test implements \bysoft\interfaces\Test {
    const STATUS_OK = 1;
    const STATUS_RUNNING = 0;
    const STATUS_FAIL = -1;
    
    protected $errMessage = null;
    protected $status = null;
    
    public function __construct(){
        $this->status = self::STATUS_RUNNING;
    }
    
    public function run(){
        
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function __toString(){
        return $this->errMessage;
    }
    
}