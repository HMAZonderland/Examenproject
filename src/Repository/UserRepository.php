<?php
namespace ANPNews\Repository;
use ANPNews\Model\Customer;
use ANPNews\Model\User;

class UserRepository extends Repository
{
    public function getUser($id)
    {
        $query = 'SELECT `user`.* FROM `user` WHERE `user`.`id` = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        $user = $statement->fetchObject(User::class);
        return $user;
    }

    public function addUser(string $username, string $password, Customer $customer, string $firstname = null, string $lastname = null) : User
    {
        // prehash the password, have to use later on
        $password = password_hash($password, PASSWORD_BCRYPT);

        // define the first part of the query
        $query = 'INSERT INTO `user` (`user`.`username`, `user`.`password`, `user`.`customer_id` ';

        // prepare the required statements
        $statements = [
            ':username' => $username,
            ':password' => $password,
            ':customer_id' => $customer->id
        ];

        // can optionally be added
        if (!is_null($firstname)) {
            $query .= ', `user`.`firstname`';
            $statements = array_merge($statements, [':firstname' => $firstname]);
        }

        if (is_null($lastname)) {
            $query .= ', `user`.`lastname`';
            $statements = array_merge($statements, [':lastname' => $firstname]);
        }

        // close the query, start the VALUES part
        $query .= ') VALUES (:username, :password, :customer_id ';

        // optional values
        if (!is_null($firstname)) {
            $query .= ', :firstname';
        }

        if (is_null($lastname)) {
            $query .= ', :lastname';
        }

        // close the query
        $query .= ')';

        // create a statement (prepared)
        $statement = $this->db->prepare($query);
        $statement->execute($statements); // insert the prepared statements and run the query
        $id = $this->db->lastInsertId(); // fetch last id

        // craeate and return a new User object
        $user = new User();
        $user->id = $id;
        $user->username = $username;
        $user->password = $password;
        $user->customer = $customer;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        return $user;
    }

    public function login(string $username, string $password)
    {
        $query = 'SELECT `user`.* FROM `user` WHERE `user`.`username` = :username';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':username', $username);
        $statement->execute();

        $row = $statement->fetch(\PDO::FETCH_BOTH);
        if (empty($row)) {
            return null;
        }

        if (!password_verify($password, $row['password'])) {
            return null;
        }

        $user = $this->getUser($row['id']);
        return $user;
    }
}