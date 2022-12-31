<?php

namespace Core\Model;

use Core\Base\Model;
use LDAP\Result;

class Transaction extends Model


{
    public function get_selling_price()
    {
        $result = $this->connection->query(" SELECT transactions.id, item_id,selling_price, quantity,total FROM transactions INNER JOIN items ON transactions.id=items.id");
        if ($result) { // if there is an error in the connection or if there is syntax error in the SQL.
                    if ($result->num_rows > 0) {
                        return $result->fetch_object();
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }

    }


    //  public function join()
    //  { 
    //     $result = $this->connection->query ("SELECT transactions.id, item_id, quantity,total FROM transactions INNER JOIN items WHERE transactions.item_id=items.id;
    //     ");
    //     if ($result) { // if there is an error in the connection or if there is syntax error in the SQL.
    //         if ($result->num_rows > 0) {
    //             return $result->fetch_object();
    //         } else {
    //             return false;
    //         }
    //     } else {
    //         return false;
    //     }
    //  }
}