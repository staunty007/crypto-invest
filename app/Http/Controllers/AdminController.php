<?php

namespace App\Http\Controllers;

use App\ManageProfit;
use App\Package;
use App\PaymentRequest;
use App\Transaction;
use App\User;
use App\Wallet;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $view = "pages.auth.admin.";

    public function dashboard()
    {
        return view($this->view. 'index');
    }

    public function allTransactions() {
        $transactions = Transaction::latest()->with('user:id,name,status','user_info:user_id,payment_type,payment_address','package:id,name','platform:id,name')->get();
        //return $transactions;
        return view($this->view. 'transactions', compact('transactions'));
    }

    public function allPackages() {
        $packages = Package::all();
        return view($this->view. 'packages', compact('packages'));
    }
    
    public function allCustomers() {
        $customers = User::latest()->with('wallet:user_id,active_balance,profit_balance')->where('role','!=','admin')->get();
        return view($this->view. 'customers', compact('customers'));
    }
    
    public function activeSubscribedCustomers() {
        $subscribers = ManageProfit::latest()->with('user:id,name','wallet:user_id,active_balance,profit_balance')->where('duration_remaining','!=', 0)->get();
       // return CarbonInterval::minutes($subscribers['duration_remaining'])->cascade(); 
        return view($this->view. 'active-subscribers', compact('subscribers'));
    }

    public function paymentRequestLists() {
        $pay_requests = PaymentRequest::latest()->with('user:id,name')->get();
        return view('pages.auth.admin.payment-request' ,compact('pay_requests'));
    }

    public function approvePayment(Request $request, $ref) {
        $payment = Transaction::where('transaction_ref', $ref)->first();
        $payload = [
            'user_id' => $payment['user_id'],
            'description' => "Package Payment",
            'amount' => rand(100, 200),
            'status' => "SUCCESSFUL",
            'transaction_ref' => $ref
        ];

        Transaction::approveUserPayment($payload);

       return redirect('all-transactions');
    }
}
