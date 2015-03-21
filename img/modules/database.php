<?php

class SQL
{
    var $c;
    function SQL()
    {
        $this->c = mysql_connect('localhost', 'chamoygz_eoadmin', 'Order#532') or die(mysql_error());
        mysql_select_db('chamoygz_easyorder', $this->c) or die(mysql_error());
    }


    function query($query)
    {
        $a = mysql_query($query, $this->c);
        return $a;
    }

    function Close()
    {
        mysql_close($this->c);
    }

    function get_food($type){
        $result = $this->query("SELECT * FROM producto WHERE type='$type'");
        $items = array();
        while($row = mysql_fetch_array($result)){
            $items[] = array(
                "name" => $row['name'],
                "description" => $row['description'],
                "img" => $row['img'],
                "price" => $row['price']
            );
        return $items;
        }
    }
}

$database = new SQL;

?>