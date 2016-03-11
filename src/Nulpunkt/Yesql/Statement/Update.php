<?php

namespace Nulpunkt\Yesql\Statement;

class Update
{
    private $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function execute($db, $args)
    {
        $stmt = $db->prepare($this->sql);
        $stmt->execute($args[0]);
        return $stmt->rowCount();
    }
}
