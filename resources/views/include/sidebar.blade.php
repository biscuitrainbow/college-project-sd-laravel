<div class="col s3 m3 l3 xl3" style="margin-top:15px;">
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">assessment</i>Dashboard</div>
            <div class="collapsible-body">
                <span class=""><a href="dashboard-overall.php">Overall</a></span><br><br>
                <span class=""><a href="dashboard-material.php">Material</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">view_agenda</i>Material</div>
            <div class="collapsible-body">
                <span class=""><a href="{{ url('/material/create') }}">Create Material</a></span><br><br>
                <span class=""><a href="{{ url('/material/display') }}">Display Material</a></span><br><br>
                <span class=""><a href="{{ url('/material/change') }}">Change Material</a></span><br><br>
                <span class=""><a href="{{ url('/material/delete') }}">Delete Material</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">supervisor_account</i>Customer</div>
            <div class="collapsible-body">
                <span class=""><a href="{{url('/customer/create')}}">Create Customer</a></span><br><br>
                <span class=""><a href="{{url('/customer/display')}}">Display Customer</a></span><br><br>
                <span class=""><a href="{{url('/customer/change')}}">Change Customer</a></span><br><br>
                <span class=""><a href="{{url('/customer/delete')}}">Delete Customer</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">info_outline</i>Condition</div>
            <div class="collapsible-body">
                <span class=""><a href="{{url('/condition/create')}}">Create Condition</a></span><br><br>
                <span class=""><a href="{{url('/condition/display')}}">Display Condition</a></span><br><br>
                <span class=""><a href="condition-change.php">Change Condition</a></span><br><br>
                <span class=""><a href="condition-delete.php">Delete Condition</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">swap_horiz</i>Presale Process</div>
            <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header waves-effect">Inquiry</div>
                        <div class="collapsible-body">
                            <span class=""><a href="inquiry-create.php">Create Inquiry</a></span><br><br>
                            <span class=""><a href="inquiry-display.php">Display Inquiry</a></span><br><br>
                            <span class=""><a href="inquiry-Change.php">Change Inquiry</a></span><br><br>
                            <span class=""><a href="inquiry-delete.php">Delete Inquiry</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Quotation</div>
                        <div class="collapsible-body">
                            <span class=""><a href="quotation-create.php">Create Quotation</a></span><br><br>
                            <span class=""><a href="quotation-display.php">Display Quotation</a></span><br><br>
                            <span class=""><a href="quotation-Change.php">Change Quotation</a></span><br><br>
                            <span class=""><a href="quotation-delete.php">Delete Quotation</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">shopping_cart</i>Sale</div>
            <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header waves-effect">Customer PO</div>
                        <div class="collapsible-body">
                            <span class=""><a href="customerpurchaseorder-create.php">Create</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Sale Order</div>
                        <div class="collapsible-body">
                            <span class=""><a href="saleorder-create.php">Create</a></span><br><br>
                            <span class=""><a href="saleorder-display.php">Display</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">today</i>Check Availability</div>
            <div class="collapsible-body">
                <span class=""><a href="checkavailability-display.php">Display</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">room</i>Goods Issue</div>
            <div class="collapsible-body">
                <span class=""><a href="goodsissue-create.php">Create Goods Issue</a></span><br><br>
                <span class=""><a href="goodsissue-display.php">Display Goods Issue</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">credit_card</i>Payment</div>
            <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header waves-effect">Invoice</div>
                        <div class="collapsible-body">
                            <span class=""><a href="invoice-create.php">Create</a></span><br><br>
                            <span class=""><a href="invoice-display.php">Display</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Receipt</div>
                        <div class="collapsible-body">
                            <span class=""><a href="receipt-create.php">Create</a></span><br><br>
                            <span class=""><a href="receipt-display.php">Display</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>