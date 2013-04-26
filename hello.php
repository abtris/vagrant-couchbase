<?php

$cb = new Couchbase("33.33.33.10:8091", "", "", "gamesim-sample");

var_dump($cb->get("Aaron0"));

