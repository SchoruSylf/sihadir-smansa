<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return ['Nomor Induk', 'Name', 'Email', 'Role', 'Status','Jenis Kelamin'];
    }
    public function collection()
    {
        return User::select('nomor_induk', 'name', 'email', 'role', 'status', 'jenis_kelamin')->get();
    }
    
}
