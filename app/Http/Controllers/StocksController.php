<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\StocksModel;

class StocksController extends Controller
{
    public function dashboard () {
        $stocks = StocksModel::all();
        return view('pages/Reports/dashboard',['tbl_stocks'=>$stocks]);
    }

    //EDITING SPECIFIC RECORD OF STOCK
    public function edit_stock(Request $request, $id) {
        $stocks = StocksModel::find($id);
        $response = [
            'tbl_stocks' => $stocks
        ];
        return view('pages/Editables/stock_update', $response);
    }

    //UPDATING SPECIFIC RECORD OF STOCK
    public function update_stock (Request $request, $id) {
        $data = [
            'name' => $request->input()['name'],
            'description' => $request->input()['description'],
            'price' => $request->input()['price'],
            'availability' => $request->input()['availability']
        ];
        $updated_stock = StocksModel::where('id', $id)->update($data);
        return redirect(route('dashboard'))->with("success", "The information of (blank) has been updated successfully.");
    }

    //DELETING SPECIFIC RECORD OF USER
    public function remove_stock($id) {
        $stocks = StocksModel::find($id);
        $stocks->delete();
        return redirect(route('dashboard'))->with("remove", "A stock has been remove.");
    }

    public function pending () {
        return view('pages/Reports/pending');
    }

    public function onprogress () {
        return view('pages/Reports/on-progress');
    }

    public function delivered () {
        return view('pages/Reports/delivered');
    }

    public function cancelled () {
        return view('pages/Reports/cancelled');
    }

    public function statistics () {
        return view('pages/Reports/statistics');
    }

    public function financialSummary () {
        return view('pages/Reports/financial-summary');
    }

    public function account () {
        return view('pages/Settings/account');
    }

    public function about () {
        return view('pages/Others/about');
    }
}

