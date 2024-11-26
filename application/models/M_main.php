<?php

class M_main extends CI_Model {
	function get_($table, $columns, $where = "", $orderby = "") {
		$query = "SELECT $columns FROM $table";
		$query.= $where? " WHERE $where" : "";
		$query.= $orderby? " ORDER BY $orderby" : "";

		return $this->db->query($query)->result_array();
	}

	function add_($table, $data) {
		return $this->db->insert($table, $data);
	}

	function update_($table, $data, $where) {
		return $this->db->update($table, $data, $where);
	}

	function delete_($table, $where) {
		return $this->db->delete($table, $where);
	}
}

?>