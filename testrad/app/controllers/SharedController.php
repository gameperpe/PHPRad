<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * post_title_option_list Model Action
     * @return array
     */
	function post_title_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT title AS value,title AS label FROM post ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * post_category_option_list Model Action
     * @return array
     */
	function post_category_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT category AS value,category AS label FROM post ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * post_content_option_list Model Action
     * @return array
     */
	function post_content_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT content AS value,content AS label FROM post ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * post_author_option_list Model Action
     * @return array
     */
	function post_author_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT author AS value,author AS label FROM post ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * post_status_option_list Model Action
     * @return array
     */
	function post_status_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT status AS value,status AS label FROM post ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * user_name_option_list Model Action
     * @return array
     */
	function user_name_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value,name AS label FROM user ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * user_passwoord_option_list Model Action
     * @return array
     */
	function user_passwoord_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT passwoord AS value,passwoord AS label FROM user ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * user_email_option_list Model Action
     * @return array
     */
	function user_email_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT email AS value,email AS label FROM user ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * user_photo_option_list Model Action
     * @return array
     */
	function user_photo_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT photo AS value,photo AS label FROM user ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

}
