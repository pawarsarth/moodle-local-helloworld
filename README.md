# Moodle Hello World Plugin

A simple custom Local Plugin developed for Moodle LMS using PHP.

## Features

- Simple Hello World welcome page.
- Integrated with Moodle's standard theme.
- Uses Moodle language strings.
- Requires authenticated Moodle users.

## Technologies

- Moodle LMS
- PHP
- Docker
- Git & GitHub

## Project Structure

```text
local_helloworld/
├── version.php
├── index.php
└── lang/
    └── en/
        └── local_helloworld.php
```

## Installation

1. Clone this repository.
2. Copy the `helloworld` folder into your Moodle installation's `local/` directory.
3. Visit Site administration → Notifications.
4. Complete the plugin installation.
5. Visit `/local/helloworld/index.php`.

## Compatibility

- Moodle 4.5 or later.

## Author

Sarthak Pawar

## License

MIT
