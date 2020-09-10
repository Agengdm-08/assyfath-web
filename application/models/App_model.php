<?php
class App_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function manualQuery($q)
	{
		return $this->db->query($q);
	}

	function master($master)
	{
		$q = $this->db->query("select * from $master");
		return $q;
	}

	function simpan($tabel, $data)
	{
		$s = $this->db->insert($tabel, $data);
		return $s;
	}

	function edit($tabel, $seleksi)
	{
		$query = $this->db->query("select * from $tabel where $seleksi");
		return $query;
	}

	public function detail($tabel, $kolom, $seleksi)
	{
		$query = $this->db->query("select * from $tabel where $kolom = $seleksi");
		return $query;
	}

	function update($tabel, $isi, $seleksi)
	{
		$this->db->where($seleksi, $isi[$seleksi]);
		$this->db->update($tabel, $isi);
	}

	function hapus($id, $seleksi, $tabel)
	{
		$this->db->where($seleksi, $id);
		$this->db->delete($tabel);
	}

	function login($username, $pass)
	{
		$username_clear = stripslashes(strip_tags(htmlspecialchars($username, ENT_QUOTES)));
		$pass_clear = stripslashes(strip_tags(htmlspecialchars($pass, ENT_QUOTES)));
		$query = $this->db->query("select * from user WHERE username='$username_clear' AND passwordid='$pass_clear' AND statusaktif='1'");
		return $query;
	}

	public function countAll($table)
	{
		$query = "SELECT count(id) as jumlah FROM $table";
		return $this->db->query($query);
	}

	public function countWhere($table, $field, $isi)
	{
		$query = "SELECT count(id) as jumlah FROM $table WHERE $field ='$isi'";
		return $this->db->query($query);
	}
}
