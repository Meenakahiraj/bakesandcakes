<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\cusregmodel;
use App\Models\shopregmodel;
use App\Models\feedbackmodel;
use App\Models\cakemodel;
use App\Models\cookiesmodel;
use App\Models\cartmodel;
use App\Models\odermodel;
use App\Models\cart;
use Session;




class customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=cusregmodel::all();
        return view('adminviewcustomer',compact('customers'));
    }

    
    public function viewfeed()
    {
        $feedbacks=feedbackmodel::all();
        return view('adminviewfeedback',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cusreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required|regex:/^[a-z A-Z]+$/u',
            'lname' => 'required|regex:/^[a-z A-Z]+$/u',
            'hname' => 'required',
            'place' => 'required|regex:/^[a-z A-Z]+$/u',
            'phno' => 'numeric|required|digits:10',
            'uname' => 'required|unique:cusregmodels,uname',
            'password' => 'required|min:5',
            
        ]);
        
        $getfname=request('fname');
        $getlname=request('lname');
        $gethname=request('hname');
        $getplace=request('place');
        $getlmark=request('lmark');
        $getphno=request('phno');
        $getuname=request('uname');
        $getrepass=request('password');
            

        $customers=new cusregmodel();
        $customers->fname=$getfname;       
        $customers->lname= $getlname;
        $customers->hname=$gethname;
        $customers->place=$getplace;
        $customers->lmark=$getlmark;
        $customers->phno=$getphno;
        $customers->uname=$getuname;
        $customers->password=$getrepass;

        $customers->save();

        return view('login');
    }

        public function logs(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);

        
            $userinfo=cusregmodel::where('uname','=',$request->email)->first();
            $shopinfo=shopregmodel::where('suname','=',$request->email)->first();
           
            if($request->email=='admin' && $request->password=='admin')
            {
                $request-> session()->put('loggeduser','Admin');                
                return view('adminhome');
                
            }

            else if($shopinfo)
            {
                if($request->password==$shopinfo->spassword)
                    {
                        $request->session()->put('loggeduser',$shopinfo->suname);
                        return redirect('/shophome');
                    }
                    return back()->with('fail','Invalid Login !');
            }      

      

            else
            {
                if(!$userinfo)
                {
                    return back()->with('fail','Invalid Login !');
                }
                else
                {
                    if($request->password==$userinfo->password)
                    {
                        $request->session()->put('loggeduser',$userinfo->uname);
                        return redirect('/cushome');
                    }
                    return back()->with('fail','Invalid Login !');
                }
            }      

      

    }
    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/login');
        }
        else
        {
            return redirect('/login');
        }
        
    }

    public function cakeadd(Request $request)
    {

        $this->validate($request,[
            'pname' => 'required',
            'pimage' => 'required',
            'pcost' => 'numeric|required',
            
        ]);
        $getpname=request('pname');
        $getpcost=request('pcost');
        $getpdesc=request('pdesc');
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        $cake=new cakemodel();
        $cake->pname=$getpname;
        $cake->pcost=$getpcost;
        $cake->pdesc=$getpdesc;       
        $cake->pimage= $name;

        $cake->save();
        return view('addcake');
    }

    public function cakeupdate(Request $request, $id)
    {
       
    
    
            $cake=cakemodel::find($id);
    
    
            $getpname=request('pname');
            $getpcost=request('pcost');
            $getpdesc=request('pdesc');

        
            $cake->pname=$getpname;
            $cake->pcost=$getpcost;
            $cake->pdesc=$getpdesc;       
            $cake->save();
    
        
    
            return redirect('/adminmanagecake');
    
        
    }


    public function cakeedit($id)
    {
       
        $cake=cakemodel::find($id);
        return view('adminmanagecake',compact('cake'));
    }

    public function viewcake()
    {
        $cake=cakemodel::all();
        return view('adminviewcake',compact('cake'));
    }


    public function cookiesadd(Request $request)
    {

        $this->validate($request,[
            'cname' => 'required',
            'cimage' => 'required',
            
        ]);
        $getcname=request('cname');
        $getccost=request('ccost');
        $getcdesc=request('cdesc');
        $getcimage=$request->file('cimage');
        $cname=$getcimage->getClientOriginalName();
        $getcimage->move(public_path('assets/project_img'),$cname);

        $cookies=new cookiesmodel();
        $cookies->cname=$getcname;
        $cookies->ccost=$getccost;
        $cookies->cdesc=$getcdesc;       
        $cookies->cimage= $cname;

        $cookies->save();
        return view('addcookies');
    }



    public function cakeview()
    {
        $cake=cakemodel::all();
        return view('cakeview',compact('cake'));
    }

    public function viewproducts()
    {
        $cake=cakemodel::all();
        return view('viewproducts',compact('cake'));
    }

    public function viewproduct()
    {
        $cake=cakemodel::all();
        return view('cushome',compact('cake'));
    }

    public function cookiesview()
    {
        $cookies=cookiesmodel::all();
        return view('cookiesview',compact('cookies'));
    }


    public function feedback(Request $request)
    {
        
        $getcusname=request('cusname');
        $getpname=request('pname');
        $getfeed=request('feed');
        
            

        $feed=new feedbackmodel();
        $feed->cusname=$getcusname;       
        $feed->pname= $getpname;
        $feed->feed=$getfeed;
        
        $feed->save();

        return view('cushome');
    }

    public function search(Request $request)
    {
        $getfname=request('fname');
        $customers=cusregmodel::query()
        ->where('fname','LIKE',"%{$getfname}%")
        ->get();
        return view('adminviewcustomer',compact('customers'));
    }

    public function prosearch(Request $request)
    {
        $getpname=request('pname');
        $cake=cakemodel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('adminviewcake',compact('cake'));
    }


    public function cakesearch(Request $request)
    {
        $getpname=request('pname');
        $cake=cakemodel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('cakeview',compact('cake'));
    }





    public function buy($id)
    {
        $cust = DB::table('cusregmodels')->where('uname',session('loggeduser'))->get();
        $cake = DB::table('cakemodels')->where('id',$id)->get();
       /* $cust = DB::table('cusregmodels')->where('uname',session('loggeduser'))->get();*/
        return view('buy',compact('cust','cake'));
    }

    public function buycookies($id)
    {
        $cust = DB::table('cusregmodels')->where('uname',session('loggeduser'))->get();
        $cookies = DB::table('cookiesmodels')->where('id',$id)->get();
       /* $cust = DB::table('cusregmodels')->where('uname',session('loggeduser'))->get();*/
        return view('buycookies',compact('cust','cookies'));
    }

    public function addToCart(Request $request)
    {

         $cart=new cartmodel();
         $cart->user_id=$request->session()->get('loggeduser');
         $cart->product_id=$request->product_id;
            $cart->save();
            if($cart)
            {
                return back()->with('success','Successfuly added to cart');
            }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }

}


