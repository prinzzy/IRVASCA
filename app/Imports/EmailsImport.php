<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmailsImport implements ToCollection
{
    protected $emails = [];

    public function collection(Collection $rows)
    {
        // Define the time zone for Jakarta
        $timezone = 'Asia/Jakarta';

        foreach ($rows as $row) {
            $email = $row[1]; // Assuming email is in the second column

            // Validate email format
            $validator = Validator::make(['email' => $email], [
                'email' => 'required|email'
            ]);

            if (!$validator->fails() && !$this->emailExists($email)) {
                $now = Carbon::now($timezone); // Set the time zone for now()

                $this->emails[] = [
                    'email' => $email,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        }

        // Insert emails in batches
        if (count($this->emails) > 1000) { // Batch size
            Email::insert($this->emails);
            $this->emails = []; // Clear the array
        }
    }

    private function emailExists($email)
    {
        return DB::table('emails')->where('email', $email)->exists();
    }

    public function __destruct()
    {
        // Insert remaining emails
        if (count($this->emails) > 0) {
            Email::insert($this->emails);
        }
    }
}
