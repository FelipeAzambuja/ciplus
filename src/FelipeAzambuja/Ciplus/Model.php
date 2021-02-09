<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FelipeAzambuja\Ciplus;

/**
 * Description of Model
 *
 * @author felipe
 */
class Model extends \CodeIgniter\Model {

    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null) {
        parent::__construct($db, $validation);
        $c = new ReflectionClass($this);
        $this->tempReturnType = $c->getName();
        $this->protectFields = false;
        if (!$this->table) {
            $this->table = strtolower($c->getShortName());
        }
    }

}
