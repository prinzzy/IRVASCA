<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmailsImport;


class AdminEmailController extends Controller
{
    public function index()
    {
        $emails = Email::all();
        return view('admin.emails.index', [
            'emails' => $emails
        ]);
    }

    public function getEmailStatsByMonth()
    {
        // Aggregate email data by month
        $emailsPerMonth = Email::select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get()
            ->map(function ($item) {
                return [
                    'month' => Carbon::create($item->year, $item->month, 1)->format('Y-m'),
                    'count' => $item->count,
                ];
            });


        return response()->json($emailsPerMonth);
    }

    public function countsByDay()
    {
        // Fetch counts of emails grouped by day
        $emailCountsByDay = Email::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get();

        // Return data as JSON
        return response()->json($emailCountsByDay);
    }

    public function importEmails(Request $request)
    {

        set_time_limit(300);
        // Validate that a CSV or Excel file has been uploaded
        $request->validate([
            'email_file' => 'required|mimes:csv,xlsx,xls',
        ]);

        try {
            // Use Laravel Excel to import the file
            Excel::import(new EmailsImport, $request->file('email_file'));

            // Redirect back with success message
            return redirect()->back()->with('success', 'Emails imported successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Failed to import emails: ' . $e->getMessage());
        }
    }
}
