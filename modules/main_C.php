<?php
class Main_C{
    private $_data;
    private $_objSesion;
    private $_objModel;
    private $_objView;

    public function __construct($data, $_objSesion)
    {
        $this->_data=$data;
        $this->_objSesion = $_objSesion;
        $this->_objModel = new Main_M();
        $this->_objView = new Main_V();

    }
}


?>