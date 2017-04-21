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
                            <span class=""><a href="{{url('/inquiry/create')}}">Create Inquiry</a></span><br><br>
                            <span class=""><a href="{{url('/inquiry/display')}}">Display Inquiry</a></span><br><br>
                            <span class=""><a href="{{url('/inquiry/change')}}">Change Inquiry</a></span><br><br>
                            <span class=""><a href="{{url('/inquiry/delete')}}">Delete Inquiry</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Quotation</div>
                        <div class="collapsible-body">
                            <span class=""><a href="{{url('/quotation/create')}}">Create Quotation</a></span><br><br>
                            <span class=""><a href="{{url('/quotation/display')}}">Display Quotation</a></span><br><br>
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
                            <span class=""><a href="{{url('/po/create')}}">Create</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Sale Order</div>
                        <div class="collapsible-body">
                            <span class=""><a href="{{url('/so/create')}}">Create</a></span><br><br>
                            <span class=""><a href="{{url('/so/display')}}">Display</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">today</i>Check Availability</div>
            <div class="collapsible-body">
                <span class=""><a href="{{url('/availability/display')}}">Display</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">room</i>Goods Issue</div>
            <div class="collapsible-body">
                <span class=""><a href="{{url('/goodsissue/create')}}">Create Goods Issue</a></span><br><br>
                <span class=""><a href="{{url('/goodsissue/display')}}">Display Goods Issue</a></span>
            </div>
        </li>
        <li>
            <div class="collapsible-header waves-effect"><i class="material-icons">credit_card</i>Payment</div>
            <div class="collapsible-body">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header waves-effect">Invoice</div>
                        <div class="collapsible-body">
                            <span class=""><a href="{{url('/invoice/create')}}">Create</a></span><br><br>
                            <span class=""><a href="{{url('/invoice/display')}}">Display</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header waves-effect">Receipt</div>
                        <div class="collapsible-body">
                            <span class=""><a href="{{url('/receipt/create')}}">Create</a></span><br><br>
                            <span class=""><a href="{{url('/receipt/display')}}">Display</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>

