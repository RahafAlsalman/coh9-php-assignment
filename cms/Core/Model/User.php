<?php

namespace Core\Model;

use Core\Base\Model;

class User extends Model
{

    const ADMIN = array(
        "item:read","item:create","item:update","item:delete",
        "user:read","user:create","user:update","user:delete",
        "transaction:create","transaction:update","transaction:delete","transaction:read",
        "tag:read", "tag:create", "tag:update", "tag:delete"
    );

    const  SELLER = array(
        "item:read", "item:create", "item:update","item:delete"
    );
    const PROCUREMENT=array();

       const accountan=array();
       



    public function check_username(string $username)
    {
        $result = $this->connection->query("SELECT * FROM $this->table WHERE username='$username'");
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

    public function get_permissions(): array
    {
        $permissions = array();
        $user = $this->get_by_id($_SESSION['user']['user_id']);
        if ($user) {
          $permissions = \explode(',', $user->permissions);
         //  $permissions = \unserialize($user->permissions);
         
        }
        return $permissions;	
    }
}
