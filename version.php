<?php
// Certifications fields plugin for Certificate plugin for Moodle™.
// phpcs:disable moodle.Files.BoilerplateComment.CommentEndedTooSoon

/**
 * Certification fields.
 *
 * @package     certificateelement_mucertify
 * @copyright   2025 Petr Skoda
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/** @var stdClass $plugin */
$plugin->component = 'certificateelement_mucertify';
$plugin->version   = 2025040900;
$plugin->requires  = 2024091700.00;
$plugin->maturity  = MATURITY_ALPHA;
$plugin->supported = [405, 405];
$plugin->release   = 'mu-4.5.3-04';

$plugin->dependencies = [
    'tool_mucertify' => 2025040900,
    'tool_certificate' => 2024090300,
];
