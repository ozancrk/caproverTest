#!/bin/sh
supervisord -c $SCRIPT_PATH/.deploy/config/supervisor.conf
