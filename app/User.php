<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;



class User extends Authenticatable
{
    use Notifiable;

    // Use Guards
    protected $guard = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username','email', 'password', 'branchId', 'role', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    //Get Branch Detials From Branch Table Using Eloquent Relationship
    public function userbranch(){
        return $this->belongsTo("App\Branches","branchId")->select('id','branch_name');
    }


    
    // Get User Details When Logged In
    public static function details(){
        // Get Branch Id
        // $user = Auth::guard('user')->user();
        // $user = json_decode(json_encode($user));
        // echo "<pre>"; print_r($user); die;
        // $branchid = $user->branchId;
        // dd($branchid); die;
        $userId = session('user')['userid'];
        $branchid = session('user')['branchid'];
        
        
        $details = User::select('id','name','branchId')->with('userbranch')->where('branchId',$branchid)->where('status',1)->first();
        

        return $details;
    }



  


}
