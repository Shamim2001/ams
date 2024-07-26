<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Vote;
use App\Models\Slider;
use App\Models\Company;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Patient;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\VoteCount;
use App\Mail\MessageEmail;
use App\Models\TeamMember;
use App\Models\VoteOption;
use App\Models\LinkResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'sliders' => Slider::where('status', true)->get(),
            'services' => Service::latest()->limit(10)->get(),
            'members' => TeamMember::where('status', true)->get(),
            'images' => Gallery::latest()->limit(9)->get(),
        ];
        return view('frontend.pages.home.home', $data);
    }

    public function about()
    {
        $title = "About";
        return view('frontend.pages.about.about', compact('title'));
    }
    public function ourCustomer()
    {
        $customers = Customer::orderBy('customer_name','ASC')->get();
        return view('frontend.pages.customer.customer',compact('customers'));
    }
    public function service()
    {
        $title = "Service";
        $services = Service::latest()->paginate(12);
        return view('frontend.pages.service.service', compact('title', 'services'));
    }

    public function serviceDetails($slug = null)
    {
        // return 'ss';

        $title = "Service";
        $service = Service::where('slug', $slug)->first();
        $viewKey = "service" . $service->id;
        if (!Session::has($viewKey)) {
            $service->update([
                'view_count' => $service->view_count + 1,
            ]);
        }
        Session::put($viewKey, 1);
        $latest_services = Service::latest()->whereNotIn('id', [$service->id])->limit(7)->get();
        return view('frontend.pages.service.service_details', compact('title', 'service', 'latest_services'));
    }
    public function linkResource()
    {
        $title = "Link & Resources";
        $link_resources = LinkResource::orderBy('id','ASC')->paginate(20);
        return view('frontend.pages.link-resources.link-resources', compact('title', 'link_resources'));
    }
    public function leadershipTeam()
    {
        $title = "Leadership Team";
        $members = TeamMember::where('status', true)->get();
        return view('frontend.pages.leadership-team.leadership-team', compact('title', 'members'));
    }
     public function whoweare()
    {


        return view('frontend.pages.who-we-are.who-we-are');
    }
    public function Whythechemical()
    {


        return view('frontend.pages.why-the-chemical.why-the-chemical');
    }
    public function Ourcertification()
    {


        return view('frontend.pages.our-certification.our-certification');
    }
    public function wePresent()
    {
        $title = "Our Foreign Partners";
        $countrys = Country::orderBy('id','ASC')->get();
        $suppliers = Supplier::orderBy('serial','ASC')->get();
        return view('frontend.pages.we-present.we-present', compact('title', 'countrys', 'suppliers'));
    }

    public function gallery()
    {
        $title = "Gallery Images";
        $images = Gallery::latest()->paginate(100);
        return view('frontend.pages.gallery.gallery', compact('title', 'images'));
    }
    public function contract()
    {
        $title = "Contract";
        return view('frontend.pages.contract.contract', compact('title'));
    }

    public function message(Request $request)
    {
        //Mail::to('mk84124291@gmail.com')->send(new MessageEmail($request));

        toast('Message Send Success', 'success');
        return back();
    }

    public function showVote($id)
    {
        $title = "Vote Show";
        $vote = Vote::with(['voteOptions'])->findOrFail($id);
        return view('frontend.pages.vote.show', compact('title', 'vote'));
    }

    public function voteCount($id)
    {
        if (auth()->check()) {
            $option = VoteOption::with('vote')->findOrFail($id);

            $exist_vote = VoteCount::where('user_id', auth()->id())->where('vote_id', $option->vote->id)->first();
            if ($exist_vote) {
                toast('Your Vote Already Done', 'warning');
                return back();
            } else {
                VoteCount::create([
                    'vote_id' => $option->vote->id,
                    'vote_option_id' => $id,
                    'user_id' => auth()->id(),
                ]);
                $option->update([
                    'hit_count' => $option->hit_count + 1,
                ]);

                toast('Your Vote Is Completed', 'success');
                return redirect()->back();
            }
        } else {
            toast('If You Sear Your Decision Then Login First ', 'warning');
            return  redirect()->route('login');
        }
    }

    public function lottery()
    {
        $title = "Lottery";
        //return view('frontend.pages.lottery.lottery',compact('title'));
        $user = User::all()->pluck('name');
        $prizes = ['Prize 1', 'Prize 2', 'Prize 3', 'Prize 4', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5', 'Prize 5'];
        return view('frontend.pages.lottery.lottery2', compact('title', 'user'));
    }

    public function products()
    {
        // $title = "Products";
        // $product_company = Product::where('company_id',  'IS NOT', null)->select('company_id')->groupBy('company_id')->get();
        // $products = Product::where('status', true)->orderBy('letter', 'ASC')->latest()->get();
        // $companys = Company::orderBy('letter', 'ASC')->latest()->get();
        // return view('frontend.pages.products.products', compact('title', 'products', 'companys', 'product_company'));

        $title = "Product";
        $products = Product::orderBy('name','ASC')->get();
        return view('frontend.pages.products.productsearch',compact('title','products'));
    }

    public function productSearch(Request $request)
    {

        $title = "Products";
        $query = $request->input('query');
        $products = Product::search($query)->where('status', true)->orderBy('letter', 'ASC')->latest()->get()->groupBy('letter');
        return view('frontend.pages.products.products', compact('title', 'products'));
    }

    public function searchProducts(){
        // $title = "Product Search";
        // $products = Product::orderBy('name','ASC')->get();
        // return view('frontend.pages.products.productsearch',compact('title','products'));

        $title = "Products";
        $product_company = Product::where('company_id',  'IS NOT', null)->select('company_id')->groupBy('company_id')->get();
        $products = Product::where('status', true)->orderBy('letter', 'ASC')->latest()->get();
        $companys = Company::orderBy('letter', 'ASC')->latest()->get();
        return view('frontend.pages.products.products', compact('title', 'products', 'companys', 'product_company'));
    }
    public function productDetails($slug)
    {
        $title = "Product Details";
        $product = Product::where('slug', $slug)->first();
        $company = Company::where('id', $product->company_id)->first();
        return view('frontend.pages.products.product-details', compact('title', 'product', 'company'));
    }


    public function patientStatus(Request $request)
    {
        $patient = Patient::where('patient_id', $request->patient_id)->first();

        if ($patient) {
            toast('Product Status is updated... :)','success');
            return redirect()->back();
        } else {
            toast('Product Status is not updated... :)','error');
            return redirect()->back();
        }
    }
}
