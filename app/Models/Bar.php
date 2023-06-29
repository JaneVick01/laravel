<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    public function addOrdan() {
        $this->refresh();

        if($this->waldo == null) {
            $this->ordan = 'empty';
        } else if($this->grault > pi()) {
            $this->ordan = 'low';
        } else {
            $this->ordan = 'normal';
        }
        $this->save();
    }
}
