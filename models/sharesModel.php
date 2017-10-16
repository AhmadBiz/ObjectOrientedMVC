<?php
class sharesModel extends model {
    public function Index(){
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        print_r($rows);
    }
}