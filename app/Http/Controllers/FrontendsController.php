<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Training;
use App\Models\Book;
use App\Models\TrainerProfile;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactsMail;
use App\Mail\JoinMail;

class FrontendsController extends Controller
{
    /*public function test()
    {
        dd(Request::all());
    }*/
    public function index()
    {
        
        $categories = Category::all();
        $books = Book::where('status', '1')->where('featured', '1')->get();
        $featureds = Training::where('status', '1')->where('featured', '1')->get();
        return view('frontend.index', compact('featureds', 'books', 'categories'));
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function at_a_glance()
    {
        return view('frontend.at_a_glance');
    }
    public function our_location()
    {
        return view('frontend.our_location');
    }
    public function md_message()
    {
        return view('frontend.md_message');
    }

    public function job_seekers()
    {
        return view('frontend.job-seekers');
    }
    public function consultancy()
    {
        return view('frontend.consultancy');
    }

    public function company_profile()
    {
        return view('frontend.company_profile');
    }
    public function books()
    {
        $books = Book::where('status', '1')->paginate(10);
        return view('frontend.books', compact('books'));
    }

    public function single_book($id)
    {
        $profile = TrainerProfile::findOrFail(1);
        $book = Book::findOrFail($id);
        return view('frontend.single_book', compact('book', 'profile'));
    }

    public function order_book($id)
    {
        $book = Book::findOrFail($id);
        return view('frontend.order_book', compact('book'));
    }

    public function order(Request $request)
    {
        $info = $request->all();
        //dd($info['training']);
        /* Laravel mail::to
        Mail::to('compliancetrainingbd2019@gmail.com')->send(new JoinMail($info));*/
        $to      = 'compliancetrainingbd2019@gmail.com';
        $subject = $info['book'];
        $message = 'Name: '.$info['fname']."\n".'Book: '.$info['book']."\n".'Phone: '.$info['phone']."\n".$info['note'];
        $headers = array(
            'From' => 'compliancetrainingbd@compliancetrainingbd.com',
            'Reply-To' => 'no-reply@compliancetrainingbd.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to, $subject, $message, $headers);
        Session::flash('status', 'Registration succeed!');
        return back();
    }

    public function my_profile()
    {
        $profile = TrainerProfile::findOrFail(1);
        return view('frontend.my_profile', compact('profile'));
    }

    public function trainings()
    {
        $trainings = Training::where('status', 1)->paginate(10);
        return view('frontend.training', compact('trainings'));
    }

    public function single_training($slug)
    {
        $profile = TrainerProfile::findOrFail(1);
        $training = Training::where('slug', $slug)->first();
        $related_trainings = Training::where('category_id', $training->category_id)->get();
        return view('frontend.single_training', compact('training', 'profile', 'related_trainings'));
    }

    public function join_training($id)
    {
        $training = Training::findOrFail($id);
        return view('frontend.join_training', compact('training'));
    }

    public function join_training_submit(Request $request)
    {
        $info = $request->all();
        //dd($info['training']);
        /* Laravel mail::to 
        Mail::to('compliancetrainingbd2019@gmail.com')->send(new JoinMail($info));*/
        $to      = 'compliancetrainingbd2019@gmail.com';
        $subject = $info['training'];
        $message = 'Name: '.$info['fname']."\n".'Gender: '.$info['gender']."\n".'Training: '.$info['training']."\n".'Phone: '.$info['phone']."\n".$info['note'];
        $headers = array(
            'From' => 'compliancetrainingbd@compliancetrainingbd.com',
            'Reply-To' => 'no-reply@compliancetrainingbd.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to, $subject, $message, $headers);
        Session::flash('status', 'Registration succeed!');
        return back();
    }




    public function contact()
    {
        return view('frontend.contact');
    }

    public function contact_submit(Request $request)
    {
        $info = $request->all();

        //$info = $request->all();
        //dd($info['training']);
        /* Laravel mail::to
        Mail::to('compliancetrainingbd2019@gmail.com')->send(new JoinMail($info));*/
        $to      = 'compliancetrainingbd2019@gmail.com';
        $subject = $info['training'];
        $message = 'Name: '.$info['fname']."\n".'Gender: '.$info['gender']."\n".'Training: '.$info['training']."\n".'Phone: '.$info['phone']."\n".$info['note'];
        $headers = array(
            'From' => 'compliancetrainingbd@compliancetrainingbd.com',
            'Reply-To' => 'no-reply@compliancetrainingbd.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to, $subject, $message, $headers);
        Session::flash('status', 'Registration succeed!');
        return back();
    }

    public function training_on_category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $trainings = Training::where('category_id', $category->id)->get();
        return view('frontend.training_on_category', compact('trainings', 'category'));
    }

    public function email_to_friend(Request $request)
    {

        //email training email_book
        $training = Training::findOrFail($request->training);

        $to      = $request->friend_email;
        $subject = $training->title;
        $message = '<html><body><div style="height:650px;">';
        $message .= '<div class="card">';
        $message .= '<h1 style=" padding:20px; color:white; background-color:#007b45;">'.$training->title.'</h1>';
        $message .=  '<div class="card-body">';
        $message .=    '<div class="row" style="display:flex">';
        $message .=        '<div style="width:60%; text-align:left;">';
        $message .=            '<p style="color:black;">';
        $message .=                '<span>DURATION: '.$training->session_duration .'</span><br>';
        $message .=                '<span>Start On: '.$training->start_date.'<span><br>';
        $message .=                '<span>Completed On: '.$training->end_date .'</span><br>';
        $message .=                '<span>Price: BDT  '.$training->price.'/-</span><br>';
        $message .=            '</p>';
        $message .=            '<a href="'.route("single_training", $training->slug).'" style="background-color:#0d6efd; border-radius:5%; color:white !important; padding:8px; font-size:18px; text-decoration:none; margin-top:25px;">View Details</a>';
        $message .=        '</div>';
        $message .=        '<div style="width:40%; text-align:center; ">';
        $message .=            '<img src="'.asset("assets/img/profile.jpg").'" style="border-radius:50%;" height="120px;" width="120px;">';
        $message .=            '<div style="">';
        $message .=                '<p style="font-size:14px; font-weight:bold;">TRAINER: MOHAMMAD ABDUR RAHMAN</p>';
        $message .=            '</div>';       
        $message .=        '</div>';
        $message .=    '</div>';
        $message .=  '</div>';
        $message .='</div>';
        $message .= '</div></body></html>';
        $headers = array(
            'From' => $request->your_email,
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html;charset=UTF-8',
            'Reply-To' => $request->your_email,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to, $subject, $message, $headers);
        Session::flash('status', 'Registration succeed!');
        return back();
    }

    public function email_book(Request $request)
    {
        //dd($request->book);
        //email training email_book
        $book = Book::findOrFail($request->book);

        $to      = $request->friend_email;
        $subject = $book->title;
        $message = '<html><body><div style="height:650px;">';
        $message .= '<div class="card">';
        $message .= '<h1 style=" padding:20px; color:white; background-color:#007b45;">'.$book->title.'</h1>';
        $message .=  '<div class="card-body">';
        $message .=    '<div class="row" style="display:flex">';
        $message .=        '<div style="width:60%; text-align:left;">';
        $message .=            '<p style="color:black;">';
        $message .=                '<span>WRITER: MOHAMMAD ABDUR RAHMAN</span><br>';
        $message .=                '<span>Pages: '.$book->pages.'<span><br>';
        $message .=                '<span>Label Price: BDT '.$book->label_price.'/-</span><br>';
        $message .=                '<span>Sales Price: BDT  '.$book->price.'/-</span><br>';
        $message .=            '</p>';
        $message .=            '<a href="'.route("single_book", $book->id).'" style="background-color:#0d6efd; border-radius:5%; color:white !important; padding:8px; font-size:18px; text-decoration:none; margin-top:25px;">View Details</a>';
        $message .=        '</div>';
        $message .=        '<div style="width:40%; text-align:center; ">';
        $message .=            '<img src="'.asset("assets/img/profile.jpg").'" style="border-radius:50%;" height="120px;" width="120px;">';
        $message .=            '<div style="">';
        $message .=                '<p style="font-size:14px; font-weight:bold;">WRITER: MOHAMMAD ABDUR RAHMAN</p>';
        $message .=            '</div>';       
        $message .=        '</div>';
        $message .=    '</div>';
        $message .=  '</div>';
        $message .='</div>';
        $message .= '</div></body></html>';
        $headers = array(
            'From' => $request->your_email,
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html;charset=UTF-8',
            'Reply-To' => $request->your_email,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        mail($to, $subject, $message, $headers);
        Session::flash('status', 'Email succeed!');
        return back();
    }
}
