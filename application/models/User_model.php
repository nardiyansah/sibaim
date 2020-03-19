<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  // menghitung persenan donasi
  function persen_donasi($target_donasi){
    
    // mendapatkan row terakhir di table donasi
    $last_row = $this->db->order_by('id_donasi', 'DESC')->limit(1)->get('donasi')->result_array();
    // ambil indeks ke-0
    $donasi = $last_row[0];
    
    // menghitung persen
    $persen = (($donasi['total_langsung_donasi']+$donasi['total_kitabisa_donasi']) / $target_donasi) * 100;
    
    // desimal 2 angka dibelakan koma
    return round($persen,2);

  }

}

/* End of file User_model.php */
