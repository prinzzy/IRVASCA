<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class EmailsImport implements ToCollection
{
    protected $emails = [];
    protected $validCount = 0;
    protected $invalidCount = 0;
    protected $skippedCount = 0;
    protected $failedCount = 0;

    public function collection(Collection $rows)
    {
        $timezone = 'Asia/Jakarta';

        foreach ($rows as $row) {
            $email = $row[1]; // Assuming email is in the second column

            $validator = Validator::make(['email' => $email], [
                'email' => 'required|email'
            ]);

            if (!$validator->fails()) {
                if (!$this->emailExists($email)) {
                    try {
                        $now = Carbon::now($timezone);

                        $this->emails[] = [
                            'email' => $email,
                            'created_at' => $now,
                            'updated_at' => $now,
                        ];
                        $this->validCount++;
                    } catch (\Exception $e) {
                        $this->failedCount++;
                    }
                } else {
                    $this->skippedCount++;
                }
            } else {
                $this->invalidCount++;
            }
        }

        if (count($this->emails) > 1000) {
            Email::insert($this->emails);
            $this->emails = [];
        }
    }

    private function emailExists($email)
    {
        return DB::table('emails')->where('email', $email)->exists();
    }

    public function __destruct()
    {
        if (count($this->emails) > 0) {
            Email::insert($this->emails);
        }
    }

    // Methods to get progress counts
    public function getValidCount()
    {
        return $this->validCount;
    }

    public function getInvalidCount()
    {
        return $this->invalidCount;
    }

    public function getSkippedCount()
    {
        return $this->skippedCount;
    }

    public function getFailedCount()
    {
        return $this->failedCount;
    }

    public function getTotal()
    {
        return $this->validCount + $this->invalidCount + $this->skippedCount + $this->failedCount;
    }
}
