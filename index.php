<?php
require_once(__DIR__ . '/../../config.php');

require_login();

$context = context_system::instance();

$PAGE->set_url(new moodle_url('/local/helloworld/index.php'));
$PAGE->set_context($context);
$PAGE->set_title(get_string('pluginname', 'local_helloworld'));
$PAGE->set_heading(get_string('pluginname', 'local_helloworld'));

echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('pluginname', 'local_helloworld'));

echo html_writer::tag(
    'p',
    get_string('welcome', 'local_helloworld')
);

echo $OUTPUT->footer();