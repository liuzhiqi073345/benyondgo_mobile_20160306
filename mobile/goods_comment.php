<?php

/**
 * ECSHOP 首页文件
 * ============================================================================
 * * 版权所有 2008-2015 秦皇岛商之翼网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.68ecshop.com;
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: derek $
 * $Id: index.php 17217 2011-01-19 06:29:08Z derek $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(dirname(__FILE__) . '/includes/cls_json.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

//判断是否有ajax请求
$act = !empty($_GET['act']) ? $_GET['act'] : '';

if ($act == 'list')
{
	if (empty($_GET['id']))
	{
		header("Location:index.php");
		exit;
	}

	$comments_all_list = get_comments_list($_GET['id']);
	$smarty->assign('comments_all_list', $comments_all_list);
	
	$comments_h_list = get_comments_list($_GET['id'],'4,5');
	$smarty->assign('comments_h_list', $comments_h_list);
	
	$comments_m_list = get_comments_list($_GET['id'],'2,3');
	$smarty->assign('comments_m_list', $comments_m_list);
	
	$comments_l_list = get_comments_list($_GET['id'],'1');
	$smarty->assign('comments_l_list', $comments_l_list);
	
	$comments_s_list = get_comments_list($_GET['id']);
	$shaidan_list = array();
	foreach ($comments_s_list as $s_list)
	{
		if (!empty($s_list['imgs']))
		{
			$shaidan_list[] = $s_list;
		}
	}
	$smarty->assign('shaidan_list', $shaidan_list);
	
	$comments_count = array(
		'all'     => count($comments_all_list),
		'h'       => count($comments_h_list),
		'm'       => count($comments_m_list),
		'l'       => count($comments_l_list),
		'shaidan' => count($shaidan_list)
		);
	$smarty->assign('comments_count', $comments_count);

	$smarty->display('goods_comments.dwt');
}
else if ($act == 'good_json')
{
	$comment_id = intval($_REQUEST['comment_id']);
	
    $json = new JSON;
    $result = array('error' => '', 'good_num' => '', 'comment_id'=>$comment_id);

	if ($_SESSION['comments-'.$comment_id] == 1)
	{
		$result['error'] = 1;
	}
	else
	{
		$db->query("UPDATE ".$ecs->table('comment')." SET good_num = good_num + 1 WHERE comment_id = '$comment_id'");
		$result['good_num'] = $db->getOne("SELECT good_num FROM ".$ecs->table('comment')." WHERE comment_id = '$comment_id'");
		clear_cache_files();
		$_SESSION['comments-'.$comment_id] = 1;
	}


	
    echo $json->encode($result);
    exit;
}
else
{
	header("Location:index.php");
	exit;
}

function get_comments_list($id, $where = '', $sort='add_time', $desc='DESC')
{
	$sql_where = (empty($where) ? '' : ' AND c.comment_rank IN ('.$where.')');
	$sql = "SELECT c.*, (c.comment_rank*20) AS comment_rank_per, g.goods_name, u.user_name, u.headimg, u.user_rank, u.rank_points " .
		" FROM " . $GLOBALS['ecs']->table('comment') . " AS c " .
		" LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g " .
		" ON c.id_value = g.goods_id " .
		" LEFT JOIN " . $GLOBALS['ecs']->table('users') . " AS u " .
		" ON c.user_id = u.user_id " .
		" WHERE c.user_id > 0 AND c.parent_id = 0 AND c.status = 1 AND c.id_value=" . $id . $sql_where .
		" ORDER BY ".$sort." ".$desc;
	$rs = ($GLOBALS['db']->getAll($sql) ? $GLOBALS['db']->getAll($sql) : array());
	if (!empty($rs))
	{
		foreach($rs as $rs_key => $rs_val)
		{
			if ($rs_val['user_rank'] == 0)
			{
				$sql_rank = "SELECT rank_name FROM " . $GLOBALS['ecs']->table('user_rank') . " WHERE special_rank = '0' AND min_points <= " . intval($rs_val['rank_points']) . " AND max_points > " . intval($rs_val['rank_points']);
				$rs[$rs_key]['user_rank_name'] = $GLOBALS['db']->getOne($sql_rank);
			}
			else
			{
				$sql_rank = "SELECT rank_name FROM " . $GLOBALS['ecs']->table('user_rank') . " WHERE special_rank = ".$rs_val['user_rank'];
				$rs[$rs_key]['user_rank_name'] = $GLOBALS['db']->getOne($sql_rank);
			}
			
			$rs[$rs_key]['comment_time'] = local_date('Y-m-d H:i:s', $rs_val['add_time']);

			$sql_shaidan = "SELECT shaidan_id,title,message FROM ".$GLOBALS['ecs']->table('shaidan')." WHERE user_id=".$rs_val['user_id']." AND rec_id=".$rs_val['rec_id'];
			$shaidan_info = $GLOBALS['db']->getRow($sql_shaidan);
			$rs[$rs_key]['shaidan_title'] = $shaidan_info['title'];
			$rs[$rs_key]['shaidan_message'] = $shaidan_info['message'];
			
			$where_sid = empty($shaidan_info['shaidan_id']) ? ' WHERE 1 = 2 ' : " WHERE shaidan_id = ".$shaidan_info['shaidan_id'];
			$sql_img = "SELECT image, thumb FROM ".$GLOBALS['ecs']->table('shaidan_img').$where_sid;
			$rs[$rs_key]['imgs'] = $GLOBALS['db']->getAll($sql_img);
			
			if ($rs_val['review'] > 0)
			{
				$sql_r = "SELECT * FROM " . $GLOBALS['ecs']->table('comment') . " WHERE parent_id=".$rs_val['comment_id'];
				$rs[$rs_key]['admin'] = $GLOBALS['db']->getRow($sql_r);
			}
		}
	}
	return $rs;
}

function get_shaidan_list($id)
{
	$sql = "SELECT * FROM ".$GLOBALS['ecs']->table('shaidan').
		" WHERE user_id > 0 AND status = 1 AND goods_id=".$id;
	$rs = $GLOBALS['db']->getAll($sql);
	foreach ($rs as $rs_key => $rs_val)
	{
		$sql_img = "SELECT image, thumb FROM ".$GLOBALS['ecs']->table('shaidan_img')." WHERE shaidan_id = ".$rs_val['shaidan_id'];
		$rs[$rs_key]['imgs'] = $GLOBALS['db']->getAll($sql_img);
	}
	
	return $rs;
}
?>