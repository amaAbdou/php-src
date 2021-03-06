--TEST--
enchant_broker_dict_exists() function
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br>
--SKIPIF--
<?php
if(!extension_loaded('enchant')) die('skip, enchant not loader');
if (!is_resource(enchant_broker_init())) {die("skip, resource dont load\n");}
if (!is_array(enchant_broker_list_dicts(enchant_broker_init()))) {die("skip, no dictionary installed on this machine! \n");}
?>
--FILE--
<?php
$broker = enchant_broker_init();
$dicts = enchant_broker_list_dicts($broker);

if (enchant_broker_dict_exists($broker, $dicts[0]['lang_tag'])) {
    echo("OK\n");
} else {
    echo("dicts dont exist failed\n");
}
?>
--EXPECT--
OK
