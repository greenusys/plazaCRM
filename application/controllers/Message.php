<?php
	class Message extends MY_Controller{
		function __construct(){
			parent::__construct();

		}
		public function getUserDetail(){
			die(json_encode($this->db->select('fullname')->
				where('tbl_users.user_id',$this->input->post('friend_id'))->
				join('tbl_users','tbl_account_details.user_id=tbl_users.user_id')->get('tbl_account_details')->row()));
		}
		public function fetchMessages(){
			$friend_id=$this->input->post('friend_id');
			$response=$this->db->query("SELECT * from tbl_private_chat_messages join tbl_private_chat_users on tbl_private_chat_users.private_chat_id=tbl_private_chat_messages.private_chat_id where tbl_private_chat_users.to_user_id='$friend_id'")->result();
			die(json_encode($response));
			// 
		}
		public function sendMessage(){
			// print_r($_POST);
			$sent_by=$this->my_id;
			$message=$this->input->post('message');
			$sentTo=$this->input->post('sendMessageTo');
			//To insert in Private Chat
			if($this->insertInPrivateChat($sent_by,$chat_title="",$sentTo,$message)){
				//To get Last Insert Id
				$privateChatDetails=$this->getLastPrivateChatId($sentTo);
				;
				//To Insert in Private Chat Message
				if($this->insertInPrivateChatMessage($privateChatDetails->private_chat_id,$sent_by,$message)){
					$msgData=array(
									"private_chat_id"=>$privateChatDetails->private_chat_id,
									"user_id"=>$sent_by,
									"to_user_id"=>$sentTo,
									"active"=>1,
									"unread"=>1,
									"title"=>$chat_title,
									"deleted"=>0,
					);
					//To In Private Chat User
					if($this->insertInPrivateChatUser($msgData)){
						echo 'Success';
					}else{
						echo 'failed';
					}
				}
			}
		}
		public function insertInPrivateChat($sent_by,$chat_title="",$sentTo,$msg){
			// tbl_private_chat`(`private_chat_id`, `chat_title`, `user_id`, `time`) 
			$data=array(
						"chat_title"=>$chat_title,
						"user_id"=>$sent_by,
						"conversation_with"=>$sentTo,
						"time"=>date('Y-m-d H:i:s'),
					);
			$condition=array("user_id"=>$sent_by,"conversation_with"=>$sentTo);
			if(count($this->db->where($condition)->get('tbl_private_chat')->result())==0){
				if($this->db->insert('tbl_private_chat',$data)){
					return true;
				}else{
					return false;				
				}
			}else{
				// echo 'Insert in Private Chat Message';
				$privateChatDetails=$this->getLastPrivateChatId($sentTo);
				if($this->insertInPrivateChatMessage($privateChatDetails->private_chat_id,$sent_by,$msg)){
					$msgData=array(
								"private_chat_id"=>$privateChatDetails->private_chat_id,
								"user_id"=>$sent_by,
								"to_user_id"=>$sentTo,
								"active"=>1,
								"unread"=>1,
								"title"=>$chat_title,
								"deleted"=>0,
							);
					if($this->insertInPrivateChatUser($msgData)){
						// echo 'Insert in private chat user';
						return true;
					}else{
						echo 'AA';
						return false;
					}
					
				}else{
					// echo 'CCC';
					return false;
				}
			}
		}
		public function getLastPrivateChatId($sentTo){
			$condition=array("user_id"=>$this->my_id,"conversation_with"=>$sentTo);
			return $this->db->where($condition)->limit(1)->order_by('private_chat_id','desc')->get('tbl_private_chat')->row();
		}
		public function insertInPrivateChatMessage($private_chat_id,$sent_by,$message){
			$data=array(
						"private_chat_id"=>$private_chat_id,
						"user_id"=>$sent_by,
						"message"=>$message,
						"message_time"=>date('Y-m-d H:i:s'),
					);
			if(count($this->db->where($data)->get('tbl_private_chat_messages')->result())==0){
				if($this->db->insert('tbl_private_chat_messages',$data)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		public function insertInPrivateChatUser($data){
			if(count($this->db->where($data)->get('tbl_private_chat_users')->result())==0){
				if($this->db->insert('tbl_private_chat_users',$data)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
	
		}
		public function de(){
			// $privateChatDetails=$this->getLastPrivateChatId($sentTo);
			// 		if($this->insertInPrivateChatMessage($privateChatDetails->private_chat_id,$sent_by,$msg)){
			// 			$msgData=array(
			// 						"private_chat_id"=>$privateChatDetails->private_chat_id,
			// 						"user_id"=>$sent_by,
			// 						"to_user_id"=>$sentTo,
			// 						"active"=>1,
			// 						"unread"=>1,
			// 						"title"=>$chat_title,
			// 						"deleted"=>0,
			// 					);
			// 			if($this->insertInPrivateChatUser($msgData)){
			// 				return true;
			// 			}else{
			// 				return false;
			// 			}
						
			// 		}else{
			// 			return false;
			// 		}
		}
	}

?>

