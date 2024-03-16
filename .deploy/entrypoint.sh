#!/bin/sh
composer dump-autoload --no-interaction --no-dev --optimize
supervisord -c $SCRIPT_PATH/.deploy/config/supervisor.conf
