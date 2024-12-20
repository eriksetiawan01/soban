<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'user_id',
        'layanan_jasa_id',
        'penyedia_jasa_id',
        'nama_lengkap',
        'alamat',
        'no_telepon',
        'waktu_pemesanan',
        'jam_pemesanan',
        'detail_pekerjaan',
        'harga',
        'status_pembayaran',
        'status_pesanan',
        'ulasan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function layananJasa()
    {
        return $this->belongsTo(LayananJasa::class);
    }

    public function penyediaJasa()
    {
        return $this->belongsTo(User::class, 'penyedia_jasa_id');
    }
}
