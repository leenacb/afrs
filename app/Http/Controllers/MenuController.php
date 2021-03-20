<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Adminmodel;
use App\models\Flightmodel;
use App\models\Booking;
use App\models\Ticket;
class MenuController extends Controller
{
    /****
*@booking function start
*@Leena CB
*@date
*@11/03/2021
****/
    function book($id){
        $data=Flightmodel::find($id);
        return view('menus.book',['user'=>$data]);
    }
    function pbook(){
        
    }
    /****
*@flight function start
*@Arsha
*@date
*@11/03/2021
****/
    public function flightview()
    {
        $data = DB::table("flightmodels")
          ->select("flightmodels.*",
                    DB::raw("(SELECT city FROM adminmodels
                                WHERE adminmodels.id = flightmodels.departure) as depcity"),
                    DB::raw("(SELECT city FROM adminmodels
                                WHERE adminmodels.id = flightmodels.arrival) as arrcity"))
                    ->get();
        return view('menus.flightview',['users'=>$data]);
    }
    /****
*@ticket generation start
*@Arsha
*@date
*@11/03/2021
****/
    function ticket(){
        return view('menus.ticketbkng');
    }
    /****
*@Search using ticket number
*@Arsha
*@date
*@12/03/2021
****/
    function ticketSearch(Request $req){
        // $data = DB::table("tickets")
        // ->select("tickets.*",
        //           DB::raw("(SELECT * FROM bookings
        //                       WHERE bookings.id = tickets.bid)"),
        //           DB::raw("(SELECT city FROM adminmodels
        //                       WHERE adminmodels.id = booings.departure) as depcity"),
        //           DB::raw("(SELECT city FROM adminmodels
        //                       WHERE adminmodels.id = bookings.arrival) as arrcity"))
        //           ->get();
        // $bookid = Ticket::join('bookings','bookings.id','=','tickets.bid')
        //         ->where("ticketno",$req->tno)
        //         ->get();
        // foreach($bookid as $row){
        //     $b_id=$row->bid;
        // }
        //dd($bookid);
        // $data = DB::table("tickets")
        //             ->select("tickets.*",
        //             DB::raw("(SELECT city FROM adminmodels 
        //                         WHERE adminmodels.id=bookings.departure) as depcity"),
        //             DB::raw("(SELECT city FROM adminmodels 
        //                         WHERE adminmodels.id bookings.arrival) as arrcity"))
        // ->where([

        //     ['tickets.ticketno', '=', 1002],
    
        //     ['tickets.userid', '=', 1],
        //     ['tickets.bid', '=', 2]
    
        // ])
        // ->get();
        //             ->where('tickets.bid',$b_id)
        //             ->where('tickets.ticketno',$req->tno)
        //             ->where('tickets.userid',$req->userid)
        //             ->get();
       //  dd($data);

//         select *,
// (SELECT city FROM adminmodels

//    WHERE adminmodels.id = bookings.departure) as arrcity
// ,

//  (SELECT city FROM adminmodels

//    WHERE adminmodels.id = bookings.arrival) as arrcity
    
// from tickets,bookings where tickets.bid = bookings.id and tickets.ticketno=1200 and tickets.userid=1
   

        $shares = DB::table('tickets')
            ->join('bookings', 'tickets.bid', '=', 'bookings.id')
            ->join('adminmodels', 'adminmodels.id', '=', 'bookings.departure')
            
            ->where([

                ['tickets.ticketno', '=', $req->tno],
        
                ['tickets.userid', '=', $req->userid]
        
            ])
            ->get();
foreach($shares as $row){
    $arr=$row->arrival;
}
$arriv=Adminmodel::find($arr);
//dd($arriv);
 return view('menus.ticketbkng',compact('shares','arriv'));
    }
    /****
*@Function for reduce seat count
*@Leena CB
*@date
*@12/03/2021
****/

     function bookdata(Request $req){
        if($req->class == 'bussiness')
        {
                $page = Flightmodel::find($req->fid);
                $availa=$page->bseat;
                $amount=$page->bcharge;
                $seat='A'.$availa;
                Flightmodel::where('id', $req->fid)->update(array('bseat' => $availa-1));    
                
        }    
        elseif($req->class == 'economic')
        {
                $page = Flightmodel::find($req->fid);
                $availa=$page->eseat;
                $amount=$page->echarge;
                $seat='B'.$availa;
                Flightmodel::where('id', $req->fid)->update(array('eseat' => $availa-1));    
                
        }  
        elseif($req->class == 'first')
        {
                $page = Flightmodel::find($req->fid);
                $availa=$page->fseat;
                $amount=$page->fcharge;
                $seat='C'.$availa;
                Flightmodel::where('id', $req->fid)->update(array('fseat' => $availa-1));    
                
        }     
        if($req->age > 60)
        {
            $total=$amount-500;
        }
        else{
            $total=$amount;
        }
        
        $flight=new Booking;
        $flight->pname=$req->userid;
        $flight->age=$req->age;
        $flight->class=$req->class;
        $flight->fname=$req->fname;
        $flight->fno=$req->fno;
        $flight->departure=$req->departure;
        $flight->arrival=$req->arrival;
        $flight->deptime=$req->deptime;
        $flight->depdate=$req->depdate;
        $flight->amount=$total;
        $flight->seatNo=$seat;
        $flight->save();
        $ticket=new Ticket;
        $ticket->bid=$flight->id;
        $ticket->ticketno=1000+$flight->id;
        $ticket->userid=$req->userid;  
     $ticket->save();
        if($req){
        return back()->with('success',$ticket->ticketno." | Total  Amount :".$total);
        }
     else{
         return back()->with('fail','Something wrong');
         }
        return redirect('flight');

        

    }
}
