<?php
require_once( '../../../wp-load.php' );
if(isset($_POST['submit'])) {

$post_id = $_POST['fire_id'];
$count = get_post_meta($post_id, "meta-box-fr-form-list-count-".$post_id, true);


//looping through all the inputs that are available



// loop ends

    if ($count > 0) {
        for($i = 0; $i < $count ; $i++):
		
			            $name = get_post_meta($post_id, "meta-box-fr-forms-name".$i."-".$post_id, true);
						$post_data[$name] = $_POST[$name];
		endfor;
	}
//create array of data to be posted
$post_data['oid'] = $_POST['oid'];
$post_data['retURL'] = $_POST['retURL'];
//$post_data['first_name'] = trim($_POST['first_name']);
//$post_data['last_name'] = trim($_POST['last_name']);
//$post_data['email'] = trim($_POST['email']);
//$post_data['company'] = trim($_POST['company']);
//$post_data['retURL'] = 'https://www.theblogreaders.com';
//$post_data['00N90000009SXUs'] = trim($_POST['abn_acn']);   // CUSTOM FIELDS IN LEAD OBJECT
 
//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
$post_items[] = $key . '=' . $value;
}
//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);
//print_r($post_data);
//create cURL connection
$curl_connection = curl_init('https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8');
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT,
"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
 
//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
//perform our request
$result = curl_exec($curl_connection);
//show information regarding the request
//print_r(curl_getinfo($curl_connection));
//echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
//close the connection
curl_close($curl_connection);
 
// HERE YOU CAN ADD ANY BUSINESS REQUIREMENT,
 
//FOR EXAMPLE:
 
//1) INSERT THE LEADS DATA TO YOUR MYSQL DATABASE
 
//2) SEND THE EMAIL, etc
 
}

 
?>