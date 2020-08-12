<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Application\Find\FindAllCoursesResponse;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;

final class FindAllCoursesResponseMother
{
    public static function create(array $courses): FindAllCoursesResponse
    {
        return new FindAllCoursesResponse($courses);
    }

    public static function random(): FindAllCoursesResponse
    {
        return self::create([
            CourseMother::random(),
            CourseMother::random()
        ]);
    }
}