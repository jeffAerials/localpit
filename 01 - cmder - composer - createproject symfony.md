
E:\wamp64\www
λ composer create-project symfony/framework-standard-edition localpitAdmin "3.2.*"
Installing symfony/framework-standard-edition (v3.2.2)
  - Installing symfony/framework-standard-edition (v3.2.2) Loading from cache
Created project in localpitAdmin
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 33 installs, 0 updates, 0 removals
  - Installing doctrine/lexer (v1.0.1) Loading from cache
  - Installing doctrine/annotations (v1.2.7) Loading from cache
  - Installing twig/twig (v1.31.0) Loading from cache
  - Installing symfony/polyfill-util (v1.3.0) Loading from cache
  - Installing paragonie/random_compat (v2.0.4) Loading from cache
  - Installing symfony/polyfill-php70 (v1.3.0) Loading from cache
  - Installing symfony/polyfill-php56 (v1.3.0) Loading from cache
  - Installing symfony/polyfill-mbstring (v1.3.0) Loading from cache
  - Installing symfony/symfony (v3.2.2) Loading from cache
  - Installing symfony/polyfill-intl-icu (v1.3.0) Loading from cache
  - Installing psr/log (1.0.2) Loading from cache
  - Installing psr/cache (1.0.1) Loading from cache
  - Installing doctrine/inflector (v1.1.0) Loading from cache
  - Installing doctrine/collections (v1.3.0) Loading from cache
  - Installing doctrine/cache (v1.6.1) Loading from cache
  - Installing doctrine/common (v2.6.2) Loading from cache
  - Installing jdorn/sql-formatter (v1.2.17) Loading from cache
  - Installing doctrine/doctrine-cache-bundle (1.3.0) Loading from cache
  - Installing doctrine/dbal (v2.5.6) Loading from cache
  - Installing doctrine/doctrine-bundle (1.6.6) Loading from cache
  - Installing doctrine/instantiator (1.0.5) Loading from cache
  - Installing doctrine/orm (v2.5.6) Loading from cache
  - Installing incenteev/composer-parameter-handler (v2.1.2) Loading from cache
  - Installing sensiolabs/security-checker (v4.0.0) Loading from cache
  - Installing sensio/distribution-bundle (v5.0.18) Loading from cache
  - Installing sensio/framework-extra-bundle (v3.0.19) Loading from cache
  - Installing monolog/monolog (1.22.0) Loading from cache
  - Installing symfony/monolog-bundle (v3.0.3) Loading from cache
  - Installing symfony/polyfill-apcu (v1.3.0) Loading from cache
  - Installing swiftmailer/swiftmailer (v5.4.5) Loading from cache
  - Installing symfony/swiftmailer-bundle (v2.4.2) Loading from cache
  - Installing sensio/generator-bundle (v3.1.2) Loading from cache
  - Installing symfony/phpunit-bridge (v3.2.2) Loading from cache
paragonie/random_compat suggests installing ext-libsodium (Provides a modern crypto API that can be used to generate random bytes.)
doctrine/doctrine-cache-bundle suggests installing symfony/security-acl (For using this bundle to cache ACLs)
sensio/framework-extra-bundle suggests installing symfony/psr-http-message-bridge (To use the PSR-7 converters)
monolog/monolog suggests installing aws/aws-sdk-php (Allow sending log messages to AWS services like DynamoDB)
monolog/monolog suggests installing doctrine/couchdb (Allow sending log messages to a CouchDB server)
monolog/monolog suggests installing ext-amqp (Allow sending log messages to an AMQP server (1.0+ required))
monolog/monolog suggests installing ext-mongo (Allow sending log messages to a MongoDB server)
monolog/monolog suggests installing graylog2/gelf-php (Allow sending log messages to a GrayLog2 server)
monolog/monolog suggests installing mongodb/mongodb (Allow sending log messages to a MongoDB server via PHP Driver)
monolog/monolog suggests installing php-amqplib/php-amqplib (Allow sending log messages to an AMQP server using php-amqplib)
monolog/monolog suggests installing php-console/php-console (Allow sending log messages to Google Chrome)
monolog/monolog suggests installing rollbar/rollbar (Allow sending log messages to Rollbar)
monolog/monolog suggests installing ruflin/elastica (Allow sending log messages to an Elastic Search server)
monolog/monolog suggests installing sentry/sentry (Allow sending log messages to a Sentry server)
Generating autoload files
> Incenteev\ParameterHandler\ScriptHandler::buildParameters
Creating the "app/config/parameters.yml" file
Some parameters are missing. Please provide them.
database_host (127.0.0.1):
database_port (null):
database_name (symfony):
database_user (root):
database_password (null):
mailer_transport (smtp):
mailer_host (127.0.0.1):
mailer_user (null):
mailer_password (null):
secret (ThisTokenIsNotSoSecretChangeIt):
> Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::buildBootstrap
> Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::clearCache

 // Clearing the cache for the dev environment with debug true


 [OK] Cache for the "dev" environment (debug=true) was successfully cleared.


> Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::installAssets

 Trying to install assets as relative symbolic links.

 -- -------- ----------------
     Bundle   Method / Error
 -- -------- ----------------


 [OK] All assets were successfully installed.


> Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::installRequirementsFile
> Sensio\Bundle\DistributionBundle\Composer\ScriptHandler::prepareDeploymentTarget

E:\wamp64\www
λ