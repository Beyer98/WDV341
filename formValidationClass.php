<?php


	class validations 

	{
	

	function __construct() 

	{
	

	}			

		function cannotBeEmpty($inFieldValue)

		{

			return empty($inFieldValue);

		}


		function validateName($inName)

		{

			$nameRegex = "/^[\s,.'\-\pL]+$/";


			if(preg_match($nameRegex, $inName)===1)

			{

				return $inName;

			}

		}


		function validatePhone($inPhone)

		{

			$phoneRegex = "/\d{10}/";


			if(preg_match($phoneRegex, $inPhone)===1)

			{

				return filter_var($inPhone,FILTER_VALIDATE_INT);

			}

		}


		function validateEmail($inEmail)

		{

			$emailRegex = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';


			if (preg_match($emailRegex, $inEmail)===1)

			{

				$inEmail = filter_var($inEmail, FILTER_SANITIZE_EMAIL);

				return filter_var($inEmail,FILTER_VALIDATE_EMAIL);

			}

		}


		function validateRequests($inRequests)

		{

			$requestsRegex = "/^[a-zA-Z0-9,.!?]*$|/";



			if(preg_match($requestsRegex, $inRequests)===1)

			{

				return filter_var($inRequests,FILTER_SANITIZE_STRING);

			}

		}

	}

?>
