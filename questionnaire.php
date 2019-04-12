<?php
	session_start();																															//starting a session
	$resultData = array();																												//creating new array for maping results and storing it to databse
	$response = array();																													//creating new array to store responses to Database
	/*
	All the 3rd party apps:
		Xero Expense,
		Expensify,
		CRM,
		Xero,,
		HUBDOC,
		"Shopify",
		"A2X",
		"VENDHQ",
		Jobber,
		"VEND", "Unleashed",
		Cin7,
		loft,
		Insightly,
		Mind and Body,
		Xero Premium,
		Xero Standard,
		Xero Basic,
		square,
		gocardless
	*/
	if (ISSET($_POST['nEmployee'])) {
		$response['nEmployee'] = $_POST['nEmployee'];

		//4.1  If Yes> How Many employees do you have?
		if($_POST['nEmployee'] == "1-5"){
			array_push($resultData,"Xero Expense");
		}else if($_POST['nEmployee'] == "6-10"){
			array_push($resultData,"Expensify");
		}else if($_POST['nEmployee'] == "11-20"){
			array_push($resultData,"Expensify");
		}else if($_POST['nEmployee'] == "20+"){
			array_push($resultData,"Expensify");
		}
	} else {
		$response['nEmployee'] = NULL;
	}


	if (ISSET($_POST['payMethod'])) {
		$response['payMethod'] = $_POST['payMethod'];
	} else {
		$response['payMethod'] = NULL;
	}


	if (ISSET($_POST['saleMethod'])) {
		$response['saleMethod'] = $_POST['saleMethod'];
	} else {
		$response['saleMethod'] = NULL;
	}

	if (ISSET($_POST['offerService'])) {
		$response['offerService'] = $_POST['offerService'];

		//7.1 If No from Products> Do you offer Services?

		if($_POST['offerService'] == "yes"){
			array_push($resultData,"CRM");
		}
	} else {
		$response['offerService'] = NULL;
	}

	if (ISSET($_POST['nTransaction'])) {
		$response['nTransaction'] = $_POST['nTransaction'];
	} else {
		$response['nTransaction'] = NULL;
	}

	$response['industry'] = $_POST['industry'];
	$response['location'] = $_POST['location'];
	$response['structure'] = $_POST['structure'];
	$response['employee'] = $_POST['employee'];
	$response['reimburse'] = $_POST['reimburse'];
	$response['sale'] = $_POST['sale'];
	$response['inventory'] = $_POST['inventory'];
	$response['nInvoice'] = $_POST['nInvoice'];
	$response['creditCard'] = $_POST['creditCard'];
	$response['technology'] = $_POST['technology'];


	//1. What Industry are you in?
	array_push($resultData,"Xero");
	array_push($resultData,"HUBDOC");

	if($_POST['industry'] == 'eCommerce'){
		array_push($resultData,"Shopify");
		array_push($resultData,"A2X");
		array_push($resultData,"VENDHQ");
	}else if($_POST['industry'] == 'construction'){
		array_push($resultData, "Jobber");
	}else if($_POST['industry'] == 'retailTrade'){
		array_push($resultData,"VEND");
		array_push($resultData,"Unleashed");
	}else if($_POST['industry'] == 'manufacturing'){
		array_push($resultData, "Unleashed");
		array_push($resultData,"Cin7");
	}else if($_POST['industry'] == 'scientific'){
		array_push($resultData,"CRM");
	}else if($_POST['industry'] == 'financial'){
		array_push($resultData, "HUBDOC");
	}else if($_POST['industry'] == 'realEstate'){
		array_push($resultData,"loft");
	}else if($_POST['industry'] == 'it'){
		array_push($resultData,"Insightly");
		array_push($resultData,"Trello");
	}else if($_POST['industry'] == 'education'){
		array_push($resultData,"Mind and Body");
		array_push($resultData,"HUBDOC");
	}else if($_POST['industry'] == 'health'){
		array_push($resultData,"HUBDOC");

	}else if($_POST['industry'] == 'arts'){
		array_push($resultData,"VENDHQ");

	}

	//2. Bussiness Location
	if($_POST['location'] == "outside"){
		array_push($resultData,"Xero Premium");
	}else if($_POST['location'] == "gInside"){
		array_push($resultData,"Xero Standard");
	}else if($_POST['location'] == "lInside"){
		array_push($resultData,"Xero Basic");
	}

	//5. Do you reimburse expenses to your employees?
	if($_POST['reimburse'] == "yes" && ISSET($_POST['nEmployee'])){
		if($_POST['nEmployee'] > 5){
			array_push($resultData,"Expensify");
		}else{
			array_push($resultData,"Xero Expense");
		}
	}

	//8. How Many Invoices you create every month?
	if($_POST['nInvoice'] == "1-5"){
		array_push($resultData,"Xero Basic");
	}else if($_POST['nInvoice'] == "6-10"){
		array_push($resultData,"Xero Standard");
	}else if($_POST['nInvoice'] == "11-20"){
		array_push($resultData,"Xero Standard");
	}else if($_POST['nInvoice'] == "20+"){
		array_push($resultData,"Xero Standard");
	}

	//9. Do you accept credit cards for payments?
	if($_POST['creditCard'] == "yes"){
		array_push($resultData,"square");
	}else if($_POST['creditCard'] == "no"){
		array_push($resultData,"gocardless");
	}

	$_SESSION["result"] =  array_unique($resultData);															//stores results to session variable
	$_SESSION['response'] = array_unique($response);															//stores response to session variable

	echo json_encode($_SESSION["result"]);																				//send data back in json format

?>
