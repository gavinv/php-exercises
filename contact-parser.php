<?php
function parse_contacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contacts = explode("\n", $contents);
	foreach($contacts as $contact) {
		$splitContacts = explode("|", $contact);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $splitContacts[1]];
	}
	$contacts = $newArray;
    return $contacts;
}

var_dump(parse_contacts('contacts.txt'));
