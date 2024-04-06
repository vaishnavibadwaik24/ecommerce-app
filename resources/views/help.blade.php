@extends('layouts.master')
@section('content')   

<div class="container mt-5 pt-5"> 
<div class="container mt-5 pt-5"> 
    <div class="card">
        <div class="card-body">
            <header>
                <h1 class="card-title text-center">FAQs and Help</h1>
            </header>
            <section class="pt-2">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                We accept Visa, MasterCard, American Express, and PayPal.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does shipping take?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                Shipping times vary depending on your location. Typically, orders are delivered within 3-5 business days.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I return my order?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                Yes, we accept returns within 30 days of purchase. Please refer to our <a href="#refund-policy">refund policy</a> for more information.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2>Help</h2>
                <p>If you have any questions or need assistance, please don't hesitate to contact our customer support team:</p>
                <ul>
                    <li>Email: fruitables@gmail.com</li>
                    <li>Phone: 123-456-7890</li>
                    <li>Live Chat: Click the chat icon in the bottom right corner of the website.</li>
                </ul>
            </section>
            <footer>
                <p>Last Updated: April 4, 2024</p>
            </footer>
        </div>
    </div>
</div>
</div>
@endsection
