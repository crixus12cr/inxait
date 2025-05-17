<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithHeadings, WithStyles, WithEvents
{
    public function collection()
    {
        return User::whereHas('rols', function ($query) {
                    $query->where('rols.id', 2);
                })
                ->with('typeIdentification', 'city', 'rols')
                ->get()
                ->map(function($user) {
                    return [
                        'Nombre' => $user->name,
                        'Apellido' => $user->last_name,
                        'Teléfono' => $user->phone,
                        'Email' => $user->email,
                        'Número de Documento' => $user->document_number,
                        'Tipo Identificación' => $user->typeIdentification->name ?? '',
                        'Ciudad' => $user->city->name ?? '',
                        'Roles' => $user->rols->pluck('name')->implode(', '),
                        'Ganador' => $user->winner ? 'Sí' : 'No',
                    ];
                });
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Teléfono',
            'Email',
            'Número de Documento',
            'Tipo Identificación',
            'Ciudad',
            'Roles',
            'Ganador',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'color' => ['argb' => 'FFFFFFFF']],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['argb' => 'FFB91C1C'],
                ],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                foreach(range('A', $sheet->getHighestColumn()) as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
            },
        ];
    }
}
