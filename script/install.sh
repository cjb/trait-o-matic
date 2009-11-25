#!/bin/bash

set -e

. "$(echo "$0" | sed -e 's/[^\/]*$//')defaults.sh"

sudo DEBUG="$DEBUG" $SCRIPT_DIR/prereqs-ubuntu.sh
sudo DEBUG="$DEBUG" $SCRIPT_DIR/install-sysconfig.sh
$SCRIPT_DIR/install-user.sh
$SCRIPT_DIR/install-git-hooks.sh
