@extends('layouts.master')

@section('content')
{{ Former::horizontal_open() }}

{{ Former::hidden('id') }} <!--This is  the invoice id-->
{{ Former::label("Please select a client ") }}
{{ Former::select('clients')->options(array(
1  => 'Max',
3  => 'Clémence',
12 => 'Jean Valjean'
));
}}

{{ "Add a client + " }}
{{ "Will bring the UserController to add a new client in a pop-up window." }}

{{ Former::text('date_Created')->setAttributes(array( 'id' => 'datepicker') )}}
{{ Former::text('date_Due')->setAttributes(array( 'id' => 'datepicker') )}}


{{" Table Items will affect the items table in the database but we are going to use ajax to submit the items as they are passed or deleted
That way the items will be sent to the database without the use of the save button that affects only the invoice table" }}

{{"We have to write a function to tabulate the total for the invoice total. We could actually get that from the items table"}}
<table class="table" border="1">
    <tr>
    <th>
        Item

    </th>
    <th>
        Description
    </th>

        <th>Qty</th>

        <th>Price</th>

    </tr>
    <tr>
        <td>Items #</td>
        <td>Desc.</td>
        <td>Qty/Hrs</td>
        <td>Price</td>
    </tr>


</table>
{{ "Total will be tabulated with some javascript before filling in the textarea Total" }}

{{ Former::text('total') }}

{{ Former::submit() }}

{{ Former::close() }}

@stop