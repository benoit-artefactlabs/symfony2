#!/bin/bash

ConsolePath=/Users/benoit/Documents/workshop/symfony2/app/console
php $ConsolePath cache:clear --env=dev
php $ConsolePath cache:clear --env=prod
php $ConsolePath cache:clear --env=test
#php $ConsolePath assetic:clear
php $ConsolePath assets:install web --symlink
php $ConsolePath assetic:dump --env=prod

# EOF
