<?php
/*
  cards.iwwa.iwwamembership CivIWWA membership configuration.
  Copyright (C) 2017  Johan Vervloet

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as
  published by the Free Software Foundation, either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/**
 * Collection of upgrade steps.
 */
class CRM_IwwaMembership_Upgrader extends CRM_IwwaMembership_Upgrader_Base {
  /**
   * Apply configuration when extension is enabled.
   */
  public function enable() {
    $configResult = civicrm_api3('Civiconfig', 'load_json', [
      // there should be a better way to do this.
      'path' => realpath(__DIR__ . '/../../') . '/resources/'
    ]);
    return (!$configResult['is_error']);
  }

  /**
   * Apply CiviConfig upgrades.
   *
   * @return bool
   */
  public function upgrade_4702() {
    $configResult = civicrm_api3('Civiconfig', 'load_json', [
      // there should be a better way to do this.
      'path' => realpath(__DIR__ . '/../../') . '/resources/'
    ]);
    return (!$configResult['is_error']);
  }
}
