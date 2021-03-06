<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelUser extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('user')->result_array();
    }

    public function getUser($id){
        $this->db->where('id_user',$id);
        return $this->db->get('user')->row_array();
    }

    public function loginUser($email,$password){
        $this->db->where('email', $email);  
        $this->db->where('passwordUser', $password);  
        $query = $this->db->get('user');  
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function insertUser($data){
        return $this->db->insert('user',$data);
    }

    public function updateUser($id,$data){
        $this->db->where('id_user',$id);
        return $this->db->update('user',$data);
    }

    public function deleteUser($id){
        $this->db->where('id_user',$id);
        return $this->db->delete('user');
    }

    public function insertDataAnak($data){
        return $this->db->insert('anak_user',$data);
    }
    public function updateDataAnak($id,$data){
        $this->db->where('id_user',$id);
        $this->db->update('anak_user',$data);
    }

    public function getDataAnak($id){
        $this->db->where('id_user',$id);
        return $this->db->get('anak_user')->result_array();
    }

    public function deleteAnakUser($id){
        $this->db->where('id_anak',$id);
        return $this->db->delete('anak_user');
    }
    
    //beli atau fungsi imunisasi dibawah
    
    public function insertDataPesanImunisasi($data){
        return $this->db->insert('imunisasipesan',$data);
    }

    public function updateDataPesanImunisasi($id,$data){
        $this->db->where('id_pesan',$id);
        $this->db->update('imunisasipesan',$data);
    }

    public function getDataPesanImunisasi($id){
        $this->db->where('id_pesan',$id);
        return $this->db->get('imunisasipesan')->result_array();
    }

    public function deletePesanImunisasi($id){
        $this->db->where('id_pesan',$id);
        return $this->db->delete('imunisasipesan');
    }

    //beli atau fungsi obar dibawah
    public function insertDataPesanObat($data){
        return $this->db->insert('imunisasipesan',$data);
    }

    public function updateDataPesanObat($id,$data){
        $this->db->where('id_pesanObat',$id);
        $this->db->update('pesanObat',$data);
    }

    public function getDataPesanObat($id){
        $this->db->where('id_pesanObat',$id);
        return $this->db->get('pesanObat')->result_array();
    }

    public function deletePesanObat($id){
        $this->db->where('id_pesanObat',$id);
        return $this->db->delete('pesanObat');
    }
}