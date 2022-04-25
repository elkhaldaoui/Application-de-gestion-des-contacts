<?php
session_start();
require_once '../classes/Contact.php';

		$id = $_GET['id'];
		$contact = new Contact();
		$contact->deleteContact($id);
		echo "
			<script>
			window.location.href = '../contacts.php';
			</script>";
?>