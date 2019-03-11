<?php

declare(strict_types = 1);

namespace CodelyTv\Shared\Infrastructure\Api\Serializer;

use CodelyTv\Mooc\Student\Application\Find\StudentResponse;
use CodelyTv\Mooc\Video\Application\Find\VideoResponse;
use CodelyTv\Mooc\Video\Application\Find\VideosResponse;
use CodelyTv\Shared\Infrastructure\Jms\CodelyTvSerializerDriver;

final class ApiSerializerDriver extends CodelyTvSerializerDriver
{
    public function __construct()
    {
        $this->addResourceFile(__FILE__);
    }

    public function getMetadata(): array
    {
        return [
            StudentResponse::class => [
                'id'                 => ['type' => 'string'],
                'name'               => ['type' => 'string'],
                'totalPendingVideos' => ['type' => 'string'],
            ],
            VideoResponse::class   => [
                'id'       => ['type' => 'string'],
                'type'     => ['type' => 'string'],
                'title'    => ['type' => 'string'],
                'url'      => ['type' => 'string'],
                'courseId' => ['type' => 'string'],
            ],
            VideosResponse::class  => [
                'videos' => ['type' => 'array']
            ],
        ];
    }
}
