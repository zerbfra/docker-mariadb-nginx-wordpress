#!/bin/sh
#
# Execute wp-cli as the current directory's owner.

THIS_OWNER="$(stat -c %U .)"
su -m "$THIS_OWNER" -c  "/bin/wp-cli.phar --path='$(pwd)' '$@'"