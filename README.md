Yii 2 For Beginners 2016-26-30.0
================================

Working through "[Yii 2 For Beginners](https://leanpub.com/yii2forbeginners)" by Bill Keck.

#### 3016-03-29

* 2016-26-29.0 - Chapter 7 complete.
* 2016-26-29.4 - Chapter 8 complete.

#### 3016-03-28

* 2016-26-28.5 - Chapter 5 complete.
* 2016-26-28.8 - Chapter 6 complete.

#### 3016-03-27

* 2016-26-27.7 - Chapter 2 complete.
* No modifications in Chapter 3.
* 2016-26-27.9 - Chapter 4 complete.

#### 3016-03-26

* Returning to beginning after a too-long break.

### Directory Structure

```
common
    config/              contains shared configurations
    controllers/
    helpers/
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    widgets/
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
components/
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
