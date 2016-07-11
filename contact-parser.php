<?php
function parse_contacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contacts = explode("\n", $contents);
	foreach($contacts as $contact) {
		$splitContacts = explode("|", $contact);
		$formatNumbers = substr($splitContacts[1], 0, 3) . '-' . substr($splitContacts[1], 3, 3) . '-' . substr($splitContacts[1], 6, 4);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $formatNumbers];
	}
	$contacts = $newArray;
    return $contacts;
}
var_dump(parse_contacts('contacts.txt'));
