# Structurizr for PHP extensions

### Adr Importer 

Import Decisions to into your model documentation directly from ADR files. 
Example: 

```php
<?php
use StructurizrPHP\AdrTools\AdrToolsImporter;
use StructurizrPHP\Core\Workspace;

$workspace = new Workspace('1', 'Test Workspace', 'Just a test workspace');
$softwareSystem = $workspace->getModel()->addSoftwareSystem('Software System', 'Some kind of a system');

$importer = new AdrToolsImporter($workspace, __DIR__ . '/Resources/adr');
$importer->importArchitectureDecisionRecords($softwareSystem);
``` 