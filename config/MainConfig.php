<?php

namespace Config;


class MainConfig {

	public $sources = [
		'heroes' => 'sources/npc_heroes.txt',
		'abilities' => 'sources/npc_abilities.txt',
		'items' => 'sources/items.txt',
		'locale' => 'sources/dota_english.txt',
	];

	public $blacklists = [
		'heroes' => [
			'npc_dota_hero_abyssal_underlord',
		],
		'abilities' => [
			'attribute_bonus',
			'morphling_morph',
			'rubick_empty1',
			'rubick_empty2',
			'rubick_hidden1',
			'rubick_hidden2',
			'rubick_hidden3',
			'wisp_empty1',
			'wisp_empty2',
			'doom_bringer_empty1',
			'doom_bringer_empty2',
			'invoker_empty1',
			'invoker_empty2',
		],
	];

	public $results = [
		'heroes' => '../dota2-database/json/heroes.json',
		'abilities' => '../dota2-database/json/abilities.json',
		'items' => '../dota2-database/json/items.json',
	];

}