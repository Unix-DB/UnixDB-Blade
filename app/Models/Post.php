<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function Tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function Distribution()
    {
        return $this->belongsTo(Distribution::class);
    }

    public function CPU()
    {
        return $this->belongsTo(cpu::class);
    }

    public function GPU()
    {
        return $this->belongsTo(gpu::class);
    }

    public function RAM()
    {
        return $this->belongsTo(ram::class);
    }

    public function Editor()
    {
        return $this->belongsTo(Editor::class);
    }

    public function Kernel()
    {
        return $this->belongsTo(Kernel::class);
    }

    public function Resolution()
    {
        return $this->belongsTo(Resolution::class);
    }

    public function Shell()
    {
        return $this->belongsTo(Shell::class);
    }

    public function Terminal()
    {
        return $this->belongsTo(Terminal::class);
    }
}
