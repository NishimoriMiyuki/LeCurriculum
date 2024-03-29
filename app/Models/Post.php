<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->where('is_deleted', false)->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->where('is_deleted', false)->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}