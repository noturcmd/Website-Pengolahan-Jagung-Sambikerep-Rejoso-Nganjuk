<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KknMember extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kkn_members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'judul_proker',
        'deskripsi_singkat',
        'foto'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Accessor untuk mendapatkan URL foto
     */
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            // Jika foto adalah URL lengkap (http/https)
            if (filter_var($this->foto, FILTER_VALIDATE_URL)) {
                return $this->foto;
            }

            // Jika foto adalah file lokal di storage/app/public/members
            // Cek apakah file exists
            $filePath = storage_path('app/public/members/' . $this->foto);
            if (file_exists($filePath)) {
                return asset('storage/members/' . $this->foto);
            }
        }

        // Default avatar jika tidak ada foto
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->nama) . '&background=198754&color=fff&size=300';
    }

    /**
     * Method untuk mendapatkan semua member dengan urutan nama
     */
    public static function getAllOrdered()
    {
        return self::orderBy('nama', 'asc')->get();
    }
}
