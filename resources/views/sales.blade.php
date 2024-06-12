@extends('layouts.master')
@section('content')   

<div class="container pt-5 mt-5">
<div class="container mt-5 pt-5"> 
    <div class="card">
        <div class="card-body">
            <header>
                <h1 class="card-title text-center">Sales and Refunds</h1>
            </header>
            <section class="pt-2">
                <h2>Sales Policy</h2>
                <p>Thank you for shopping at FastFruits. Here's our sales policy:</p>
                <ul>
                    <li>All sales are final.</li>
                    <li>We do not offer refunds or exchanges for change of mind.</li>
                    <li>If you receive a damaged or defective product, please contact us within 7 days of receiving your order for assistance.</li>
                    <li>For purchases made through our website, payment will be processed at the time of purchase.</li>
                </ul>
            </section>
            <section>
                <h2>Refunds Policy</h2>
                <p>Here's our refunds policy:</p>
                <ul>
                    <li>We only provide refunds for damaged or defective products.</li>
                    <li>To be eligible for a refund, you must contact us within 7 days of receiving your order and provide proof of the damage or defect.</li>
                    <li>Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.</li>
                    <li>If your refund is approved, it will be processed, and a credit will automatically be applied to your original method of payment within a certain amount of days.</li>
                    <li>Please note that shipping costs are non-refundable.</li>
                    <li>If you are returning an item over $50, consider using a trackable shipping service or purchasing shipping insurance. We don’t guarantee that we will receive your returned item.</li>
                </ul>
            </section>
            <section>
                <h2>Cancelations</h2>
                <p>You can cancel your order within 24 hours of purchase. After 24 hours, your order will be processed, and you will be unable to cancel it. If you wish to cancel your order, please contact our customer support team immediately.</p>
            </section>
            <footer>
                <p>Last Updated: April 4, 2024</p>
            </footer>
        </div>
    </div>
</div>
</div>

@endsection
