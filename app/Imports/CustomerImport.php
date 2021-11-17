<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class CustomerImport implements ToModel, WithHeadingRow, SkipsOnError, WithBatchInserts, SkipsOnFailure, WithValidation
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'id_customer' => $row['id_customer'],
	    'nama' => $row['nama'] ?? $row['nama_lengkap'],
	    'alamat' => $row['alamat']
        ]);
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function rules(): array
    {
	return [
	    '*.id_customer' => ['unique:customer,id_customer']
	];
    }
}
