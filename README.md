Lab3M.
===============================

[Lab3M](https://lab3m.com/en) is full cycle product company working on complexity fintech, IoT, mobile and blockchain solutions. We see potential and no reason not to implement it. Our company is not limited to the development department but we have great design, marketing, business analytics and customer support team.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

Tech Info
-------------------


Background is [Yii2 advanced template](https://github.com/yiisoft/yii2-app-advanced).

Deployment:
```
    composer install
    php init
    configure DB settings in common/config/main-local.php
    configure domain settings in common/config/main-local.php
    php yii migrate
    disable notices in frontend/web/index.php
```

Routing logic (contained in /frontend/config/main.php):

<b>/anything</b> - blog/show-post or services/show-service-category

<b>/service-category/service</b> - services/show-db-servicey




DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
