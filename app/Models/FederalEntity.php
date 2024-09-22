<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalEntity extends Model
{
    use HasFactory;
    protected $table = 'FederalEntity';
    protected $primaryKey = 'idFederalEntity';
    public $timestamps = false;
    protected $fillable = ['Name', 'Active', 'CreationDate', 'CreationUser', 'EditDate', 'EditUser', 'DeleteDate', 'DeleteUser', 'Deleted'];
}
