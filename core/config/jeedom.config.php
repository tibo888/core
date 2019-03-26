<?php

/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

global $JEEDOM_INTERNAL_CONFIG;
$JEEDOM_INTERNAL_CONFIG = array(
	'eqLogic' => array(
		'category' => array(
			'heating' => array('name' => 'Chauffage', 'icon' => 'fa fa-fire'),
			'security' => array('name' => 'Sécurité', 'icon' => 'fa fa-lock'),
			'energy' => array('name' => 'Energie', 'icon' => 'fa fa-bolt'),
			'light' => array('name' => 'Lumière', 'icon' => 'fa fa-lightbulb-o'),
			'automatism' => array('name' => 'Automatisme', 'icon' => 'fa fa-magic'),
			'multimedia' => array('name' => 'Multimedia', 'icon' => 'fas fa-sliders-h'),
			'default' => array('name' => 'Autre', 'icon' => 'fa fa-circle-o'),
		),
		'style' => array(
			'noactive' => '-webkit-filter: grayscale(100%);-moz-filter: grayscale(100);-o-filter: grayscale(100%);-ms-filter: grayscale(100%);filter: grayscale(100%); opacity: 0.35;',
		),
		'displayType' => array(
			'dashboard' => array('name' => 'Dashboard'),
			'mobile' => array('name' => 'Mobile'),
		),
	),
	'interact' => array(
		'test' => array(
			'>' => array('superieur', '>', 'plus de', 'depasse'),
			'<' => array('inferieur', '<', 'moins de', 'descends en dessous'),
			'=' => array('egale', '=', 'vaut'),
			'!=' => array('different'),
		),
	),
	'plugin' => array(
		'category' => array(
			'security' => array('name' => 'Sécurité', 'icon' => 'fas fa-lock'),
			'automation protocol' => array('name' => 'Protocole domotique', 'icon' => 'fas fa-rss'),
			'home automation protocol' => array('name' => 'Passerelle domotique', 'icon' => 'fas fa-asterisk'),
			'programming' => array('name' => 'Programmation', 'icon' => 'fas fa-code'),
			'organization' => array('name' => 'Organisation', 'icon' => 'far fa-calendar-alt', 'alias' => array('travel', 'finance')),
			'weather' => array('name' => 'Météo', 'icon' => 'far fa-sun'),
			'communication' => array('name' => 'Communication', 'icon' => 'fas fa-comment'),
			'devicecommunication' => array('name' => 'Objets connectés', 'icon' => 'fas fa-language'),
			'multimedia' => array('name' => 'Multimédia', 'icon' => 'fas fa-sliders-h'),
			'wellness' => array('name' => 'Confort', 'icon' => 'far fa-user'),
			'monitoring' => array('name' => 'Monitoring', 'icon' => 'fas fa-tachometer-alt'),
			'health' => array('name' => 'Santé', 'icon' => 'icon loisir-runner5'),
			'nature' => array('name' => 'Nature', 'icon' => 'icon nature-leaf32'),
			'automatisation' => array('name' => 'Automatisme', 'icon' => 'fas fa-magic'),
			'energy' => array('name' => 'Energie', 'icon' => 'fas fa-bolt'),
			'other' => array('name' => 'Autre', 'icon' => 'fas fa-bars'),
		),
	),
	'alerts' => array(
		'timeout' => array('name' => 'Timeout', 'icon' => 'fa fa-clock-o', 'level' => 1, 'check' => false, 'color' => '#FF0000'),
		'batterywarning' => array('name' => 'Batterie en Warning', 'icon' => 'fa fa-battery-quarter', 'level' => 2, 'check' => false, 'color' => '#FFAB00'),
		'batterydanger' => array('name' => 'Batterie en Danger', 'icon' => 'fa fa-battery-empty', 'level' => 3, 'check' => false, 'color' => '#FF0000'),
		'warning' => array('name' => 'Warning', 'icon' => 'fa fa-bell', 'level' => 4, 'check' => true, 'color' => '#FFAB00'),
		'danger' => array('name' => 'Danger', 'icon' => 'fa fa-exclamation', 'level' => 5, 'check' => true, 'color' => '#FF0000'),
	),
	'cmd' => array(
		'widgets' => array(
			'action' => array(
				'other'=>array(
					'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
					'circle' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-circle\'></i>','#_icon_off_#' => '<i class=\'fas fa-circle-thin\'></i>')),
					'fan' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-ventilo\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'garageBarrierOperator' => array('template' => 'tmplicon',array('#_icon_on_#' => '<i class=\'icon jeedom-garage-ferme fa-2x\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-garage-ouvert fa-stack-2x\'></i>')),
					'lock' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lock-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lock-ouvert\'></i>')),
					'prise' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-prise\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'sprinkle' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon nature-watering1\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>'))
				),
				'slider'=>array(
					'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
					'shutter' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-volet-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-volet-ouvert\'></i>')),
				)
			),
			'info' => array(
				'binary'=>array(
					'default' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-check\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'alert' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-alerte2\'></i>')),
					'door' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-porte-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-porte-ouverte\'></i>')),
					'heat' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-feu\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
					'lock' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lock-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lock-ouvert\'></i>')),
					'presence' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-mouvement\'></i>')),
					'prise' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-prise\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'window' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-fenetre-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-fenetre-ouverte\'></i>')),
					'timeDoor' => array('template' => 'tmpltimeIcon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-porte-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-porte-ouverte\'></i>')),
					'timePresence' => array('template' => 'tmpltimeIcon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-mouvement\'></i>')),
					'timeWindow' => array('template' => 'tmpltimeIcon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-fenetre-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-fenetre-ouverte\'></i>')),
				),
				'numeric'=>array(
					'testMultistate' => array('template' => 'tmplmultistate','test' => array(
						array('operation' => '#value# > 1','state' => '<i class=\'fas fa-check\'></i>'),
						array('operation' => '#value# > 70','state' => '<i class=\'icon jeedom-porte-ferme\'></i>')
					)),
				)
			)
		),
		'generic_type' => array(
			'LIGHT_TOGGLE' => array('name' => 'Lumière Toggle', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_STATE' => array('name' => 'Lumière Etat', 'family' => 'Lumière', 'type' => 'Info'),
			'LIGHT_ON' => array('name' => 'Lumière Bouton On', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_OFF' => array('name' => 'Lumière Bouton Off', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_SLIDER' => array('name' => 'Lumière Slider', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_COLOR' => array('name' => 'Lumière Couleur', 'family' => 'Lumière', 'type' => 'Info'),
			'LIGHT_SET_COLOR' => array('name' => 'Lumière Couleur', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_MODE' => array('name' => 'Lumière Mode', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_TOGGLE' => array('name' => 'Lumière Toggle', 'family' => 'Lumière', 'type' => 'Action'),
			'LIGHT_STATE_BOOL' => array('name' => 'Lumière Etat (Binaire)', 'family' => 'Lumière', 'type' => 'Info', 'ignore' => true),
			'LIGHT_COLOR_TEMP' => array('name' => 'Lumière Température Couleur', 'family' => 'Lumière', 'type' => 'Info', 'ignore' => true),
			'LIGHT_SET_COLOR_TEMP' => array('name' => 'Lumière Température Couleur', 'family' => 'Lumière', 'type' => 'Action', 'ignore' => true),
			'ENERGY_STATE' => array('name' => 'Prise Etat', 'family' => 'Prise', 'type' => 'Info'),
			'ENERGY_ON' => array('name' => 'Prise Bouton On', 'family' => 'Prise', 'type' => 'Action'),
			'ENERGY_OFF' => array('name' => 'Prise Bouton Off', 'family' => 'Prise', 'type' => 'Action'),
			'ENERGY_SLIDER' => array('name' => 'Prise Slider', 'family' => 'Prise', 'type' => 'Action'),
			'FLAP_STATE' => array('name' => 'Volet Etat', 'family' => 'Volet', 'type' => 'Info'),
			'FLAP_UP' => array('name' => 'Volet Bouton Monter', 'family' => 'Volet', 'type' => 'Action'),
			'FLAP_DOWN' => array('name' => 'Volet Bouton Descendre', 'family' => 'Volet', 'type' => 'Action'),
			'FLAP_STOP' => array('name' => 'Volet Bouton Stop', 'family' => 'Volet', 'type' => 'Action'),
			'FLAP_SLIDER' => array('name' => 'Volet Bouton Slider', 'family' => 'Volet', 'type' => 'Action'),
			'FLAP_BSO_STATE' => array('name' => 'Volet BSO Etat', 'family' => 'Volet', 'type' => 'Info'),
			'FLAP_BSO_UP' => array('name' => 'Volet BSO Bouton Up', 'family' => 'Volet', 'type' => 'Action'),
			'FLAP_BSO_DOWN' => array('name' => 'Volet BSO Bouton Down', 'family' => 'Volet', 'type' => 'Action'),
			'HEATING_ON' => array('name' => 'Chauffage fil pilote Bouton ON', 'family' => 'Chauffage', 'type' => 'Action'),
			'HEATING_OFF' => array('name' => 'Chauffage fil pilote Bouton OFF', 'family' => 'Chauffage', 'type' => 'Action'),
			'HEATING_STATE' => array('name' => 'Chauffage fil pilote Etat', 'family' => 'Chauffage', 'type' => 'Info'),
			'HEATING_OTHER' => array('name' => 'Chauffage fil pilote Bouton', 'family' => 'Chauffage', 'type' => 'Action'),
			'LOCK_STATE' => array('name' => 'Serrure Etat', 'family' => 'Serrure', 'type' => 'Info'),
			'LOCK_OPEN' => array('name' => 'Serrure Bouton Ouvrir', 'family' => 'Serrure', 'type' => 'Action'),
			'LOCK_CLOSE' => array('name' => 'Serrure Bouton Fermer', 'family' => 'Serrure', 'type' => 'Action'),
			'SIREN_STATE' => array('name' => 'Sirène Etat', 'family' => 'Sirène', 'type' => 'Info'),
			'SIREN_OFF' => array('name' => 'Sirène Bouton Off', 'family' => 'Sirène', 'type' => 'Action'),
			'SIREN_ON' => array('name' => 'Sirène Bouton On', 'family' => 'Sirène', 'type' => 'Action'),
			'THERMOSTAT_STATE' => array('name' => 'Thermostat Etat (BINAIRE) (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_TEMPERATURE' => array('name' => 'Thermostat Température ambiante', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_SET_SETPOINT' => array('name' => 'Thermostat consigne ', 'family' => 'Thermostat', 'type' => 'Action'),
			'THERMOSTAT_SETPOINT' => array('name' => 'Thermostat consigne', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_SET_MODE' => array('name' => 'Thermostat Mode (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Action'),
			'THERMOSTAT_MODE' => array('name' => 'Thermostat Mode (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_SET_LOCK' => array('name' => 'Thermostat Verrouillage (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Action'),
			'THERMOSTAT_SET_UNLOCK' => array('name' => 'Thermostat Déverrouillage (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Action'),
			'THERMOSTAT_LOCK' => array('name' => 'Thermostat Verrouillage (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_TEMPERATURE_OUTDOOR' => array('name' => 'Thermostat Température Exterieur (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Info'),
			'THERMOSTAT_STATE_NAME' => array('name' => 'Thermostat Etat (HUMAIN) (pour Plugin Thermostat uniquement)', 'family' => 'Thermostat', 'type' => 'Info'),
			'CAMERA_UP' => array('name' => 'Mouvement caméra vers le haut', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_DOWN' => array('name' => 'Mouvement caméra vers le bas', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_LEFT' => array('name' => 'Mouvement caméra vers le gauche', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_RIGHT' => array('name' => 'Mouvement caméra vers le droite', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_ZOOM' => array('name' => 'Zoom caméra vers l\'avant', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_DEZOOM' => array('name' => 'Zoom caméra vers l\'arrière', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_STOP' => array('name' => 'Stop caméra', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_PRESET' => array('name' => 'Preset caméra', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_URL' => array('name' => 'URL caméra', 'family' => 'Caméra', 'type' => 'info'),
			'CAMERA_RECORD_STATE' => array('name' => 'État enregistrement caméra', 'family' => 'Caméra', 'type' => 'info'),
			'CAMERA_RECORD' => array('name' => 'Enregistrement caméra', 'family' => 'Caméra', 'type' => 'Action'),
			'CAMERA_TAKE' => array('name' => 'Snapshot caméra', 'family' => 'Caméra', 'type' => 'Action'),
			'MODE_STATE' => array('name' => 'Mode', 'family' => 'Mode', 'type' => 'Info'),
			'MODE_SET_STATE' => array('name' => 'Mode', 'family' => 'Mode', 'type' => 'Action'),
			'ALARM_STATE' => array('name' => 'Alarme état', 'family' => 'Alarme', 'type' => 'Info', 'ignore' => true),
			'ALARM_MODE' => array('name' => 'Alarme mode', 'family' => 'Alarme', 'type' => 'Info', 'ignore' => true),
			'ALARM_ENABLE_STATE' => array('name' => 'Alarme état activée', 'family' => 'Alarme', 'type' => 'Info', 'ignore' => true),
			'ALARM_ARMED' => array('name' => 'Alarme armée', 'family' => 'Alarme', 'type' => 'Action', 'ignore' => true),
			'ALARM_RELEASED' => array('name' => 'Alarme libérée', 'family' => 'Alarme', 'type' => 'Action', 'ignore' => true),
			'ALARM_SET_MODE' => array('name' => 'Alarme Mode', 'family' => 'Alarme', 'type' => 'Action', 'ignore' => true),
			'WEATHER_TEMPERATURE' => array('name' => 'Météo Température', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_HUMIDITY' => array('name' => 'Météo Humidité', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_PRESSURE' => array('name' => 'Météo Pression', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_WIND_SPEED' => array('name' => 'Météo vitesse du vent', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_WIND_DIRECTION' => array('name' => 'Météo direction du vent', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_SUNSET' => array('name' => 'Météo lever de soleil', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_SUNRISE' => array('name' => 'Météo coucher de soleil', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MIN' => array('name' => 'Météo Température min', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MAX' => array('name' => 'Météo Température max', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION' => array('name' => 'Météo condition', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_ID' => array('name' => 'Météo condition (id)', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MIN_1' => array('name' => 'Météo Température min j+1', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MAX_1' => array('name' => 'Météo Température max j+1', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_1' => array('name' => 'Météo condition j+1', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_ID_1' => array('name' => 'Météo condition (id) j+1', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MIN_2' => array('name' => 'Météo Température min j+2', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MAX_2' => array('name' => 'Météo condition j+1 max j+2', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_2' => array('name' => 'Météo condition j+2', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_ID_2' => array('name' => 'Météo condition (id) j+2', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MIN_3' => array('name' => 'Météo Température min j+3', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MAX_3' => array('name' => 'Météo Température max j+3', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_3' => array('name' => 'Météo condition j+3', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_ID_3' => array('name' => 'Météo condition (id) j+3', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MIN_4' => array('name' => 'Météo Température min j+4', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_TEMPERATURE_MAX_4' => array('name' => 'Météo Température max j+4', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_4' => array('name' => 'Météo condition j+4', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'WEATHER_CONDITION_ID_4' => array('name' => 'Météo condition (id) j+4', 'family' => 'Météo', 'type' => 'Info', 'ignore' => true),
			'GB_OPEN' => array('name' => 'Portail ou garage bouton d\'ouverture', 'family' => 'Portail/Garage', 'type' => 'Action'),
			'GB_CLOSE' => array('name' => 'Portail ou garage bouton de fermeture', 'family' => 'Portail/Garage', 'type' => 'Action'),
			'GB_TOGGLE' => array('name' => 'Portail ou garage bouton toggle', 'family' => 'Portail/Garage', 'type' => 'Action'),
			'BARRIER_STATE' => array('name' => 'Portail état ouvrant', 'family' => 'Portail/Garage', 'type' => 'Info'),
			'GARAGE_STATE' => array('name' => 'Garage état ouvrant', 'family' => 'Portail/Garage', 'type' => 'Info'),
			'POWER' => array('name' => 'Puissance Electrique', 'family' => 'Generic', 'type' => 'Info'),
			'CONSUMPTION' => array('name' => 'Consommation Electrique', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'TEMPERATURE' => array('name' => 'Température', 'family' => 'Generic', 'type' => 'Info'),
			'AIR_QUALITY' => array('name' => 'Qualité de l\'air', 'family' => 'Generic', 'type' => 'Info'),
			'DEPTH' => array('name' => 'Profondeur', 'family' => 'Generic', 'type' => 'Info'),
			'BRIGHTNESS' => array('name' => 'Luminosité', 'family' => 'Generic', 'type' => 'Info'),
			'PRESENCE' => array('name' => 'Présence', 'family' => 'Generic', 'type' => 'Info'),
			'BATTERY' => array('name' => 'Batterie', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'BATTERY_CHARGING' => array('name' => 'Batterie en charge', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'SMOKE' => array('name' => 'Détection de fumée', 'family' => 'Generic', 'type' => 'Info'),
			'FLOOD' => array('name' => 'Inondation', 'family' => 'Generic', 'type' => 'Info'),
			'HUMIDITY' => array('name' => 'Humidité', 'family' => 'Generic', 'type' => 'Info'),
			'UV' => array('name' => 'UV', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'OPENING' => array('name' => 'Porte', 'family' => 'Generic', 'type' => 'Info'),
			'OPENING_WINDOW' => array('name' => 'Fenêtre', 'family' => 'Generic', 'type' => 'Info'),
			'SABOTAGE' => array('name' => 'Sabotage', 'family' => 'Generic', 'type' => 'Info'),
			'CO2' => array('name' => 'CO2 (ppm)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'VOLTAGE' => array('name' => 'Tension', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'NOISE' => array('name' => 'Son (dB)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'PRESSURE' => array('name' => 'Pression', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'RAIN_CURRENT' => array('name' => 'Pluie (mm/h)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'RAIN_TOTAL' => array('name' => 'Pluie (accumulation)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'WIND_SPEED' => array('name' => 'Vent (vitesse)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'WIND_DIRECTION' => array('name' => 'Vent (direction)', 'family' => 'Generic', 'type' => 'Info', 'ignore' => true),
			'SHOCK' => array('name' => 'Choc', 'family' => 'Generic', 'type' => 'Info'),
			'DISTANCE' => array('name' => 'Distance', 'family' => 'Generic', 'type' => 'Info'),
			'VOLUME' => array('name' => 'Volume', 'family' => 'Multimédia', 'type' => 'Info'),
			'SET_VOLUME' => array('name' => 'Volume', 'family' => 'Multimédia', 'type' => 'Action'),
			'CHANNEL' => array('name' => 'Chaine', 'family' => 'Multimédia', 'type' => 'Info'),
			'SET_CHANNEL' => array('name' => 'Chaine', 'family' => 'Multimédia', 'type' => 'Action'),
			'MEDIA_PAUSE' => array('name' => 'Pause', 'family' => 'Multimédia', 'type' => 'Action'),
			'MEDIA_RESUME' => array('name' => 'Lecture', 'family' => 'Multimédia', 'type' => 'Action'),
			'MEDIA_STOP' => array('name' => 'Stop', 'family' => 'Multimédia', 'type' => 'Action'),
			'MEDIA_NEXT' => array('name' => 'Suivant', 'family' => 'Multimédia', 'type' => 'Action'),
			'MEDIA_PREVIOUS' => array('name' => 'Précedent', 'family' => 'Multimédia', 'type' => 'Action'),
			'GENERIC_INFO' => array('name' => ' Générique', 'family' => 'Generic', 'type' => 'Info'),
			'GENERIC_ACTION' => array('name' => ' Générique', 'family' => 'Generic', 'type' => 'Action'),
			'DONT' => array('name' => 'Ne pas tenir compte de cette commande', 'family' => 'Generic', 'type' => 'All'),
		),
		'type' => array(
			'info' => array(
				'name' => 'Info',
				'subtype' => array(
					'numeric' => array(
						'name' => 'Numérique',
						'configuration' => array(
							'minValue' => array('visible' => true),
							'maxValue' => array('visible' => true),
							'listValue' => array('visible' => false)),
							'unite' => array('visible' => true),
							'isHistorized' => array('visible' => true, 'timelineOnly' => false, 'canBeSmooth' => true),
							'display' => array(
								'invertBinary' => array('visible' => false),
								'icon' => array('visible' => true, 'parentVisible' => true),
							),
						),
						'binary' => array(
							'name' => 'Binaire',
							'configuration' => array(
								'minValue' => array('visible' => false),
								'maxValue' => array('visible' => false),
								'listValue' => array('visible' => false)),
								'unite' => array('visible' => false),
								'isHistorized' => array('visible' => true, 'timelineOnly' => false, 'canBeSmooth' => false),
								'display' => array(
									'invertBinary' => array('visible' => true, 'parentVisible' => true),
									'icon' => array('visible' => true, 'parentVisible' => true),
								),
							),
							'string' => array(
								'name' => 'Autre',
								'configuration' => array(
									'minValue' => array('visible' => false),
									'maxValue' => array('visible' => false),
									'listValue' => array('visible' => false)),
									'unite' => array('visible' => true),
									'isHistorized' => array('visible' => true, 'timelineOnly' => true, 'canBeSmooth' => false),
									'display' => array(
										'invertBinary' => array('visible' => false),
										'icon' => array('visible' => true, 'parentVisible' => true),
									),
								),
							),
						),
						'action' => array(
							'name' => 'Action',
							'subtype' => array(
								'other' => array(
									'name' => 'Défaut',
									'configuration' => array(
										'minValue' => array('visible' => false),
										'maxValue' => array('visible' => false),
										'listValue' => array('visible' => false)),
										'unite' => array('visible' => false),
										'isHistorized' => array('visible' => false),
										'display' => array(
											'invertBinary' => array('visible' => false),
											'icon' => array('visible' => true, 'parentVisible' => true),
										),
									),
									'slider' => array(
										'name' => 'Curseur',
										'configuration' => array(
											'minValue' => array('visible' => true),
											'maxValue' => array('visible' => true),
											'listValue' => array('visible' => false)),
											'unite' => array('visible' => false),
											'isHistorized' => array('visible' => false),
											'display' => array(
												'invertBinary' => array('visible' => false),
												'icon' => array('visible' => true, 'parentVisible' => true),
											),
										),
										'message' => array(
											'name' => 'Message',
											'configuration' => array(
												'minValue' => array('visible' => false),
												'maxValue' => array('visible' => false),
												'listValue' => array('visible' => false)),
												'unite' => array('visible' => false),
												'isHistorized' => array('visible' => false),
												'display' => array(
													'invertBinary' => array('visible' => false),
													'icon' => array('visible' => true, 'parentVisible' => true),
												),
											),
											'color' => array(
												'name' => 'Couleur',
												'configuration' => array(
													'minValue' => array('visible' => false),
													'maxValue' => array('visible' => false),
													'listValue' => array('visible' => false)),
													'unite' => array('visible' => false),
													'isHistorized' => array('visible' => false),
													'display' => array(
														'invertBinary' => array('visible' => false),
														'icon' => array('visible' => true, 'parentVisible' => true),
													),
												),
												'select' => array(
													'name' => 'Liste',
													'configuration' => array(
														'minValue' => array('visible' => false),
														'maxValue' => array('visible' => false),
														'listValue' => array('visible' => true)),
														'unite' => array('visible' => false),
														'isHistorized' => array('visible' => false),
														'display' => array(
															'invertBinary' => array('visible' => false),
															'icon' => array('visible' => true, 'parentVisible' => true),
														),
													),
												),
											),
										),
									),
								);
								