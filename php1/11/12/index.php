<?php
class Session
{
	private $db;				// �������ݿ����
	private $expiry = 3600;		// ����SessionʧЧʱ��	
	
	public function Session()
	{
		session_set_save_handler(array(& $this,'_session_open'),
								array(& $this,'_session_close'),
								array(& $this,'_session_read'),
								array(& $this,'_session_write'),
								array(& $this,'_session_destroy'),
								array(& $this,'_session_gc')
		);	
	}	
	
	public function _session_open($save_path,$session_name)
	{
		$this->db = mysql_connect('localhost','root','root') or die ("���ݿ�����ʧ�ܣ�");
		mysql_select_db("db_database11",$this->db);
		return(true);
	}
	
	public function _session_close()
	{
		mysql_close($this->db);
		return(true);
	}
	
	public function _session_read($key)
	{
		$time = time();							// �趨��ǰʱ��
		$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
		$result = mysql_query($sql,$this->db);
		$row = mysql_fetch_array($result);
		if ($row)
		{
			return($row['session_data']);			// ����Session���Ƽ�����
		}else
		{
			return(false);
		}
	}
	
	public function _session_write($key,$data)
	{
		$lapse_time = time() + $this->time;					// �õ�Unixʱ���
		$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
		$result = mysql_query($sql,$this->db);
		if (mysql_num_rows($result) == 0 )				// û�н��
		{
			$sql = "insert into tb_session values('$key','$data',$lapse_time)";		// �������ݿ�sql���
			$result = mysql_query($sql,$this->db);
		}else
		{
			$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";												// �޸����ݿ�sql���
			$result = mysql_query($sql,$this->db);
		}
		return($result);
	}
	
	public function _session_destroy($key)
	{
		$sql = "delete from tb_session where session_key = '$key'";					// ɾ�����ݿ�sql���
		$result = mysql_query($sql,$this->db);
		return($result);
	}
	
	public function _session_gc($expiry_time)
	{
		$expiry_time = time();									// ������$expiry_time��ֵΪ��ǰʱ���
		$sql = "delete from tb_session where expiry_time < $expiry_time";	// ɾ�����ݿ�sql���
		$result = mysql_query($sql,$this->db);
		return($result);
	}
}
$_session_new = new Session();
session_start();

$_SESSION['SID'] = true;
?>