<?php

declare (strict_types=1);

namespace StructurizrPHP\Tests\Integration;

use PHPUnit\Framework\TestCase;
use StructurizrPHP\AdrTools\AdrToolsImporter;
use StructurizrPHP\Core\Workspace;

final class AdrToolsImporterTest extends TestCase
{
    public function test_importing_empty_adr_folder()
    {
        $workspace = new Workspace('1', 'Test Workspace', 'Just a test workspace');

        $importer = new AdrToolsImporter($workspace, __DIR__);

        $importer->importArchitectureDecisionRecords($workspace->getModel()->addSoftwareSystem('Software System', 'Some kind of a system'));

        $this->assertTrue($workspace->getDocumentation()->isEmpty());
    }

    public function test_importing_adrs()
    {
        $workspace = new Workspace('1', 'Test Workspace', 'Just a test workspace');

        $importer = new AdrToolsImporter($workspace, __DIR__ . '/Resources/adr');

        $importer->importArchitectureDecisionRecords($workspace->getModel()->addSoftwareSystem('Software System', 'Some kind of a system'));

        $this->assertFalse($workspace->getDocumentation()->isEmpty());
    }
}