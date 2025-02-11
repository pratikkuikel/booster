<?php

namespace App;

enum AdRequestStatus: string
{
    case Approved = 'approved';

    case Pending = 'pending';

    case Cancelled = 'cancelled';
}
