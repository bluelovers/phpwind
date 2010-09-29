<?php
!defined('P_W') && exit('Forbidden');

class PW_MemberdataDB extends BaseDB {
	var $_tableName = "pw_memberdata";
	var $_primaryKey = 'uid';
	
	function get($id) {
		return $this->_get($id);
	}
	
	function insert($fieldData) {
		return $this->_insert($fieldData);
	}
	
	function update($fieldData, $id) {
		return $this->_update($fieldData, $id);
	}
	
	function updates($fieldData, $ids) {
		if (!$this->_check() || !$fieldData || empty($ids)) return false;
		$this->_db->update("UPDATE " . $this->_tableName . " SET " . $this->_getUpdateSqlString($fieldData) . " WHERE " . $this->_primaryKey . " IN (" . $this->_getImplodeString($ids) . ")");
		return $this->_db->affected_rows();
	}
	
	function increase($userId, $increments) {
		$userId = intval($userId);
		if ($userId <= 0 || !is_array($increments)) return 0;
		
		$incrementStatement = array();
		foreach ($increments as $field => $offset) {
			$offset = intval($offset);
			if (!$offset) continue;
			$incrementStatement[] = $field . "=" . $field . "+" . $offset;
		}
		if (empty($incrementStatement)) return 0;
		
		$this->_db->update("UPDATE " . $this->_tableName . " SET " . implode(", ", $incrementStatement) . " WHERE uid=" . $this->_addSlashes($userId));
		return $this->_db->affected_rows();
	}
	
	function delete($id) {
		return $this->_delete($id);
	}
	
	function getOnlineUsers($onlineTime) {
		$query = $this->_db->query("SELECT uid FROM " . $this->_tableName . " WHERE thisvisit >= " . $this->_addSlashes($onlineTime));
		return $this->_getAllResultFromQuery($query);
	}
}
?>