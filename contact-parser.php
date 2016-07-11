<?php
function parse_contacts($filename)
{
    $contacts = array();
    $contents = trim(file_get_contents($filename));
    $contacts = explode("\n", $contents);
	foreach($contacts as $contact) {
		$splitContacts = explode("|", $contact);
		$formatNumber = substr($splitContacts[1], 0, 3) . '-' . substr($splitContacts[1], 3, 3) . '-' . substr($splitContacts[1], 6);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $formatNumber];
	}
	$contacts = $newArray;
    return $contacts;
}
var_dump(parse_contacts('contacts.txt'));
