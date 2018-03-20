/*
		public function addUserLocation()
		{
			
			
			$activitylist = [];	
				$activitylist[] = $objData->steps;
				
				$post_data['direction'] 	= serialize($activitylist);
				$post_data['eid']        	= $objData->eid;
				$post_data['lastupdate']  	= $this->cdate->gmtdatetime(); 
				
				echo json_encode($activitylist);
				
			} else {
				
				$activitylist 	 = unserialize($recipeInfo->direction);
				$activitylist[] = $objData->steps; 
				
				$post_data['direction'] 	= serialize($activitylist);
				$post_data['id']        	= $objData->rid;
				$post_data['lastupdate']  	= $this->cdate->gmtdatetime();
				
				echo json_encode($activitylist);
			}
			
			$this->m_main->update_recipe($post_data);
		}






			if($_SERVER['REQUEST_METHOD']=='POST') //1 If 
			{
				$json = file_get_contents('php://input');
				$data1 = json_decode($json,true);
				if(!empty($data1['currentLat'])) // ON FORM SUBMIT 2 if
		  		{
					$data = [
								'eid'     =>'2',
							  'longitude' => $data1['currentLon'],
							 'latitude'   => $data1['currentLat'],
							 'updatedOn' => $this->cdate->gmtdatetime()
							];
		
					$check = $this->app_model->update_userlogin($data);
					if($check) {               // 3 if
						$error['status']=1;

						$error['data']="data found";
						   echo json_encode($error);
					
					} else {
						$error['status']=0;
						$error['data']="no valid  data found";
				   		echo json_encode($error);
						exit;
					}					//close 3 if
				}				// close 2 if
				else{
						$error['status']=0;
						$error['data']="no data found";
				   		echo json_encode($error);
						exit;
				}
			
			}						// close 1 if

			*/