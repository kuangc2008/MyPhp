<?php
function _session_open($save_path,$session_name)
{
	global $handle;
	$handle = mysql_connect('localhost','root','root') or die('���ݿ�����ʧ��');		// ����MYSQL���ݿ�
	mysql_select_db('db_database11',$handle) or die('���ݿ���û�д˿���');				// �ҵ����ݿ�
	return(true);
}

function _session_close()
{
	global $handle;
	mysql_close($handle);
	return(true);
}

function _session_read($key)
{
	global $handle;							// ȫ�ֱ���$handle �������ݿ�
	$time = time();							// �趨��ǰʱ��
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
	$result = mysql_query($sql,$handle);
	$row = mysql_fetch_array($result);
	if ($row)
	{
		return($row['session_data']);			// ����Session���Ƽ�����
	}else
	{
		return(false);
	}
}

function _session_write($key,$data)
{
	global $handle;
	$time = 60*60;										// ����ʧЧʱ��
	$lapse_time = time() + $time;						// �õ�Unixʱ���
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
	$result = mysql_query($sql,$handle);
	if (mysql_num_rows($result) == 0 )				// û�н��
	{
		$sql = "insert into tb_session values('$key','$data',$lapse_time)";		// �������ݿ�sql���
		$result = mysql_query($sql,$handle);
	}else
	{
		$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";												// �޸����ݿ�sql���
		$result = mysql_query($sql,$handle);
	}
	return($result);
}

function _session_destroy($key)
{
	global $handle;
	$sql = "delete from tb_session where session_key = '$key'";					// ɾ�����ݿ�sql���
	$result = mysql_query($sql,$handle);
	return($result);
}

function _session_gc($expiry_time)
{
	global $handle;
	$lapse_time = time();									// ������$expiry_time��ֵΪ��ǰʱ���
	$sql = "delete from tb_session where expiry_time < $lapse_time";	// ɾ�����ݿ�sql���
	$result = mysql_query($sql,$handle);
	return($result);
}

session_set_save_handler('_session_open','_session_close','_session_read','_session_write','_session_destroy','_session_gc');

session_start();

$_SESSION['user'] = 'mr';
$_SESSION['pwd'] = 'mrsoft';
?>