<?php

class User extends CActiveRecord
{
    // Metode ini mengembalikan instance model
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    // Menentukan tabel database yang dihubungkan oleh model ini
    public function tableName()
    {
        return 'user'; // Nama tabel di database Anda
    }

    // Aturan validasi (opsional, sesuaikan dengan kebutuhan)
    public function rules()
    {
        return array(
            array('username, password', 'required'),
            array('username', 'length', 'max' => 50),
            array('password', 'length', 'max' => 255),
            array('email', 'length', 'max' => 100),
            // Aturan lain sesuai kebutuhan
        );
    }
}
