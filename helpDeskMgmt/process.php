if(!empty($_POST['action']) && $_POST['action'] == 'listTicket') {
	$tickets->showTickets();
}