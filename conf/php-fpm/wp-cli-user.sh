#!/bin/sh
#
# Execute wp-cli as the current directory's owner.

THIS_OWNER="$(stat -c %U .)"
sudo -u "$THIS_OWNER" --  /bin/wp-cli.phar --path="$(pwd)" "$@"