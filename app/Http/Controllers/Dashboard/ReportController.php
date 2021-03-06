<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super_admin');
    }//end of constructor

    public function index()
    {
        return view('dashboard.reports.index');
    }//end of index

    public function reports(Request $request)
    {
        $request->validate([
            'from_at' => 'required',
            'to_at' => 'required',
        ]);
        $from = $request->from_at . ' 00:00:00';
        $to = $request->to_at . ' 23:59:59';

        $orders = Order::whereBetween('created_at', [$from, $to]);
        $orders_total = $orders->sum('total_price');
        $orders = $orders->orderBy('total_price', 'desc')->get();
        $data = [
            'orders' => $orders,
            'orders_total' => $orders_total
        ];
        return view('dashboard.reports.orders', $data);

    }//end of reports

}//end of controller
