<?php

namespace App\Http\Controllers;

use App\Models\employee as Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MainController extends Controller
{
    public function all()
    {
        $records = employee::all();
        $data = ['records' => $records];
        return response($data);
    }

    public $ent = "Employee";

    public function add(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'position' => 'required',
            'employee_id' => 'required',
            'facebook' => 'required',
            'telegram' => 'required',
            'wechat' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'viber' => 'required',
            'whatsapp' => 'required',
            'profile' => 'required|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $record = new Employee();
        $qrcode = QrCode::format('png')
            ->size(512)
            ->merge('/public/assets/img/PNG-3-Big-Size.png')
            ->errorCorrection('L')
            ->margin(1)
            ->generate("http://127.0.0.1:8000/infinitech/" .$request['employee_id']
        );

        $keys = ['lastname','firstname', 'middlename', 'position','employee_id','facebook','telegram','wechat','viber', 'whatsapp','profile','qrcode'];


        foreach ($keys as $key) {
            if ($key == 'qrcode') { 
                $filename = $request['employee_id'] . '.png';
                Storage::disk('public')->put('qrcodes/' . $filename, $qrcode);
                $record->$key = $filename;

            } elseif ($key == 'wechat') {
                if ($request->hasFile('wechat')) {
                    $file = $request->file('wechat');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('wechat', $filename, 'public');
                    $record->$key = $filename;
                }
            } elseif ($key == 'profile') {
                if ($request->hasFile('profile')) {
                    $file = $request->file('profile');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('profiles', $filename, 'public');
                    $record->$key = $filename;
                }
            } else {
                $record->$key = $request->$key;
            }
        }
        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }

    public function edit($id)
    {
        $record = Employee::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function upd(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'position' => 'required',
            'employee_id' => 'required',
            'facebook' => 'required',
            'telegram' => 'required',
            'viber' => 'required',
            'whatsapp' => 'required',
        ]);

        $record = Employee::find($request->id);
        $qrcode = QrCode::format('png')
            ->size(512)
            ->merge('/public/assets/img/PNG-3-Big-Size.png')
            ->errorCorrection('L')
            ->margin(1)
            ->generate("http://127.0.0.1:8000/infinitech/" .$request['employeeID']
        );



        $keys = [
            'lastname',
            'firstname',
            'middlename',
            'position',
            'employee_id',
            'facebook',
            'telegram',
            'wechat',
            'viber',
            'whatsapp',
            'profile',
            'qrcode'
        ];

        

        foreach ($keys as $key) {
            if ($key == 'qrcode') {
                $from = [255, 0, 0];
                $to = [0, 0, 255];

                $qr =  QrCode::size(200)
                    ->style('dot')
                    ->eye('circle')
                    ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
                    ->margin(1)
                    ->generate($request['employee_id']);
                $upd[$key] = $qr;

            } elseif ($key == 'wechat') {
                if ($request->hasFile('wechat')) {
                    $file = $request->file('wechat');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('wechat', $filename, 'public');
                    $upd[$key] = $filename;
                }
            } elseif ($key == 'profile') {
                if ($request->hasFile('profile')) {
                    $file = $request->file('profile');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('profiles', $filename, 'public');

                    $upd[$key] = $filename;
                }
            } else {
                $upd[$key] = $request->$key;
            }
        }
        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id)
    {
        $record = Employee::find($id)->delete();
        return response(['msg' => "Deleted $this->ent"]);
    }


}
