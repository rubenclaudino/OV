
						if($('#fname').val().length === 0 ){
							personal_details_valid=true;
						}else{
							personal_details_valid=false;
						}
						
						if($('#patient_height').val().length === 0 ){
							health_valid=true;
						}else{
							health_valid=false;
						}
						
						if($('#hasProsSpec').val()=='1'){
							if($('#pros_limit').val().length === 0 ){
								pros_valid=true;
							}else{
								pros_valid=false;
							}
						}
						if($('#hasOrtoSpec').val()=='1'){
							if($('#anterior_ortho_treatment').val().length === 0 ){
								orto_valid=true;
							}else{
								orto_valid=false;
							}
						}
						if($('#hasDentalPlan').val()=='1'){
							if($('#cardExpDate1').val().length === 0 ){
								dp_valid=true;
							}else{
								dp_valid=false;
							}
						}
						if((($('#hasProsSpec').val()=='1') && pros_valid==true) && (($('#hasOrtoSpec').val()=='1') && orto_valid==true) && (($('#hasDentalPlan').val()=='1') && dp_valid==true)){
							/* all are available */
							
							
						}else if((($('#hasProsSpec').val()=='1') && pros_valid==true) && (($('#hasOrtoSpec').val()=='1') && orto_valid==true) && (($('#hasDentalPlan').val()=='0') && dp_valid==false)){
							/* pros and orto are available but no dental plan*/
							
							
						}else if((($('#hasProsSpec').val()=='0') && pros_valid==false) && (($('#hasOrtoSpec').val()=='0') && orto_valid==false) && (($('#hasDentalPlan').val()=='1') && dp_valid==true)){
							/* only dental plan is available but not orto or pros*/
							
							
						}else if((($('#hasProsSpec').val()=='0') && pros_valid==false) && (($('#hasOrtoSpec').val()=='1') && orto_valid==true)  && (($('#hasDentalPlan').val()=='1') && dp_valid==true)){
							/* orto is available with dental plan but no pros */
							
							
						}else if((($('#hasProsSpec').val()=='0') && pros_valid==false) && (($('#hasOrtoSpec').val()=='1') && orto_valid==true)  && (($('#hasDentalPlan').val()=='0') && dp_valid==false)){
							/* orto is available no dental plan and no pros */
							
							
						}else if((($('#hasProsSpec').val()=='1') && pros_valid==true) && (($('#hasOrtoSpec').val()=='0') && orto_valid==false)  && (($('#hasDentalPlan').val()=='1') && dp_valid==true)){
							/* pros is available with dental plan but no orto */
							
							
						}else if((($('#hasProsSpec').val()=='1') && pros_valid==true) && (($('#hasOrtoSpec').val()=='0') && orto_valid==false)  && (($('#hasDentalPlan').val()=='0') && dp_valid==false)){
							/* only pros is available no dental plan no orto */
							
							
						}