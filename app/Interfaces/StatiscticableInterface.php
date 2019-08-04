<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

interface StatiscticableInterface
{
    public function getStats();
}
