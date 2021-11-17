<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
  $email=$_POST['email'];
  $best_time=$_POST['best_time'];
	$street1=$_POST['street1'];
  $street2=$_POST['street2'];
  $city=$_POST['city'];
   $state=$_POST['state'];
   $country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$bedroom=$_POST['bedroom'];
	$bathroom=$_POST['bathroom'];
  $foot=$_POST['foot'];
  $stories=$_POST['stories'];
  $year_built=$_POST['year_built'];
   $garage=$_POST['garage'];
  $property_condition=$_POST['property_condition'];
  $owe_year=$_POST['owe_year'];
  $message1=$_POST['message1'];
  $cost=$_POST['cost'];
  $living_in_house=$_POST['living_in_house'];
  $sale=$_POST['sale'];
  $radio1=$_POST['radio1'];
  $radio2=$_POST['radio2'];
  $listing_expire=$_POST['listing_expire'];
  $message2=$_POST['message2'];
  $least=$_POST['least'];
  $house_worth=$_POST['house_worth'];
  $asking_house=$_POST['asking_house'];
  $determine_value=$_POST['determine_value'];
  $radio3=$_POST['radio3'];
  $moving=$_POST['moving'];
  $balance=$_POST['balance'];
  $interest_rate=$_POST['interest_rate'];
  $payment=$_POST['payment'];
  $radio4=$_POST['radio4'];
  $balance1=$_POST['balance1'];
  $interest_rate1=$_POST['interest_rate1'];
  $payment1=$_POST['payment1'];
  $radio5=$_POST['radio5'];
  $radio6=$_POST['radio6'];
  $dues=$_POST['dues'];
  $radio7=$_POST['radio7'];
  $hear_us=$_POST['hear_us'];
  $message3=$_POST['message3'];
  $cash=$_POST['cash'];
  
  

  $field1="<b>Best time to call:</b> ".$best_time."<br>"."<b> Street1:</b> ".$street1."<br>"."<b>Street2:</b> ".$street2."<br>"."<b>City:</b> ".$city."<br>"."<b>State:</b> ".$state."<br>"."<b>Country:</b> ".$country."<br>"."<b>Zipcode:</b> ".$zipcode."<br>"."<b>Bedroom:</b> ".$bedroom."<br>"."<b>Bathroom:</b> ".$bathroom."<br>"."<b>Square foot:</b> ".$foot."<br>"."<b>Stories:</b> ".$stories."<br>"."<b>Year Built:</b> ".$year_built."<br>"."<b>Garage:</b> ".$garage."<br>"."<b>Property Condition:</b> ".$property_condition."<br>"."<b>Howmany years have you oweed property?:</b> ".$owe_year."<br>"."<b>What kind of repairs and maintenance does the house need?:</b> ".$message1."<br>"."<b>Repair Cost:</b> ".$cost."<br>"."<b>Is there anyone living in the house:</b> ".$living_in_house."<br>"."<b>How long has the property been for sale?:</b> ".$sale."<br>"."<b>Is the house currently listed with a Realtor?:</b> ".$radio1."<br>"."<b>If No, has the house been previously listed?:</b> ".$radio2."<br>"."<b>If Yes, when does the listing expire:</b> ".$listing_expire."<br>"."<b>What's your situation? Why are you selling?:</b> ".$message2."<br>"."<b>What do you think your house is worth? :</b> ".$house_worth."<br>"."<b>How much are you asking for your house?:</b> ".$asking_house."<br>"."<b>How did you determine the value?:</b> ".$determine_value."<br>"."<b>What is the least you would accept if we closed quickly?:</b> ".$least."<br>"."<b>Are you looking to sell your house for what you owe?:</b> ".$radio3."<br>"."<b>How soon are you planing to moving?:</b> ".$moving."<br>"."<b>Ist Mortage balance?:</b> ".$balance."<br>"."<b>Ist Mortage Interest rate?:</b> ".$interest_rate."<br>"."<b>Ist Mortage payment?:</b> ".$payment."<br>"."<b>Fixed/Adj:</b> ".$radio4."<br>"."<b>2nd Mortage balance?:</b> ".$balance1."<br>"."<b>2nd Mortage Interest rate?:</b> ".$interest_rate1."<br>"."<b>2nd Mortage payment?:</b> ".$payment1."<br>"."<b>Fixed/Adj:</b> ".$radio5."<br>"."<b>Payments Current?:</b> ".$radio6."<br>"."<b>Do you pay Homeowner/Condo Association dues? If so, how much per year?:</b> ".$dues."<br>"."<b>May we take over your payments until we get the house sold?:</b> ".$radio7."<br>"."<b>How did you hear about us?:</b> ".$hear_us."<br>"."<b>Do you have any questions or comments you would like to share with us?:</b> ".$message3."<br>"."<b>If we paid cash and closed by next Friday what is the lowest amount you would be willing to accept?:</b> ".$cash;

  

}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>