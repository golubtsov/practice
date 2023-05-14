<?php

namespace App\Enums;

enum Categories: string
{
    case Experience = 'Личный опыт';
    case ExperienceURL = 'experience';
    case Projects = 'Проекты';
    case ProjectsURL = 'projects';
    case Frontend = 'Frontend';
    case FrontendURL = 'frontend';
    case Backend = 'Backend';
    case BackendURL = 'backend';
    case Big_Data = 'BigData';
    case Big_DataURL = 'big-data';
    case Junior = 'Для начинающих';
    case JuniorURL = 'junior';
}
