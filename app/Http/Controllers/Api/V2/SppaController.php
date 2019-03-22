<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\Trans\Health\JTCare\CashPlan\CashPlan;

use App\Models\Trans\Health\JTCare\CashPlan\CashPlanDetail;
use App\Models\Trans\Health\JTCare\CashPlan\TempDetails;
use App\Models\Trans\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\V1\APIController;
use App;
use Lang;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\Access\User\User;
use Validator;
use PDF;
class SppaController extends APIController

{
    const CASHPLAN = CashPlan::class;
    const STATUS = Status::class;
    const CASHPLANDETAIL = CashPlanDetail::class;
    const CASHPLANTEMP = TempDetails::class;

    public function updateStatus($order_id,$type,$status)
    {
        Status::where('order_id', $order_id)
          ->update(['type' => $type, 'status' => $status]);
    }
    public function saveStatus(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'order_id'  => 'required|min:4'
        ]);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());

        }
        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data = self::STATUS;
        $data = new $data();
        $data->order_id = $request->input("order_id");
        $data->product_tpe = "CASHPLAN";
        $data->user_id = $user->id;
        $data->save();
        
        return $this->respond([
            'data'  => "Save Set Status Successfull",            
        ]);
    }
    public function cashplanTempData()
    {
        $token = JWTAuth::getToken();

        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data=DB::table('temp_detail_casplan')
        ->where('temp_detail_casplan.user_id',$user->id)
        ->orderBy('created_at','asc')->get();

        return $this->respond(
            $data
        );
    }
    public function cashplanTempDataSummary()
    {
        $token = JWTAuth::getToken();

        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $summary=DB::table('temp_detail_casplan')
        ->where('temp_detail_casplan.user_id',$user->id)
        ->orderBy('created_at','asc')->sum('unit_price');
        return $this->respond(
            [
                'data'  => $summary,            
            ] 
        );
    }
    public function cashplanTempDataByID($id)
    {
        $token = JWTAuth::getToken();

        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data=DB::table('temp_detail_casplan')
        ->where('temp_detail_casplan.user_id',$user->id)
        ->where('temp_detail_casplan.id',$id)
        ->orderBy('created_at','asc')->get();
        return $this->respond(
             $data
        );
    }

   
    public function saveCashPlanTemp(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'participant_name'  => 'required|min:4',
            'gender'  => 'required',
            'birth_place'  => 'required|min:4',
            'birth_date'  => 'required|min:4',
            'nip'  => 'required|min:10|unique:temp_detail_casplan',
            'plan'  => 'required',
            'unit_price'  => 'required',
        ]);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());

        }
        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data = self::CASHPLANTEMP;
        $data = new $data();
        $data->participant_name = $request->input("participant_name");
        $data->jk = $request->input("gender");
        $data->tempat = $request->input("birth_place");
        $data->tgl_lahir = $request->input("birth_date");
        $data->nip = $request->input("nip");
        $data->plan = $request->input("plan");
        $data->unit_price = $request->input("unit_price");
        $data->user_id = $user->id;
        $data->save();
        
        return $this->respond([
            'data'  => "Save Successfull",            
        ]);
    }
    public function cashplanMaster(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'order_id'     => 'required',
            'transaction_id'  => 'required',
            'payment_code'  => 'required',
            'payment_type'  => 'required',
            'gross_amount'=>'required',
            'time'  => 'required',
            'status' =>'required'
        ]);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
            //return $validation->messages()->first();
        }
        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data = self::CASHPLAN;
        $data = new $data();
        $data->user_id = $user->id;
        $data->order_id = $request->input("order_id");
        $data->transaction_id = $request->input("transaction_id");
        $data->payment_code = $request->input("payment_code");
        $data->payment_type = $request->input("payment_type");
        $data->gross_amount = $request->input("gross_amount");
        $data->time = $request->input("time");
        $data->status = $request->input("status");
     
        $data->save();
        
        return $this->respond([
            'data'  => "sukses",            
        ]);
    }

    public function cashplanDetail(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'order_id'     => 'required',
            'participant_name'  => 'required',
            'plan'  => 'required',
            'unit_price'  => 'required',
            'resource'  => 'required',
        ]);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
            //return $validation->messages()->first();
        }
        $token = JWTAuth::getToken();
        $payload = JWTAuth::parseToken()->getPayload();
        if (!$token) {
            $this->respondUnauthorized("Invalid Token");
        }

        try {
            $user = JWTAuth::user();
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        $data = self::CASHPLANDETAIL;
        $data = new $data();
        $data->order_id = $request->input("order_id");
        $data->participant_name = $request->input("participant_name");
        $data->plan = $request->input("plan");
        $data->unit_price = $request->input("unit_price");
        $data->resource = $request->input("resource");
     
        $data->save();
        
        return $this->respond([
            'data'  => "Detail_sukses",            
        ]);
    }
    public function print()
    {
        $content="<h1>Hasil Cetak</h1>";

        PDF::SetTitle("jastan");
        PDF::AddPage();
        PDF::writeHtml($content, true, false, true, false,'');

        PDF::Output("samplepdf.pdf");
    }
}
