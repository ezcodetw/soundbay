<?php 

/* 防止直接讀取此php檔案防護機制 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 *  class: Default_function (會員class , 每一個class第一個英文字母請大寫)
 *  繼承: empty ;
 *  
 *  資料庫連結模式: $CI->load->database() ;  就可以連上sql
 *  
 *	前置文字 $def_
 *  
 *  
 * */
class Tool
{
	/*	to_smarty start
	 * 
	 *  因為樣板引擎smarty對於array的資源度相較於物件的處理速度較為快速且方便
	 *  所以請安插基本function to_smarty 對於得到的物件做array的轉換
	 */
	function changeArray( $object_data )
	{
		//建立回傳array $mem_array_data
		$data = array() ;
		//設定計數參數
		$i = 0 ;
		//開始foreach迴圈轉換過程
		foreach ( $object_data->result_array()  as $var ) 
		{
			//將物件轉乘
			$data[$i] = $var ; 
			//計數器增加
			$i++ ;
		}
		return $data ;
	}
	/* to_smarty end */	
	
} // END class member
?>