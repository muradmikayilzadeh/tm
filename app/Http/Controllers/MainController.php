<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\InvestmentOffer;
use App\Models\Tender;

class MainController extends Controller
{
    public function index()
    {
        $faqs = Faq::inRandomOrder()->take(3)->get();
        $testimonials = Testimonial::all();
        $blogs = Blog::limit(2)->get();

        return view("index", compact("faqs", "blogs", "testimonials"));
    }

    public function news()
    {
        $blogs = Blog::all();
        return view("blog", compact("blogs"));
    }

    public function investmentOffers()
    {
        $investment_offers = InvestmentOffer::all();
        return view("investment-offers", compact("investment_offers"));
    }

    public function getInvestmentOffer($locale, $slug)
    {
        // Ensure the offer exists
        $investment_offer = InvestmentOffer::where("offer_slug",$slug)->first();
        if (!$investment_offer) {
            abort(404, 'Blog not found');
        }

        // Get related offers
        $investment_offers = InvestmentOffer::where('offer_slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view("investment-single", compact("investment_offer", "investment_offers"));
    }

    public function tenders()
    {
        $tenders = Tender::all();
        return view("tenders", compact("tenders"));
    }

    public function getTender($locale, $slug)
    {
        // Ensure the offer exists
        $tender = Tender::where("tender_slug",$slug)->first();
        if (!$tender) {
            abort(404, 'Blog not found');
        }

        // Get related offers
        $tenders = Tender::where('tender_slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view("tender-single", compact("tender", "tenders"));
    }

    public function about()
    {
        return view("about");
    }

    public function getNews($locale, $slug)
    {
        // Ensure the blog exists
        $blog = Blog::where("blog_slug",$slug)->first();
        if (!$blog) {
            abort(404, 'Blog not found');
        }

        // Get related blogs
        $blogs = Blog::where('blog_slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view("blog-single", compact("blog", "blogs"));
    }

    public function services()
    {
        $services = Service::all();
        $testimonials = Testimonial::all();

        return view("services", compact("services", "testimonials"));
    }

    public function getService($locale, $slug)
    {
        // Ensure the service exists
        $service = Service::where("slug",$slug)->first();
        if (!$service) {
            abort(404, 'Service not found');
        }

        $faqs = Faq::inRandomOrder()->take(3)->get();
        $relatedServices = Service::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view("service-single", compact("service", "relatedServices", "faqs"));
    }

    public function faqPage()
    {
        $faqs = Faq::all();
        return view("faqs", compact("faqs"));
    }

    public function contactUsPage()
    {
        return view("contact-us");
    }

    public function submitContactForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'msg' => 'required|string',
        ]);

        // Create a new contact entry
        Contact::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('msg'),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function consult()
    {
        return view("consult");
    }
}
