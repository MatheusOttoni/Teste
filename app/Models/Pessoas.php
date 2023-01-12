<?php
 
namespace App\Models;
use App\Models\Profissoes;
 
use Illuminate\Database\Eloquent\Model;
 
class Pessoas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $fillable = ['nome','sexo','cpf','nascimento','email','celular','profissao_id'];
    protected $table = 'pessoas';
    public $timestamps = false;

 

    public function Profissoes()
    {
        return $this->belongsTo(Profissoes::class, 'profissao_id');
    }
}