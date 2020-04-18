<?php


namespace CodelyTv\Tests\Mooc\Videos\Infrastructure\Persistence;


use CodelyTv\Mooc\Videos\Domain\VideoRepository;
use CodelyTv\Mooc\Videos\Infrastructure\Persistence\FileVideoRepository;
use CodelyTv\Tests\Shared\Infrastructure\PhpUnit\UnitTestCase;

class FileVideoModuleInfrastructureTestCase extends UnitTestCase
{
    const VIDEO_FILES_PATH = __DIR__;
    private $repository;

    protected function repository(): VideoRepository
    {
        return $this->repository = $this->repository ?: new FileVideoRepository(self::VIDEO_FILES_PATH);
    }

    protected function tearDown(): void
    {
        $this->deleteVideoFiles();
    }

    protected function deleteVideoFiles(): void
    {
        $videoFilesPath = glob(self::VIDEO_FILES_PATH . '/videos*.repo');
        foreach ($videoFilesPath as $file) {
            unlink($file);
        }
    }

}