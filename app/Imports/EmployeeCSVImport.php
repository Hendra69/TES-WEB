<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeCSVImport implements ToModel,WithChunkReading, SkipsEmptyRows, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $employeeRecords)
    {
        return new Employee([
            'pc' => isset($employeeRecords['pc']) ? $employeeRecords['pc'] : null,
            'trxref_id' => isset($employeeRecords['trxref_id']) ? $employeeRecords['pc'] : null,
            'tgl_trx'  => isset($employeeRecords['tgl_trx']) ? date('Y-m-d H:i:s',strtotime($employeeRecords['tgl_trx'])) : date('Y-m-d H:i:s'),
            'produk'  => isset($employeeRecords['produk']) ? $employeeRecords['pc'] : null,
            'qty'  => isset($employeeRecords['produk']) ? $employeeRecords['produk'] : null,
            'no_tujuan'  => isset($employeeRecords['no_tujuan']) ? $employeeRecords['no_tujuan'] : null,
            'kode_res'  => isset($employeeRecords['kode_res']) ? $employeeRecords['kode_res'] : null,
            'res'  => isset($employeeRecords['res']) ? $employeeRecords['res'] : null,
            'modul'  => isset($employeeRecords['modul']) ? $employeeRecords['modul'] : null,
            'status'  => isset($employeeRecords['status']) ? $employeeRecords['status'] : null,
            'tgl_status'  => isset($employeeRecords['tgl_status']) ? $employeeRecords['tgl_status'] : null,
            'nama_supp'  => isset($employeeRecords['nama_supp']) ? $employeeRecords['nama_supp'] : null,
            'hb_stock'  => isset($employeeRecords['hb_stock']) ? $employeeRecords['hb_stock'] : null,
            'h_beli'  => isset($employeeRecords['h_beli']) ? $employeeRecords['h_beli'] : null,
            'h_jual'  => isset($employeeRecords['h_jual']) ? $employeeRecords['h_jual'] : null,
            'komisi'  => isset($employeeRecords['komisi']) ? $employeeRecords['komisi'] : null,
            'laba'  => isset($employeeRecords['laba']) ? $employeeRecords['laba'] : null,
            'poin'  => isset($employeeRecords['poin']) ? $employeeRecords['poin'] : null,
            'reply_provide'  => isset($employeeRecords['reply_provide']) ? $employeeRecords['reply_provide'] : null,
            'sn'  => isset($employeeRecords['sn']) ? $employeeRecords['sn'] : null,
            'ref_id'  => isset($employeeRecords['ref_id']) ? $employeeRecords['ref_id'] : null,
            'rate_tp'  => isset($employeeRecords['rate_tp']) ? $employeeRecords['rate_tp'] : null,
            'rate'  => isset($employeeRecords['rate']) ? $employeeRecords['rate'] : null,
            'shell'  => isset($employeeRecords['shell']) ? $employeeRecords['shell'] : null,
            'hb_fix'  => isset($employeeRecords['hb_fix']) ? $employeeRecords['hb_fix'] : null,
            'notes'  => isset($employeeRecords['notes']) ? $employeeRecords['notes'] : null,
            'k_provider'  => isset($employeeRecords['k_provider']) ? $employeeRecords['k_provider'] : null,
            'provider'  => isset($employeeRecords['provider']) ? $employeeRecords['provider'] : null,
            'k_produk' => isset($employeeRecords['k_produk']) ? $employeeRecords['k_produk'] : null
        ]);
    }

    //In case your heading row is not on the first row, you can easily specify this in your import class:
    public function headingRow(): int
    {
        return 1;
    }

    //Chunk reading : increase in memory usage (Importing a large file can have a huge impact on the memory usage)
    public function chunkSize(): int
    {
        return 1000;
    }

    //Importing a large file to Eloquent models, might quickly become a bottleneck as every row results into an insert query.
    // limit the amount of queries done by specifying a batch size
    //This concern only works with the ToModel concern.
    public function batchSize(): int
    {
        return 1000;
    }
}
