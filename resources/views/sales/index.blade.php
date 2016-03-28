@extends('baselayout/baselayout')

@section('content')


<div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Sales Register 
               

            <div class="panel-body">

                <div class="row ng-scope" ng-controller="SearchItemCtrl">

                    <div class="col-md-2">
                        <label>Search Item: <input ng-model="searchKeyword" class="form-control ng-pristine ng-untouched ng-valid"></label>

                        <table class="table table-hover">
                        <tbody data-link="row" class="rowlink">
                 
                       
                        @foreach ($hasiljson as $item)
                        @if($item[0]["parent"] == "All Products")
                        <tr class='clickable-row'>
                        <td id = '{{$item[0]["name"]}}' >{{$item[0]["name"]}}</td>
                        </tr>
                        
                        @endif
                        @endforeach

                        </tbody>
                        </table>
                    </div>

                    <div class ="col-md-7" id = "tambahkan">
                    </div>

                    <div class="col-md-3">

                        <div class="row">
                            
                            <form method="POST" action="http://tutapos.mytuta.com/sales" accept-charset="UTF-8" class="form-horizontal ng-pristine ng-valid"><input name="_token" type="hidden" value="Gon7blcNhLx1hysJ7B8lAQYlo2wsOdGcgnAOEM2G">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="invoice" class="col-sm-3 control-label">Invoice</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="invoice" value=" 201 " readonly="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="employee" class="col-sm-3 control-label">Employee</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="employee" value="admin" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="customer_id" class="col-sm-4 control-label">Customer</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" name="customer_id"><option value="1">Unknown </option><option value="2">Juan</option><option value="3">sin</option><option value="4">Rafael</option><option value="5">sada</option><option value="7">DovanaHost.com</option><option value="8">Test</option></select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_type" class="col-sm-4 control-label">Payment Type</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" name="payment_type"><option value="Cash">Cash</option><option value="Check">Check</option><option value="Debit Card">Debit Card</option><option value="Credit Card">Credit Card</option></select>
                                        </div>
                                    </div>
                                </div>
                            
                        </form></div>
                           
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>&nbsp;</th>
                                </tr>
                            <!-- ngRepeat: newsaletemp in saletemp -->
                            <tr ng-repeat="newsaletemp in saletemp" class="ng-scope">
                            <td class="ng-binding">1</td><td class="ng-binding">Test Itemsss</td><td class="ng-binding">$10.00</td><td><input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2" class="ng-pristine ng-untouched ng-valid"></td><td class="ng-binding">$10.00</td><td><button class="btn btn-danger btn-xs" type="button" ng-click="removeSaleTemp(newsaletemp.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr><!-- end ngRepeat: newsaletemp in saletemp --><tr ng-repeat="newsaletemp in saletemp" class="ng-scope">
                            <td class="ng-binding">1</td><td class="ng-binding">Test Itemsss</td><td class="ng-binding">$10.00</td><td><input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2" class="ng-pristine ng-untouched ng-valid"></td><td class="ng-binding">$10.00</td><td><button class="btn btn-danger btn-xs" type="button" ng-click="removeSaleTemp(newsaletemp.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr><!-- end ngRepeat: newsaletemp in saletemp --><tr ng-repeat="newsaletemp in saletemp" class="ng-scope">
                            <td class="ng-binding">2</td><td class="ng-binding">Test Item 2</td><td class="ng-binding">$16.00</td><td><input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2" class="ng-pristine ng-untouched ng-valid"></td><td class="ng-binding">$16.00</td><td><button class="btn btn-danger btn-xs" type="button" ng-click="removeSaleTemp(newsaletemp.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr><!-- end ngRepeat: newsaletemp in saletemp --><tr ng-repeat="newsaletemp in saletemp" class="ng-scope">
                            <td class="ng-binding">2</td><td class="ng-binding">Test Item 2</td><td class="ng-binding">$16.00</td><td><input type="text" style="text-align:center" autocomplete="off" name="quantity" ng-change="updateSaleTemp(newsaletemp)" ng-model="newsaletemp.quantity" size="2" class="ng-pristine ng-untouched ng-valid"></td><td class="ng-binding">$16.00</td><td><button class="btn btn-danger btn-xs" type="button" ng-click="removeSaleTemp(newsaletemp.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr><!-- end ngRepeat: newsaletemp in saletemp -->
                        </tbody></table>

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total" class="col-sm-4 control-label">Add Payment</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid" id="add_payment" ng-model="add_payment">
                                            </div>
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="form-group">
                                        <label for="employee" class="col-sm-4 control-label">Comments</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="comments" id="comments">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_id" class="col-sm-4 control-label">TOTAL:</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><b class="ng-binding">$52.00</b></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label for="amount_due" class="col-sm-4 control-label">Amount Due</label>
                                            <div class="col-sm-8">
                                            <p class="form-control-static ng-binding">($52.00)</p>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success btn-block">Complete Sale</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            
                        

                    </div>

                </div>

            </div>
            </div>
@include ('baselayout/footer') 


@stop