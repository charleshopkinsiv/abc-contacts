<?php


namespace Abc\model;


class ContactModel extends Model 
{

    private static $default_phone_type = "Mobile";

    public function find(int $id)
    {

        $sql = "SELECT * FROM contacts c 
                LEFT JOIN phone_numbers p ON c.id = p.contact
                WHERE p.default_number = 'Y'
                AND c.id = " . $id;
        $contacts = $this->db->query($sql)->single();
        return $contacts;  
    }

    public function delete(int $id)
    {

        $sql = "DELETE FROM contacts  
                WHERE  id = " . $id;
        $this->db->query($sql)->execute();

        $sql = "DELETE FROM phone_numbers 
                WHERE  contact = " . $id;
        $this->db->query($sql)->execute();
    }

    public function getAll()
    {

        $sql = "SELECT * FROM contacts c 
                LEFT JOIN phone_numbers p ON c.id = p.contact
                WHERE p.default_number = 'Y'
                ORDER BY id DESC";
        $contacts = $this->db->query($sql)->resultSet();
        return $contacts;        
    }

    public function getAllSearch($search)
    {

        $sql = "SELECT * FROM contacts c 
                LEFT JOIN phone_numbers p ON c.id = p.contact
                WHERE p.default_number = 'Y' 
                AND (c.first_name LIKE '%" . $search . "%'
                OR c.last_name LIKE '%" . $search . "%' 
                OR c.middle_name LIKE '%" . $search . "%' 
                OR c.title LIKE '%" . $search . "%' 
                OR p.number LIKE '%" . $search . "%' 
                OR c.email LIKE '%" . $search . "%')";
        $contacts = $this->db->query($sql)->resultSet();
        return $contacts;        
    }

    public function insert(array $data)
    {


        $sql = "INSERT INTO contacts 
                SET first_name = '" . $data['first_name'] . "', 
                    last_name = '" . $data['last_name'] . "',
                    email = '" . $data['email'] . "',
                    prefix = '" . $data['prefix'] . "',
                    suffix = '" . $data['suffix'] . "',
                    title = '" . $data['title'] . "'";
        $this->db->query($sql)->execute();
        $id = $this->db->lastId();

        $sql = "INSERT INTO phone_numbers 
                SET number = '" . $data['phone_number'] . "', 
                    contact = " . $id . ",
                    type = '" . self::$default_phone_type . "', 
                    default_number = 'Y'";
        $this->db->query($sql)->execute();
    }

    public function update(array $data)
    {

        $sql = "UPDATE contacts 
                SET first_name = '" . $data['first_name'] . "', 
                    last_name = '" . $data['last_name'] . "',
                    email = '" . $data['email'] . "',
                    prefix = '" . $data['prefix'] . "',
                    suffix = '" . $data['suffix'] . "',
                    title = '" . $data['title'] . "'
                WHERE id = " . $data['id'];
        $this->db->query($sql)->execute();
    }
}