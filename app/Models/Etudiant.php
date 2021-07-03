<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Etudiant extends Model
{
    use HasFactory;
    public $primaryKey = 'cin';
    public $incrementing = false;
    protected $fillable = [ 
        'cin', 'prenomNom', 'dteNaissance', 'genre', 'pays' , 'email',
    ]; 
}