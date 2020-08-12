<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\NoCoursesFound;

final class AllCoursesFinder
{
    private CourseRepository $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): FindAllCoursesResponse
    {
        $courses = $this->repository->findAll();

        if (null === $courses)
        {
            throw new NoCoursesFound();
        }

        return new FindAllCoursesResponse($courses);
    }
}
