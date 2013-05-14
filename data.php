<?php
// dump from couchdb 1.0 via wget with ?include_docs=true can be imported
$cb = new Couchbase("33.33.33.10:8091", "", "", "default");

$json = file_get_contents(__DIR__ . "/data.json");
$data  = json_decode($json, true);

foreach ($data['rows'] as $item) {
    // item (doc)
    $id =  $item['doc']['_id'];
    unset($item['doc']['_id']);
    unset($item['doc']['_rev']);
    if (isset($item['doc']['error'])) {
        unset($item['doc']['error']);
    }
    if (isset($item['doc']['reason'])) {
        unset($item['doc']['reason']);
    }
        
    $value = json_encode($item['doc']);
    $cb->set($id, $value);
}