public function cartlist()
{
    
    $userId=Session::get('loggeduser');
    $products= DB::table('cart')
    ->join('cakemodels', 'cart.product_id', '=', 'cakemodels.id')
    ->where('cart.user_id', $userId)
    ->select('cakemodels.*','cart.id as cart_id')
    
    ->get();
     return view('/cartlist', compact('products'));
}


public function oderplace(Request $request)
{

    $this->validate($request,[
        'address' => 'required',
    ]);

    $userId=Session::get('loggeduser');
    $allcart=cartmodel::where('user_id',$userId)->get();
    foreach($allcart as $cart)
    {
        $oder=new odermodel;
        $oder->product_id=$cart['product_id'];
        $oder->user_id=$cart['user_id'];
        $oder->address=$request->address;
        $oder->status="pending";
        $oder->payment_method=$request->payment;
        $oder->payment_status="pending";
        $oder->save();
    }
    cartmodel::where('user_id',$userId)->delete();
    return redirect('thanks');
    //return $request->input();
}


public function myoders()
{
    $userId=Session::get('loggeduser');
    $orders=DB::table('odermodels')
    ->join('cakemodels', 'odermodels.product_id', '=', 'cakemodels.id')
    ->where('odermodels.user_id', $userId)
    ->get();
     return view('/myoders',['orders'=>$orders]);
}



public function removecart($id)
{
    cartmodel::destroy($id);
    return redirect('/cartlist');
}


public function odernow()
    {
    $userId=Session::get('loggeduser');
    $sum=$products= DB::table('cart')
    ->join('cakemodels', 'cart.product_id', '=', 'cakemodels.id')
    ->where('cart.user_id', $userId)
    ->sum('cakemodels.pcost');
     return view('/odernow',['sum'=>$sum]);
    }

static public function CartItem(){
    $userId=Session::get('loggeduser');
    return cartmodel::where('user_id',$userId)->count();
}








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $customers=cusregmodel::find($id);
        return view('adminmanagecus',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    
    
            $customers=cusregmodel::find($id);
    
    
        $getfname=request('fname');
        $getlname=request('lname');
        $gethname=request('hname');
        $getplace=request('place');
        $getlmark=request('lmark');
        $getphno=request('phno');
        $getuname=request('uname');
        $getrepass=request('password');
    
        
        $customers->fname=$getfname;       
        $customers->lname= $getlname;
        $customers->hname=$gethname;
        $customers->place=$getplace;
        $customers->lmark=$getlmark;
        $customers->phno=$getphno;
        $customers->uname=$getuname;
        $customers->password=$getrepass;

        $customers->save();
    
    
        
    
            return redirect('/adminviewcustomer');
    
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function deleteview($id)
    {
        $customers=cusregmodel::find($id);
        return view('adminmanagecusdelete',compact('customers'));
    }


    public function destroy($id)
    {
        $customers=cusregmodel::find($id);

        $customers->delete();


        return redirect('/adminviewcustomer');
    }


    public function deleteviewproduct($id)
    {
        $cake=cakemodel::find($id);
        return view('adminproductdelete',compact('cake'));
    }


    public function destroyproduct($id)
    {
        $cake=cakemodel::find($id);

        $cake->delete();


        return redirect('/adminviewcake');
    }

    
}
