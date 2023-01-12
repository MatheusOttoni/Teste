<?php
 
namespace App\Models;
use App\Models\Pessoas;
 
use Illuminate\Database\Eloquent\Model;
 
class Profissoes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profissoes';

    public function pessoas()
    {
        return $this->hasOne(Pessoas::class);
    }
}