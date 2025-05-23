<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case CompanyUser = 'company_user';
    case IndividualUser = 'individual_user';
}
