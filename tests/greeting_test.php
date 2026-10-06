<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace block_greeting;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../block_greeting.php');

/**
 * Tests for the Greeting block.
 *
 * @package    block_greeting
 * @copyright  2026 Antonio Carlos
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \block_greeting
 * @covers     \block_greeting\local\greeting_text
 * @group      block_greeting
 */
final class greeting_test extends \advanced_testcase {
    /**
     * The greeting string is rendered in the block content.
     *
     * @return void
     */
    public function test_greeting_message_is_rendered(): void {
        global $PAGE;

        $block = new \block_greeting();
        $block->page = $PAGE;
        $content = $block->get_content();

        $this->assertStringContainsString(get_string('greeting', 'block_greeting'), $content->text);
    }
}
